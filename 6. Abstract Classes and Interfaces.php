<?php
/*
 * Abstract Classes and Interface
 */

abstract class Employee
{
    // General Information
    public $firstname;
    public $lastname;
    public $age;
    public $address;

    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;

    public function getOverTime()
    {
        return $this->overtime * $this->overtimeRate;
    }

    public function getAbbsent()
    {
        return $this->abbsent * $this->abbsentRate;
    }

    public function getSalary()
    {
        return $this->salary - ($this->salary * $this->tax);
    }
    abstract public function showName();
    abstract public function showTotalSalary();

}

interface EmployeeInterFace
{
    public function showAddress($address);
}

class Manager extends Employee implements EmployeeInterFace
{
    public function showName()
    {
        return 'Welcome Manager ' . $this->firstname . ' ' . $this->lastname;
    }

    public function showTotalSalary()
    {
        return $this->getSalary() + $this->getOverTime() - $this->getAbbsent() + $this->numberOfAudits = 100;
    }

    public function showAddress($address)
    {
        return 'Hello' . $this->address;
    }
}

class SuperVisor extends Employee implements EmployeeInterFace
{
    public $successfulProjects;

    public function showTotalSalary()
    {
        return $this->getSalary() + $this->getOverTime() - $this->getAbbsent() + $this->successfulProjects;
    }

    public function showAddress($address)
    {
        return 'Hello' . $this->address;
    }
}

class Worker extends Employee
{
    public $bonus = 100;
}






$manger = new Manager();
$manger->firstname = "Aya";
$manger->lastname = "Hosny";
echo $manger->showName();
$manger->salary = 5000;
$manger->tax = 0.01;
$manger->overtime = 30;
$manger->overtimeRate = 15;
$manger->abbsent = 2;
$manger->abbsentRate = 75;

