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

    if(isset($_POST["submit"])){
        //echo '<script>alert("Button is work")</script>';
        $student=$_POST["owner"];

        echo $student;
    }
?>
<html>
    <head>
        <title>Question 10</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Pratik Pathak</h1>
            <p>Add Student Marks </p>
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
                                    while ($row = $sql->fetch_assoc()){
                                        echo "<option value=" . $row['name'] . ">" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select> <br>
                                <small class="form-text text-muted">Add student <a href="Add_student.php">click here</a></small>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2"><br></td>
                        </tr>
                        <tr>
                            <td>Python Marks :- </td>
                            <td>
                                <input type="form-control" class="form-control" id="pythonmarks" placeholder="Enter Your Python Marks">
                                <small class="form-text text-muted">Marks is out of 100</small>
                            </td>
                        </tr>
                        <tr>
                            <td>PHP Marks :- </td>
                            <td>
                                <input type="form-control" class="form-control" id="phpmarks" placeholder="Enter Your PHP Marks">
                                <small class="form-text text-muted">Marks is out of 100</small>
                            </td>
                        </tr>
                        <tr>
                            <td>OOAD Marks :- </td>
                            <td>
                                <input type="form-control" class="form-control" id="OOADmarks" placeholder="Enter Your OOAD Marks">
                                <small class="form-text text-muted">Marks is out of 100</small>
                            </td>
                        </tr>
                        <tr>
                            <td>STQA Marks :- </td>
                            <td>
                                <input type="form-control" class="form-control" id="STQAmarks" placeholder="Enter Your STQA Marks">
                                <small class="form-text text-muted">Marks is out of 100</small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center"><button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button> </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </form>
    </body>
</html>

