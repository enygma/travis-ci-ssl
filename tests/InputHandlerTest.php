<?php

namespace Test;

require_once __DIR__.'/../src/InputHandler.php';

class InputHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testTest1()
    {
        $input = new \Test\InputHandler();

        $this->assertEquals($input->test1(), 'foo');
    }
}