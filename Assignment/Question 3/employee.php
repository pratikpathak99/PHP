<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/1/2020
 * Time: 2:00 PM
 */
session_start();
if(isset($_POST["submit"]))
{
    //echo '<script>alert("php is working")</script>';
    $name=$_POST["firstName"];
    $BOD=$_POST["birthDate"];
    $JOD=$_POST["joinDate"];
    $salary=$_POST["salary"];
    $Designation=$_POST["Designation"];
    $Area_Of_Interest=$_POST["Area_Of_Interest"];
    $Contact_Number=$_POST["Contact_Number"];

    if($name=="" OR $BOD=="" OR $JOD=="" OR $salary=="" OR $Designation=="" OR $Area_Of_Interest=="" OR $Contact_Number==""){
        echo '<script>alert("Something Was Empty")</script>';
        return;
    }
    else{
        $_SESSION['name']=$name;
        $_SESSION['BOD']=$BOD;
        $_SESSION['JOD']=$JOD;
        $_SESSION['salary']=$salary;
        $_SESSION['Designation']=$Designation;
        $_SESSION['Area_Of_Interest']=$Area_Of_Interest;
        $_SESSION['Contact_Number']=$Contact_Number;
        header("Location:Second_Page.php");
    }
}
?>
<html>
<head>
    <title>Question 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #eee;
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 0.3em;
        }

        *[role="form"] h2 {
            margin-left: 5em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form-horizontal" role="form" method="post">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus name="firstName">
                <span class="help-block">Last Name First Name eg.: Smith Harry</span>
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control" name="birthDate">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">joining date</label>
            <div class="col-sm-9">
                <input type="date" id="joinDate" class="form-control" name="joinDate">
            </div>
        </div>
        <div class="form-group">
            <label for="salary" class="col-sm-3 control-label">Salary</label>
            <div class="col-sm-9">
                <select id="salary" class="form-control" name="salary">
                    <option>10,000</option>
                    <option>20,000</option>
                    <option>30,000</option>
                    <option>40,000</option>
                    <option>50,000</option>
                    <option>60,000</option>
                    <option>70,000</option>
                    <option>80,000</option>
                </select>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <label for="designation" class="col-sm-3 control-label">Designation</label>
            <div class="col-sm-9">
                <select id="designation" class="form-control" name="Designation">
                    <option>HOD</option>
                    <option>IT Head</option>
                    <option>DIRECTOR</option>
                    <option>ACCOUNTANT</option>
                    <option>CASHIER</option>
                    <option>RECEPTIONIST</option>
                    <option>Faculty</option>
                    <option>TRANSPORT INCHARGE</option>
                </select>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <label for="Area_Of_Interest" class="col-sm-3 control-label">Area Of Interest</label>
            <div class="col-sm-9">
                <input type="text" id="Area_Of_Interest" placeholder="Area Of Interest" class="form-control" name="Area_Of_Interest">
            </div>
        </div>
        <div class="form-group">
            <label for="Contact_Number" class="col-sm-3 control-label">Contact Number</label>
            <div class="col-sm-9">
                <input type="number" id="Contact_Number" placeholder="Contact Number" class="form-control" name="Contact_Number">
            </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

</body>
</html>

