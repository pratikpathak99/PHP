<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/1/2020
 * Time: 5:22 PM
 */
session_start();
$name=$_SESSION['name'];
$BOD=$_SESSION['BOD'];
$JOD=$_SESSION['JOD'];
$salary=$_SESSION['salary'];
$Designation=$_SESSION['Designation'];
$Area_Of_Interest=$_SESSION['Area_Of_Interest'];
$Contact_Number=$_SESSION['Contact_Number'];

if(isset($_POST["submit"])) {
    header("Location:../index.php");
}

?>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Forms Details</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>joining date</th>
            <th>Salary</th>
            <th>Designation</th>
            <th>Area Of Interest</th>
            <th>Contact Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $BOD; ?></td>
            <td><?php echo $JOD; ?></td>
            <td><?php echo $salary; ?></td>
            <td><?php echo $Designation; ?></td>
            <td><?php echo $Area_Of_Interest; ?></td>
            <td><?php echo $Contact_Number; ?></td>
        </tr>
        </tbody>
    </table>
    <form method="post">
    <div class="center">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
    </div>
    </form>
</div>

</body>
</html>

