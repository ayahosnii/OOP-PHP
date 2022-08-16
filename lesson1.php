<?php
class Employee // template contain Properties and operators
{
    public $name; //=> $name is Property || public is defining the Property
    public $age;
    public $address;

    public $salary = 1500;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;
}

$ahmed = new Employee(); // =>ahmed is an objech has properties;
$ahmed->name = 'Aya';
$ahmed->age = 24;
$ahmed->address = 'St.';
$ahmed->salary = 20000;
$ahmed->tax = 0.03;
$ahmed->overtime = 20;
$ahmed->overtimeRate = 15;
$ahmed->abbsent = 1;
$ahmed->abbsentRate = 75;
//echo $ahmed-> name;
//is_a($ahmed, 'Employee');
echo '<pre>';
var_dump($ahmed);
echo '<pre>';

class Car
{
    public $doors;
    public $weels;
    public $rims;
    public $speed;
    public $horsePower;
    public $color;
}

/*$bmw = new Car();
$bmw->speed = 320;
$bmw->doors = 2;
$bmw->rims = 'Sports';*/

function calculateOverTime($overtime, $overtimeRate)
{
    return $overtime * $overtimeRate;
}

$ahmedOvertimeCalculation = calculateOverTime($ahmed->overtime, $ahmed->overtimeRate);