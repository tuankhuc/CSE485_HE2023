<?php
// config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

require_once 'Employee.php';  // Bao gồm tệp Employee.php

$employees = array();  

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employee = new Employee($row["id"], $row["name"], $row["address"], $row["salary"]);
        array_push($employees, $employee);
    }
}

$conn->close();
