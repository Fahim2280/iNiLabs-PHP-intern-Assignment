<?php
class Employee
{
    private $name;
    private $salary;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($amount)
    {
        $this->salary = $amount;     
    }
}

$employee = new Employee('John Doe');
echo "Employee Name: {$employee->getName()} <br>";

$employee->setSalary(2000);
echo "Employee Salary: {$employee->getSalary()}";


