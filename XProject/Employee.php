<?php
// Employee.php

class Employee {
    public $id;
    public $name;
    public $address;
    public $salary;

    public function __construct($id, $name, $address, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
    }
}
