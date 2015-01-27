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
        public function test3()
    {
        return 'baz';
    }
    public function test4()
    {
        return 'quux';
    }
    public function test5()
    {
        return 'quux';
    }
    public function test6()
    {
        return 'quux';
    }
    public function test7()
    {
        return 'quux';
    }
    public function test8()
    {
        return 'quux';
    }
    public function test9()
    {
        return 'quux';
    }
    public function test10()
    {
        return 'quux';
    }
    public function test11()
    {
        return 'quux';
    }
    public function test12()
    {
        return 'quux';
    }
    public function test13()
    {
        return 'quux';
    }
}