<?php

namespace Main\Utilities;
//use Actions\A;
/*
 * Although any valid PHP code can be contained within a namespace,
 * only the following types of code are affected by namespaces: classes
 * (including abstracts and traits), interfaces, functions and constants.
*/

include 'example.php';

class A {
        public function __construct()
        {
            echo 'I am an instance of A inside the namespace Main';
        }
}

function sayHello()
{
    echo 'Hello my dear friends';
}

$a = new \Main\Utilities\A();

$a = new \Main\Utilities\Actions\A(); // = $a = new Actions\A();
echo '<br>';
\Main\Utilities\sayHello();