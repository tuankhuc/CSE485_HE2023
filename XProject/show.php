<!-- views/employees/show.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h1>Employee Details</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
        </tr>
        <tr>
            <td><?php echo $employee->id; ?></td>
            <td><?php echo $employee->name; ?></td>
            <td><?php echo $employee->address; ?></td>
            <td><?php echo $employee->salary; ?></td>
        </tr>
    </table>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
