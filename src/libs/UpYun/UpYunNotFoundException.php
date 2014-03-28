<?php namespace UpYun;


class UpYunNotFoundException extends UpYunException
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}