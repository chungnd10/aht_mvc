<?php

/**
 * Class Request
 */
class Request
{
    /**
     * @var $url
     */
    public $url;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
