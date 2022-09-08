<?php

/*$arr = array(1,2,3);

class Test
{
    public $name;
}

$obj = new Test;
$obj->name = 'Aya';
echo serialize($obj);*/

class Database
{
    public $link;
    public $dsn;
    public $username;
    public $password;
    public $queryCache;

    public function __construct($dsn, $username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dsn = $dsn;
        $this->link = new PDO($dsn, $username, $password);
    }
    public function __sleep()
    {
        return array('dsn', 'username', 'queryCache', 'password');
    }

    public function __wakeup()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __toString()
    {
        return 'The username which has been used to connect to the database is ' . $this->username;
    }

    public function __invoke($welcome)
    {
        //method is called when a script tries to call an object as a function.
        echo 'Welcome to the object', $welcome;
    }

    public function __clone()
    {
        $this->username = NULL;
        $this->password = NULL;
    }
}

class User
{
    public $name;
    public $age;
    public $classRoom;
}

$aya = new User;
$aya->name = 'Aya';
$aya->age = 24;
$aya->classRoom = '4th Grade';

/*$obj = new Database('mysql:host=localhost', "'aya'@'%aya'", '1961998***');*/
/*$serialize = serialize($obj);
echo unserialize($serialize);*/

/*$obj('Aya');
var_export($arr);*/

/*$obj2 = clone($obj);*/
$alaa = clone($aya);
$alaa->name = 'Alaa';
$alaa->age = 22;

var_dump($alaa, $aya);