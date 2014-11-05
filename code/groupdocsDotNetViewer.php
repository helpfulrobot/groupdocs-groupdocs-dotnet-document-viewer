<?php

class groupdocsDotNetViewer {
	
	public static function handle_shortcode($arguments, $url, $parser, $shortcode) {

        $width = 600 ;
		$height = 800;


		if(isset($arguments['width']) && !empty($arguments['width'])) {
			$width = strip_tags(trim($arguments['width']));
		}

		if(isset($arguments['height']) && !empty($arguments['height'])) {
			$height = strip_tags(trim($arguments['height']));
		}

        $url = strip_tags(trim($url));

        $grpDotNetViewer = new groupdocsDotNetViewer_Result($width, $height, $url);
        return $grpDotNetViewer->forTemplate();

	}
}
