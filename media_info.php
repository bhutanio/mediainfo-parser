<?php
/**
 * Media Info (TXT) to PHP (Array)
 * 
 */

class MediaInfo {

    private $data = null;
    private $lines = null;
    private $media_info = [];

    public function __construct( $input )
    {
        $this->data = $input;
        $this->lines = preg_split("/\r\n|\n|\r/", $this->data);
    }

    public function parse()
    {
        $in_section = "";
        $has_serial = false;
        $in_serial = null;

        foreach ($this->lines as $line) {
            if( strlen($line) == 0 ) {
                continue;
            }

            if( !preg_match("/:+/", $line) ) {
                if( preg_match_all("/(.+)\s*#\s*([0-9])/", $line, $matches) ) {
                    $has_serial = true;
                    $in_section = trim( strtolower($matches[1][0]) );
                    $in_serial = strtolower($matches[2][0]);
                    $this->media_info[ $in_section ][ $in_serial ] = [ 'title' => $matches[0][0] ];
                } else {
                    $has_serial = false;
                    $in_section = trim( strtolower($line) );
                    $this->media_info[ $in_section ] = [ 'title' => $line ];
                }
            } else {
                preg_match_all("/(.+)\s+:\s+(.+)/", $line, $matches);

                if( $has_serial ) {
                    $this->media_info[ $in_section ][ $in_serial ][ strtolower(trim($matches[1][0])) ] = $matches[2][0];
                } else {
                    $this->media_info[ $in_section ][ strtolower(trim($matches[1][0])) ] = $matches[2][0];
                }
            }
        }

        return $this->media_info;
    }

    public function format()
    {
        $media_info = $this->parse();
        $output = [];

        if ( isset($media_info['general']) ) {
            $output['general']['format'] = null;
            $output['general']['duration'] = null;
            $output['general']['filesize'] = null;
            $output['general']['bitrate'] = null;
            foreach ($media_info['general'] as $key => $value) {
                switch ($key) {
                    case 'format':
                        $output['general']['format'] = strtolower($value);
                        break;

                    case 'duration':
                        $output['general']['duration'] = strtolower($value);
                        break;

                    case 'file size':
                    case 'file_size':
                    case 'filesize':
                        $output['general']['filesize'] = strtolower($value);
                        break;

                    case 'overall bit rate':
                    case 'overall_bit_rate':
                    case 'overallbitrate':
                        $bitrate_unit = explode(' ', $value);
                        $bitrate_unit = strtolower(end($bitrate_unit));
                        $output['general']['bitrate'] = (float) str_replace(' ', '', $value) .' '. $bitrate_unit;
                        break;
                }
            }
        }

        if ( isset($media_info['video']) ) {
            if ( !isset($media_info['video'][1]) ) {
                $videos[1] = $media_info['video'];
            } else {
                $videos = $media_info['video'];
            }
            foreach ($videos as $vid_key => $video) {
                $output['video'][$vid_key]['codec'] = null;
                $output['video'][$vid_key]['codec_id'] = null;
                $output['video'][$vid_key]['writing_library'] = null;
                $output['video'][$vid_key]['format'] = null;
                $output['video'][$vid_key]['format_version'] = null;
                $output['video'][$vid_key]['width'] = null;
                $output['video'][$vid_key]['height'] = null;
                $output['video'][$vid_key]['framerate'] = null;
                $output['video'][$vid_key]['framerate_mode'] = null;
                $output['video'][$vid_key]['aspect_ratio'] = null;
                $output['video'][$vid_key]['bitrate'] = null;
                foreach ($video as $key => $value) {
                    switch ($key) {
                        case 'codec id':
                        case 'codec_id':
                        case 'codecid':
                            $output['video'][$vid_key]['codec_id'] = strtolower($value);
                            break;

                        case 'writing library':
                        case 'writing_library':
                        case 'encoded_library':
                            $output['video'][$vid_key]['writing_library'] = strtolower($value);
                            break;

                        case 'format':
                            $output['video'][$vid_key]['format'] = strtolower($value);
                            break;

                        case "format version":
                        case "format_version":
                            $output['video'][$vid_key]['format_version'] = strtolower($value);
                            break;

                        case 'width':
                            $output['video'][$vid_key]['width'] = (float) str_replace(' ', '', $value);
                            break;

                        case 'height':
                            $output['video'][$vid_key]['height'] = (float) str_replace(' ', '', $value);
                            break;

                        case "frame rate":
                        case "framerate":
                            $output['video'][$vid_key]['framerate'] = (float) str_replace(' ', '', $value);
                            break;

                        case "frame rate mode":
                        case "framerate_mode":
                            $output['video'][$vid_key]['framerate_mode'] = strtolower($value);
                            break;

                        case "display aspect ratio":
                        case "display_aspect_ratio":
                        case "aspect ratio":
                        case "aspect_ratio":
                        case "aspectratio":
                            $output['video'][$vid_key]['aspect_ratio'] = (float) str_replace(' ', '', $value);
                            break;

                        case "bit rate":
                        case "bit_rate":
                        case "bitrate":
                        case "nominal bit rate":
                        case "bitrate_nominal":
                            $bitrate_unit = explode(' ', $value);
                            $bitrate_unit = end($bitrate_unit);
                            $output['video'][$vid_key]['bitrate'] = (float) str_replace(' ', '', $value).' '.$bitrate_unit;
                            break;
                    }
                }
                $output['video'][$vid_key]['codec'] = $this->guess_video_codec($output['video'][$vid_key]);
                unset($output['video'][$vid_key]['codec_id']);
                unset($output['video'][$vid_key]['writing_library']);
                unset($output['video'][$vid_key]['format']);
                unset($output['video'][$vid_key]['format_version']);
            }
        }

        if ( isset($media_info['audio']) ) {
            if ( !isset($media_info['audio'][1]) ) {
                $audios[1] = $media_info['audio'];
            } else {
                $audios = $media_info['audio'];
            }
            foreach ($audios as $aud_key => $audio) {
                $output['audio'][$aud_key]['codec'] = null;
                $output['audio'][$aud_key]['format'] = null;
                $output['audio'][$aud_key]['format_info'] = null;
                $output['audio'][$aud_key]['format_profile'] = null;
                $output['audio'][$aud_key]['bitrate'] = null;
                $output['audio'][$aud_key]['language'] = null;
                $output['audio'][$aud_key]['channels'] = null;
                $output['audio'][$aud_key]['sampling_rate'] = null;
                foreach ($audio as $key => $value) {
                    switch ($key) {
                        case 'format':
                            $output['audio'][$aud_key]['format'] = strtolower($value);
                            break;

                        case 'format/info':
                        case 'format_info':
                            $output['audio'][$aud_key]['format_info'] = strtolower($value);
                            break;

                        case 'format profile':
                        case 'format_profile':
                            $output['audio'][$aud_key]['format_profile'] = strtolower($value);
                            break;

                        case "bit rate":
                        case "bitrate":
                            $bitrate_unit = explode(' ', $value);
                            $bitrate_unit = strtolower(end($bitrate_unit));
                            $output['audio'][$aud_key]['bitrate'] = (float) str_replace(' ', '', $value).' '.$bitrate_unit;
                            break;

                        case 'language':
                            $output['audio'][$aud_key]['language'] = strtolower($value);
                            break;

                        case 'channel(s)':
                            $output['audio'][$aud_key]['channels'] = (float) strtolower($value);
                            break;

                        case 'sampling rate':
                        case 'sampling_rate':
                            $output['audio'][$aud_key]['sampling_rate'] = (float) strtolower($value);
                            break;
                    }
                }
                $output['audio'][$aud_key]['codec'] = $this->guess_audio_codec($output['audio'][$aud_key]);
                unset($output['audio'][$aud_key]['format']);
                unset($output['audio'][$aud_key]['format_info']);
                unset($output['audio'][$aud_key]['format_profile']);
            }
        }

        if ( isset($media_info['text']) ) {
            if ( !isset($media_info['text'][1]) ) {
                $subtitles[1] = $media_info['text'];
            } else {
                $subtitles = $media_info['text'];
            }
            foreach ($subtitles as $sub_key => $subtitle) {
                $output['subtitle'][$sub_key]['codec'] = null;
                $output['subtitle'][$sub_key]['codec_id'] = null;
                $output['subtitle'][$sub_key]['codec_info'] = null;
                $output['subtitle'][$sub_key]['format'] = null;
                $output['subtitle'][$sub_key]['language'] = null;
                foreach ($subtitle as $key => $value) {
                    switch ($key) {
                        case 'codec id':
                        case 'codec_id':
                        case 'codecid':
                            $output['subtitle'][$sub_key]['codec_id'] = strtolower($value);
                            break;

                        case 'codec id/info':
                        case 'codec_info':
                        case 'codec_id_info':
                            $output['subtitle'][$sub_key]['codec_info'] = strtolower($value);
                            break;

                        case 'format':
                            $output['subtitle'][$sub_key]['format'] = strtolower($value);
                            break;

                        case 'language':
                            $output['subtitle'][$sub_key]['language'] = strtolower($value);
                            break;
                    }
                }
                $output['subtitle'][$sub_key]['codec'] = $this->guess_subtitle_codec($output['subtitle'][$sub_key]);
                unset($output['subtitle'][$sub_key]['codec_id']);
                unset($output['subtitle'][$sub_key]['codec_info']);
                unset($output['subtitle'][$sub_key]['format']);
            }
        }

        dump($output);

        $output = $media_info;

        return $output;
    }

