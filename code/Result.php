<?php

class groupdocsDotNetViewer_Result extends ViewableData
{
    protected $width = false;
    protected $height = false;
    protected $server_url = false;

    
    public function __construct($width, $height, $url)
    {
        $this->width = $width;
        $this->height = $height;
        $this->server_url = $url;
        parent::__construct();
    }
    
    public function forTemplate()
    {
        return "<iframe src='{$this->server_url}' frameborder='0' width='" . $this->width . "' height='" . $this->height ."'></iframe>";
    }
}
