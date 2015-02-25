<?php

namespace Mapyo\Lib;

class HelloWorld
{
    public function sayHelloWorld()
    {
        echo 'Hello World!! test branch';

        $good = \Mapyo\Lib2\GoodWorld();
        $good->sayGoodWorld();
    }
}
