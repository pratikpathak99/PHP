<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";
    $Found = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["submit"])) {
        $student=$_POST["owner"];
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
    <p>Show Result</p>
</div>
<form method="post">
    <div class="container">
        <table class="table table-condensed ">
            <thead>
            <tr>
                <th>Select Name :- </th>
                <th>
                    <select name="owner">
                        <?php
                        $sql = mysqli_query($conn, "SELECT `name` FROM `student_details`");
                        echo '<option>Select</option>';
                        while ($row = $sql->fetch_assoc()){
                            echo "<option value=" . $row['name'] . ">" . $row['name'] . "</option>";
                        }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center"><button type="submit" class="btn btn-primary" name="submit" id="submit">Show Result</button> </td>
            </tr>
            </thead>
        </table>
    </div>
</form>

</body>
</html>

