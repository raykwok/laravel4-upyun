<?php namespace UpYun;


class UpYunNotAcceptableException extends UpYunException
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, 406, $previous);
    }
}