<?php

include 'Autoloader.php';

class ImageCompress
{

    protected $image;
    protected $dest;
    protected $quality;
    protected $mime;

    function __construct($image, $dest, $quality, $mime)
    {
        $this->image = $image;
        $this->dest = $dest;
        $this->quality = $quality;
        $this->mime = $mime;
    }

    public function compress()
    {
        if ($this->mime == 'jpg'||'jpeg') {
            imagejpeg($this->image, $this->dest, $this->quality);
        } else if ($this->mine == 'png') {
            imagepng($this->image, $this->dest, $this->quality);
        }
        
    }
}
