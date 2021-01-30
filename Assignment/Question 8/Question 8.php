<?php
if(isset($_POST["add"])){
    header("Location: add.php" );
}
if(isset($_POST["show"])){
    header("Location: show.php");
}
if(isset($_POST["submit"])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 8</title>
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
    <p>Question 8 out-put</p>
</div>
<form method="post">
    <div class="container">
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="add" id="add">Add Product</button>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="show" id="show">Show Product</button>
    </div>
    <div class="center">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
    </div>
</body>
</html>

