<?php

namespace Test;

require_once __DIR__.'/../src/OutputHandler.php';

class OutputHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testWrite()
    {
        $string = 'foobar';
        $output = new \Test\OutputHandler();

        $this->assertEquals(
            $output->write($string),
            'your string is: '.$string
        );
    }
}