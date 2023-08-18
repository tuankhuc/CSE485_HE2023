<!-- views/employees/add.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action="add_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="address">Address:</label>
        <input type="text" name="address" required><br>
        
        <label for="salary">Salary:</label>
        <input type="number" name="salary" step="0.01" required><br>
        
        <button type="submit">Add Employee</button>
    </form>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
