<?php

class Config
{
    private $config = null;

    public function __construct()
    {

        $filepath = dirname(__FILE__, 2).'/config.json';

        $this->config = json_decode(file_get_contents($filepath), true);
    }
    public function getURL()
    {
        // return = "https://judahsquare.com";

        if($this->config['developing']) {
            return $this->config['serverURL']['dev'];
        } else {
            return $this->config['serverURL']['prod'];
        }
    }
}
