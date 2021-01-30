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
    $eid = $_POST["eid"];
    $psw = $_POST["psw"];
    $status = "1";


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        echo '<script>alert("Connection failed")</script>';
    }

    $sql = "INSERT INTO `employee`( `firstName`, `birthDate`, `eid`, `psw`, `status`) VALUES ('".$name."','".$BOD."','".$eid."','".$psw."','".$status."')";

    $result = $conn->query($sql);
    if($result){
        ?>
        <script type="text/javascript">
            alert("insert is done");
            window.location.href = "Question 12.php";
        </script>
        <?php

    }
}
?>
<html>
<head>
    <title>Question 12</title>
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
            <label for="firstName" class="col-sm-3 control-label">E-ID</label>
            <div class="col-sm-9">
                <input type="text" id="eid" placeholder="Enter Your ID " class="form-control" autofocus name="eid">
                <span class="help-block">Ex :- Example@gmail.com</span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="psw" placeholder="Enter Your password" class="form-control" autofocus name="psw">
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

