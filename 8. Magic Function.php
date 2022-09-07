<?php

class Student
{
    private $data = array();
    private $name;

    public function __set($name, $value)
    {
        // is run when writing data to inaccessible (protected or private) or non-existing properties.
        echo 'This function has been called /// ';
        $this->age = $value;
        $this->data[$name] = $value;
    }

    public function __get($key)
    {
        //is utilized for reading data from inaccessible (protected or private) or non-existing properties.
       /* if (array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            trigger_error('Sorry '.$key.' is not exist in the data array '.E_USER_ERROR);
        }*/

        if (isset($this->$key)){
            return $this->data[$key];
        } else {
            trigger_error('Sorry '.$key.' is not exist in the data array '.E_USER_ERROR);
        }
    }

    /*public function __isset($name)
    {
        //is triggered by calling isset() or empty() on inaccessible
        //(protected or private) or non-existing properties.
        echo 'the property '.$name.' will be checked';
    }*/
    public function __isset($name)
    {
        /*if (property_exists($this, $name))
        {
            echo 'The property id found';
        }*/

        if (array_key_exists($name, $this->data)) {
            echo 'Key is found and is being extracted';
            return true;
        }
        return false;
    }

    public function __unset($name)
    {
        //is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.
        if (isset($this->$name)) {
            unset($this->data[$name]);
        }
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name))
        {
            $this->$name($arguments);
        } else {
            trigger_error('Sorry no method  '. $name .' was not found', E_USER_ERROR);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        echo 'A call to a static method '. $name . ' occurred';
    }

    private function sayWelcome()
    {
        echo 'Welcome to our class';
    }
}

$aya = new student();
$aya->name = 'Aya';
$aya->age = 24;

//echo $aya->test;
/*isset($aya->test);
isset($aya->name);

echo $aya->age;*/

unset($aya->age);
var_dump($aya);

$aya->sayWelcome();