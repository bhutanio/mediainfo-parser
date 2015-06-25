<?php

class ParserTest extends PHPUnit_Framework_TestCase
{
    
    private $mediaInfo = "
General
Unique ID                                : 219102665597174011678599313130461357976 (0xA4D5A371E8BF9508B5633D2484186798)
Complete name                            : E:\Hostel Part III 1080p BluRay REMUX AVC DTS MA 5.1-R2TC.mkv
Format                                   : Matroska
Format version                           : Version 4 / Version 2
File size                                : 24.8 GiB
Duration                                 : 1h 27mn
Overall bit rate mode                    : Variable
Overall bit rate                         : 40.5 Mbps
Movie name                               : Hostel: Part III
Encoded date                             : UTC 2015-06-22 14:21:06
Writing application                      : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
Writing library                          : libebml v1.3.1 + libmatroska v1.4.2
Attachements                             : cover.jpg
DURATION                                 : 01:27:02.238000000
NUMBER_OF_FRAMES                         : 3249
NUMBER_OF_BYTES                          : 17400158
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Video
ID                                       : 1
Format                                   : AVC
Format/Info                              : Advanced Video Codec
Format profile                           : High@L4.1
Format settings, CABAC                   : Yes
Format settings, ReFrames                : 2 frames
Codec ID                                 : V_MPEG4/ISO/AVC
Duration                                 : 1h 27mn
Bit rate                                 : 40.5 Mbps
Bit rate mode                            : Variable
Width                                    : 1 920 pixels
Height                                   : 1 080 pixels
Display aspect ratio                     : 16:9
Frame rate mode                          : Constant
Frame rate                               : 23.976 fps
Color space                              : YUV
Chroma subsampling                       : 4:2:0
Bit depth                                : 8 bits
Scan type                                : Progressive
Language                                 : English
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.260000000
NUMBER_OF_FRAMES                         : 126240
NUMBER_OF_BYTES                          : 16404187559
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #1
ID                                       : 2
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Format profile                           : MA / Core
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Variable
Bit rate                                 : Unknown / 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossless / Lossy
Title                                    : Surround 5.1
Language                                 : English
Default                                  : Yes
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 1499636572
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #2
ID                                       : 3
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Constant
Bit rate                                 : 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossy
Stream size                              : 947 MiB (4%)
Title                                    : Surround 5.1
Language                                 : English
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 993161428
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #3
ID                                       : 4
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Format profile                           : MA / Core
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Variable
Bit rate                                 : Unknown / 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossless / Lossy
Title                                    : Surround 5.1
Language                                 : French
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 1550652816
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #4
ID                                       : 5
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Constant
Bit rate                                 : 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossy
Stream size                              : 947 MiB (4%)
Title                                    : Surround 5.1
Language                                 : French
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 993161428
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #5
ID                                       : 6
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Format profile                           : MA / Core
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Variable
Bit rate                                 : Unknown / 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossless / Lossy
Title                                    : Surround 5.1
Language                                 : German
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 1524593992
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #6
ID                                       : 7
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Constant
Bit rate                                 : 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossy
Stream size                              : 947 MiB (4%)
Title                                    : Surround 5.1
Language                                 : German
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 993161428
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #7
ID                                       : 8
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Format profile                           : MA / Core
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Variable
Bit rate                                 : Unknown / 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossless / Lossy
Title                                    : Surround 5.1
Language                                 : Spanish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 1515037292
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Audio #8
ID                                       : 9
Format                                   : DTS
Format/Info                              : Digital Theater Systems
Mode                                     : 16
Format settings, Endianness              : Big
Codec ID                                 : A_DTS
Duration                                 : 1h 27mn
Bit rate mode                            : Constant
Bit rate                                 : 1 509 Kbps
Channel(s)                               : 6 channels
Channel positions                        : Front: L C R, Side: L R, LFE
Sampling rate                            : 48.0 KHz
Bit depth                                : 16 bits
Compression mode                         : Lossy
Stream size                              : 947 MiB (4%)
Title                                    : Surround 5.1
Language                                 : Spanish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:45.269000000
NUMBER_OF_FRAMES                         : 493619
NUMBER_OF_BYTES                          : 993161428
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #1
ID                                       : 10
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : English
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1791
NUMBER_OF_BYTES                          : 7042373
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #2
ID                                       : 11
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : English
Default                                  : No
Forced                                   : No

Text #3
ID                                       : 12
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : English
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1791
NUMBER_OF_BYTES                          : 7042615
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #4
ID                                       : 13
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Arabic
Default                                  : No
Forced                                   : No

Text #5
ID                                       : 14
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Danish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:18.587000000
NUMBER_OF_FRAMES                         : 2313
NUMBER_OF_BYTES                          : 5345918
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #6
ID                                       : 15
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Dutch
Default                                  : No
Forced                                   : No

Text #7
ID                                       : 16
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Finnish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1854
NUMBER_OF_BYTES                          : 5673142
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #8
ID                                       : 17
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : French
Default                                  : No
Forced                                   : No

Text #9
ID                                       : 18
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : French
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1743
NUMBER_OF_BYTES                          : 6484916
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #10
ID                                       : 19
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : German
Default                                  : No
Forced                                   : No

Text #11
ID                                       : 20
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : German
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1289
NUMBER_OF_BYTES                          : 5250938
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #12
ID                                       : 21
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Hindi
Default                                  : No
Forced                                   : No

Text #13
ID                                       : 22
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Norwegian
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1183
NUMBER_OF_BYTES                          : 4785979
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #14
ID                                       : 23
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Spanish
Default                                  : No
Forced                                   : No

Text #15
ID                                       : 24
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Swedish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1650
NUMBER_OF_BYTES                          : 5804623
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #16
ID                                       : 25
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Turkish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:00:21.639000000
NUMBER_OF_FRAMES                         : 14
NUMBER_OF_BYTES                          : 48962
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #17
ID                                       : 26
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : English
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1823
NUMBER_OF_BYTES                          : 7339766
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #18
ID                                       : 27
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Dutch
Default                                  : No
Forced                                   : No
DURATION                                 : 00:47:23.528000000
NUMBER_OF_FRAMES                         : 18
NUMBER_OF_BYTES                          : 77067
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #19
ID                                       : 28
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : French
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1821
NUMBER_OF_BYTES                          : 6991659
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Text #20
ID                                       : 29
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : German
Default                                  : No
Forced                                   : No

Text #21
ID                                       : 30
Format                                   : PGS
Muxing mode                              : zlib
Codec ID                                 : S_HDMV/PGS
Codec ID/Info                            : Picture based subtitle format used on BDs/HD-DVDs
Language                                 : Spanish
Default                                  : No
Forced                                   : No
DURATION                                 : 01:27:04.365000000
NUMBER_OF_FRAMES                         : 1815
NUMBER_OF_BYTES                          : 6017847
_STATISTICS_WRITING_APP                  : mkvmerge v7.8.0 ('River Man') 64bit built on Mar 27 2015 16:31:37
_STATISTICS_WRITING_DATE_UTC             : 2015-06-22 14:21:06
_STATISTICS_TAGS                         : BPS DURATION NUMBER_OF_FRAMES NUMBER_OF_BYTES

Menu
00:00:00.000                             : en:Chapter 01
00:11:21.931                             : en:Chapter 02
00:15:19.585                             : en:Chapter 03
00:19:47.394                             : en:Chapter 04
00:26:05.021                             : en:Chapter 05
00:30:43.883                             : en:Chapter 06
00:34:09.589                             : en:Chapter 07
00:38:38.357                             : en:Chapter 08
00:43:56.216                             : en:Chapter 09
00:50:16.138                             : en:Chapter 10
00:55:24.446                             : en:Chapter 11
01:00:13.818                             : en:Chapter 12
01:03:53.329                             : en:Chapter 13
01:09:12.273                             : en:Chapter 14
01:14:20.747                             : en:Chapter 15
01:19:48.742                             : en:Chapter 16
    ";

