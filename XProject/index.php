<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body style="padding: 36px 48px;">

    <div class="d-flex justify-content-between">
        <h1 style="color: blue;">LIST OF EMPLOYEES</h1>
        <a href="add.php"><button type="button" class="btn btn-success fs-5">+ Add New Employee</button></a>
    </div>

    <div style="margin-top: 24px;">
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php foreach ($employees as $employee); ?>
                <td><?php echo $employee->id; ?></td>
                <td><?php echo $employee->name; ?></td>
                <td><?php echo $employee->address; ?></td>
                <td><?php echo $employee->salary; ?></td>
                <td>
                    <a href="View/show.php?id=<?php echo $employee->id; ?>"><a href="" style="padding: 8px 12px;"><i class="fa-solid fa-eye"></i></a></a>
                    <a href="View/edit.php?id=<?php echo $employee->id; ?>"><a href="" style="padding: 8px 12px;"><i class="fa-solid fa-pen"></i></a></a>
                    <a href="View/delete.php?id=<?php echo $employee->id; ?>"><a href="" style="padding: 8px 12px;"><i class="fa-solid fa-trash"></i></a></a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>