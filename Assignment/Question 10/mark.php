<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
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
    <p>Add Student Marks </p>
</div>
<form method="post">
    <select name="owner">
        <?php
        $sql = mysqli_query($conn, "SELECT `name` FROM `student_details`");
        while ($row = $sql->fetch_assoc()){
            echo "<option value=\"owner1\">" . $row['name'] . "</option>";
        }
        ?>
    </select>

</form>
</body>
</html>

