<?php

require __DIR__.'/../vendor/autoload.php';

$parser = new \Bhutanio\MediaInfo\Parser;

$text = 'General
Unique ID : 196577436732866890488189844379296306425 (0x93E36FEAFE6CE0B4B0BDF595176F94F9)
Complete name : Pod powierzchnia (2006) -- Marek Gajczak.mkv
Format : Matroska
Format version : Version 4 / Version 2
File size : 1.15 GiB
Duration : 1 h 14 min
Overall bit rate : 2 197 kb/s
Encoded date : UTC 2017-10-24 07:59:17
Writing application : mkvmerge v7.7.0 (\'Six Voices\') 32bit built on Feb 28 2015 23:23:00
Writing library : libebml v1.3.1 + libmatroska v1.4.2

Video
ID : 1
Format : AVC
Format/Info : Advanced Video Codec
Format profile : High@L4.1
Format settings, CABAC : Yes
Format settings, ReFrames : 10 frames
Codec ID : V_MPEG4/ISO/AVC
Duration : 1 h 14 min
Bit rate : 1 750 kb/s
Width : 712 pixels >> 1016 pixels
Height : 572 pixels >> 572 pixels
Display aspect ratio : 16:9
Original display aspect ratio : 5:4
Frame rate mode : Constant
Frame rate : 25.000 FPS
Color space : YUV
Chroma subsampling : 4:2:0
Bit depth : 8 bits
Scan type : Progressive
Bits/(Pixel*Frame) : 0.172
Stream size : 937 MiB (80%)
Writing library : x264 core 148 r2744 b97ae06
Encoding settings : cabac=1 / ref=10 / deblock=1:-3:-3 / analyse=0x3:0x133 / me=umh / subme=9 / psy=1 / psy_rd=1.00:0.15 / mixed_ref=1 / me_range=28 / chroma_me=1 / trellis=2 / 8x8dct=1 / cqm=0 / deadzone=21,11 / fast_pskip=0 / chroma_qp_offset=-3 / threads=3 / lookahead_threads=1 / sliced_threads=0 / nr=0 / decimate=0 / interlaced=0 / bluray_compat=0 / constrained_intra=0 / bframes=8 / b_pyramid=2 / b_adapt=2 / b_bias=0 / direct=3 / weightb=1 / open_gop=0 / weightp=2 / keyint=250 / keyint_min=25 / scenecut=40 / intra_refresh=0 / rc_lookahead=70 / rc=2pass / mbtree=1 / bitrate=1750 / ratetol=3.0 / qcomp=0.60 / qpmin=0 / qpmax=69 / qpstep=4 / cplxblur=20.0 / qblur=0.5 / vbv_maxrate=14000 / vbv_bufsize=14000 / nal_hrd=none / filler=0 / ip_ratio=1.40 / aq=1:1.00
Language : English
Default : Yes
Forced : No

Audio
ID : 2
Format : AC-3
Format/Info : Audio Coding 3
Mode extension : CM (complete main)
Format settings, Endianness : Big
Codec ID : A_AC3
Duration : 1 h 14 min
Bit rate mode : Constant
Bit rate : 448 kb/s
Channel(s) : 6 channels
Channel positions : Front: L C R, Side: L R, LFE
Sampling rate : 48.0 kHz
Frame rate : 31.250 FPS (1536 spf)
Bit depth : 16 bits
Compression mode : Lossy
Delay relative to video : 1 s 0 ms
Stream size : 240 MiB (20%)
Language : Polish
Default : Yes
Forced : No

Text #1
ID : 3
Format : UTF-8
Codec ID : S_TEXT/UTF8
Codec ID/Info : UTF-8 Plain Text
Duration : 1 h 12 min
Bit rate : 16 b/s
Count of elements : 261
Stream size : 8.58 KiB (0%)
Language : English
Default : Yes
Forced : No

Text #2
ID : 4
Format : VobSub
Muxing mode : zlib
Codec ID : S_VOBSUB
Codec ID/Info : Picture based subtitle format used on DVDs
Duration : 1 h 12 min
Bit rate : 546 b/s
Count of elements : 261
Stream size : 288 KiB (0%)
Language : English
Default : No
Forced : No';

dump($parser->parse($text));