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
        echo 'Welcome to the object', $welcome;
    }
}
$obj = new Database('mysql://hostname=localhost:dbname=fitness', 'root', '1234');
/*$serialize = serialize($obj);
echo unserialize($serialize);*/

echo $obj;