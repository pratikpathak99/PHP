<?php
    if(isset($_POST["submit"])) {
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
        else{
            echo '<script>alert("Connection done")
                    window.location="../index.php";
                    </script>';
        }
    }
?>
<html>
<head>
    <title>Question 11</title>
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
    <p>Question 11 out-put</p>
</div>
<form method="post">
    <div class="center">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Check Database Connection</button>
    </div>
</form>
<br>
</body>
</html>
