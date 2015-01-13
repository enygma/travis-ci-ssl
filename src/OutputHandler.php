<?php

namespace Test;

class OutputHandler
{
    public function write($string)
    {
        if (empty($string)) {
            throw new \InvalidArgumentException('No string given!');
        }
        return 'your string is: '.$string;
    }

    public function writeRot13($string)
    {
        return 'your rot13 string is: '.rot13($string);
    }
}