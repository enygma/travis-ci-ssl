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

    public function writeNull($string)
    {
        return null;
    }

    public function writeStatic($string)
    {
        return 'this is a static value.';
    }

    public function writeNone()
    {
        return 'none. yup.';
    }

    public function anotherUncoveredOne()
    {
        return true;
    }
    public function andAnother()
    {
        return false;
    }
}