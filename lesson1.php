<?php
// Class represent a template consists of properties (attribute) and method (functions)
// A Object is an instance of typical class
// By default the attribute value is NULL

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

    function calculateOverTime()
    {
        return $this->overtime * $this->overtimeRate;
    }

    function calculateAbbsent()
    {
        return $this->abbsent * $this->abbsentRate;
    }
    function calculateTotalSalary()
    {
        return ($this->salary - ($this->salary * $this->tax) + $this->calculateOverTime() - $this->calculateAbbsent());
    }

}

$aya = new Employee(); // =>ahmed is an objech has properties;
$aya->name = 'Aya';
$aya->age = 24;
$aya->address = 'St.';
$aya->salary = 20000;
$aya->tax = 0.03;
$aya->overtime = 20;
$aya->overtimeRate = 15;
$aya->abbsent = 1;
$aya->abbsentRate = 75;


$mohammed = new Employee(); // =>ahmed is an objech has properties;
$mohammed->name = 'Mohammed';
$mohammed->age = 25;
$mohammed->address = 'Alex';
$mohammed->salary = 19000;
$mohammed->tax = 0.02;
$mohammed->overtime = 40;
$mohammed->overtimeRate = 10;
$mohammed->abbsent = 0;
$mohammed->abbsentRate = 50;


echo $aya-> name . ' has overtime = ' .$aya->calculateOverTime();
echo ' <pre>';
echo $aya-> name . ' has abbsent = ' .$aya->calculateAbbsent();
echo ' <pre>';
echo $mohammed-> name . ' has overtime of ' .$mohammed->calculateOverTime();
//is_a($aya, 'Employee');
//echo $aya-> name;
//is_a($aya, 'Employee');
//echo '<pre>';
//var_dump($aya);
//echo '<pre>';

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


/*function calculateOverTime($overtime, $overtimeRate)
{
    return $overtime * $overtimeRate;
}

$ayaOvertimeCalculation = calculateOverTime($aya->overtime, $aya->overtimeRate);
echo 'ahmed = '. $ahmedOvertimeCalculation;*/