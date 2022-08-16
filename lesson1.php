<?php
class Employee // template contain Properties and operators
{
    public $name; //=> $name is Property || public is defining the Property
    public $age;
    public $address;

    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;
}

$ahmed = new Employee(); // =>ahmed is an objech has properties;
$ahmed->name = 'Ahmed Mohamed Ibrahim';
echo $ahmed-> name;
is_a($ahmed, 'Employee');
//var_dump($ahmed);

class Car
{
    public $doors;
    public $weels;
    public $rims;
    public $speed;
    public $horsePower;

}