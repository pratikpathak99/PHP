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

$sql = "SELECT COUNT(id) FROM `student_details`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $id=$row["COUNT(id)"];
    }
} else {
    echo "0 results";
}
$id=$id+1;
if(isset($_POST["submit"])){
    //echo '<script>alert("Button is work")</script>';

    $student_name = $_POST["name"];
    $status = "1";

    $sql = "INSERT INTO `student_details`(`name`, `status`) VALUES ('".$student_name."','".$status."')";

    $result = $conn->query($sql);
    if($result){
        ?>
        <script type="text/javascript">
            alert("insert is done");
            window.location.href = "Question 10.php";
        </script>
        <?php

    }
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
    <p>Add Student</p>
</div>
<form method="post">
    <div class="container">
        <input class="form-control" type="text" placeholder="Enter Student ID" disabled value="<?php echo $id; ?> ">
        </br>
        <input class="form-control" type="text" placeholder="Enter Student Name" id="name" name="name">
        </br>
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Add Student</button>
    </div>
</form>
</body>
</html>

