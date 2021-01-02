<?php
if(isset($_POST["add"])){
    header("Location:Add_student.php");
}
if(isset($_POST["mark"])){
    header("Location:mark.php");
}
if(isset($_POST["show"])){
    header("Location:show.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 80%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Pratik Pathak</h1>
    <p>Question 10 out-put</p>
</div>
<form method="post">
<div class="container">
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="add" id="add">Add Student</button>
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="mark" id="mark">Add Student Marks</button>
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="show" id="show">Show Result</button>
</div>
<div class="center">
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
</div>
</form>
</body>
</html>
