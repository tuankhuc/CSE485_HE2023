<?php
// EmployeeController.php

require_once 'config.php';
require_once 'Employee.php';

class EmployeeController {
    public function index() {
        global $conn;
        $employees = array();

        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employee = new Employee($row["id"], $row["name"], $row["address"], $row["salary"]);
                array_push($employees, $employee);
            }
        }

        include 'views/employees/index.php';
    }

    public function show($id) {
        global $conn;
        
        $sql = "SELECT * FROM employees WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $employee = new Employee($row["id"], $row["name"], $row["address"], $row["salary"]);
            include 'views/employees/show.php';
        } else {
            echo "Employee not found";
        }
    }

    public function create() {
        include 'views/employees/create.php';
    }

    public function store(Request $request) {
        global $conn;

        $name = $request->name;
        $address = $request->address;
        $salary = $request->salary;

        $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";
        
        if ($conn->query($sql) === TRUE) {
            return redirect('employees')->with('success', 'Employee created successfully');
        } else {
            return redirect('employees')->with('error', 'Error creating employee');
        }
    }

    public function edit($id) {
        global $conn;

        $sql = "SELECT * FROM employees WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $employee = new Employee($row["id"], $row["name"], $row["address"], $row["salary"]);
            include 'views/employees/edit.php';
        } else {
            echo "Employee not found";
        }
    }

    public function update(Request $request, $id) {
        global $conn;

        $name = $request->name;
        $address = $request->address;
        $salary = $request->salary;

        $sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            return redirect('employees')->with('success', 'Employee updated successfully');
        } else {
            return redirect('employees')->with('error', 'Error updating employee');
        }
    }

    public function destroy($id) {
        global $conn;

        $sql = "DELETE FROM employees WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            return redirect('employees')->with('success', 'Employee deleted successfully');
        } else {
            return redirect('employees')->with('error', 'Error deleting employee');
        }
    }
}