    private function guess_video_codec($video) {
        switch ( $video['format'] ) {
            case "mpeg video":
                switch ( $video['format_version'] ) {
                    case "version 2":
                        return "mpeg-2";
                    case "version 1":
                        return "mpeg-1";
                }
                return $video['format'];
        }
        
        switch ( $video['codec_id'] ) {
            case "div3":
                return "divx 3";
            case "divx":
            case "dx50":
                return "divx";
            case "xvid":
                return "xvid";
            case "x264":
                return "x264";
        }
        
        $chk = strtolower($video['codec_id']);
        $wl = strtolower($video['writing_library']);
        if (($chk === "v_mpeg4/iso/avc" || $chk === "avc1") && strpos($wl, "x264 core") === FALSE) {
            return "h264";
        } else if (($chk === "v_mpeg4/iso/avc" || $chk === "avc1") && strpos($wl, "x264 core") > -1)  {
            return "x264";
        } else if (strtolower($video['format']) === "avc" && strpos($wl, "x264 core") === FALSE) {
            return "h264";
        }

        return null;
    }

    private function guess_audio_codec($audio)
    {
        switch ( $audio['format'] ) {
            case "mpeg audio":
                switch ( $audio['format_profile'] ) {
                    case "layer 3":
                        return "mp3";
                }
        }

        return $audio['format'];
    }

    private function guess_subtitle_codec($subtitle)
    {
        switch ( $subtitle['format'] ) {
            case "utf-8":
                return 'srt';
                break;
        }

        switch ( $subtitle['codec_id'] ) {
            case "s_text/utf8":
                return 'srt';
                break;
        }

        return $subtitle['format'];
        return null;
    }
}
