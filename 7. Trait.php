<?php
/*
 * Traits
 * Available
 *
 * 1- What is trait?
 * 2- Precedence of members
 * 3- Using multiple traits
 * 4- Resolving the naming conflict with instead of and as operator
 * */

trait Test
{
    public $name;
    public function hello()
    {
        echo 'Hello from trait';
    }

    protected function sayWelcome()
    {
        echo 'Welcome to our website';
    }
}
trait Test2
{
    public function hello()
    {
        echo 'Welcome from trait 2';
    }
}

trait ParentTrait
{
    use Test, Test2 {
        Test::hello insteadof Test2;
    }
}
class ParentClass
{
    use Test, Test2{
        Test::hello insteadof  Test2;
    }
    public function hello()
    {
        echo 'Hello from Parent Class';
    }
}

class ChildClass extends ParentClass
{
    use ParentTrait;
    /*use Test, Test2 {
        Test::hello insteadof Test2;
        Test2::hello as welcome;
    }*/

    public function callWelcome()
    {
        $this->sayWelcome();
    }

   /* public function hello()
    {
        echo 'Hello from Child Class';
    }*/

    public function body()
    {
        echo 'this is the body of the function';
    }
}

(new ChildClass())->hello();
//(new ChildClass())->sayWelcome();
//ChildClass::groupWelcome();