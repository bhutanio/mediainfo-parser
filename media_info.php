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
					$this->media_info[ $in_section ][ $in_serial ][ trim($matches[1][0]) ] = $matches[2][0];
				} else {
					$this->media_info[ $in_section ][ trim($matches[1][0]) ] = $matches[2][0];
				}
			}
		}

		return $this->media_info;	
	}
}