    public function testGeneralInformation()
    {
        $parser = new \Bhutanio\MediaInfo\Parser;
        $parsed = $parser->parse($this->mediaInfo);

        $this->assertArrayHasKey('general', $parsed);

        $general = $parsed['general'];

        $this->assertArrayHasKey('format', $general);
        $this->assertEquals('matroska', $general['format']);

        $this->assertArrayHasKey('file_size', $general);
        $this->assertEquals('26628797235.200001', $general['file_size']);

        $this->assertArrayHasKey('duration', $general);
        $this->assertEquals('01:27:02.238000000', $general['duration']);
    }

    public function testVideoInformation()
    {
        $parser = new \Bhutanio\MediaInfo\Parser;
        $parsed = $parser->parse($this->mediaInfo);

        $this->assertArrayHasKey('video', $parsed);
        $this->assertEquals(1, count($parsed['video']));

        $video = $parsed['video'][0];

        $this->assertArrayHasKey('codec', $video);
        $this->assertEquals('v_mpeg4/iso/avc', $video['codec']);

        $this->assertArrayHasKey('width', $video);
        $this->assertEquals('1920', $video['width']);

        $this->assertArrayHasKey('height', $video);
        $this->assertEquals('1080', $video['height']);

        $this->assertArrayHasKey('bit_rate', $video);
        $this->assertEquals('40.5mbps', $video['bit_rate']);

        $this->assertArrayHasKey('aspect_ratio', $video);
        $this->assertEquals('16:9', $video['aspect_ratio']);

        $this->assertArrayHasKey('frame_rate', $video);
        $this->assertEquals('23.976 fps', $video['frame_rate']);

        $this->assertArrayHasKey('bit_depth', $video);
        $this->assertEquals('8 bits', $video['bit_depth']);
    }

    public function testAudioInformation()
    {
        $parser = new \Bhutanio\MediaInfo\Parser;
        $parsed = $parser->parse($this->mediaInfo);

        $this->assertArrayHasKey('audio', $parsed);
        $this->assertEquals(8, count($parsed['audio']));

        $audio = $parsed['audio'][0];

        $this->assertArrayHasKey('language', $audio);
        $this->assertEquals('english', $audio['language']);

        $this->assertArrayHasKey('format', $audio);
        $this->assertEquals('dts', $audio['format']);

        $this->assertArrayHasKey('bit_rate', $audio);
        $this->assertEquals('unknown/1509 kbps', $audio['bit_rate']);

        $this->assertArrayHasKey('channels', $audio);
        $this->assertEquals('5.1ch', $audio['channels']);
    }
}