<?php
    session_start();
    $student_name = $_SESSION['student_name'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";
    $Python = " ";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT `id` FROM `student_details` WHERE `name` = '".$student_name."'";
    $id = $conn->query($sql);
    if ($id->num_rows > 0) {
        // output data of each row
        $Found="1";
        while($row = $id->fetch_assoc()) {
            $student_id= "" . $row["id"]."";
        }
    } else {
        echo '<script>alert("Student Not Found")
                        window.location="mark.php";
                        </script>';
    }
    $select_sub="SELECT `student_id`, `STQA`, `OOAD`, `PHP`, `IP` FROM `marks` WHERE student_id='".$student_id."'";
    $sub = $conn->query($select_sub);
    if($sub){
        while($row= $sub->fetch_assoc()){
            $Python = "".$row["IP"]."";
            $OOAD = "".$row["OOAD"]."";
            $PHP = "".$row["PHP"]."";
            $STQA = "".$row["STQA"]."";
            $Total= $Python+$OOAD+$PHP+$STQA;
        }
    }
    if($Python==" "){
        echo '<script>alert("Marks is not enter by admin")
                            window.location="Question 10.php";
                            </script>';
    }
    if(isset($_POST["submit"])) {
        header("Location:../index.php");
    }
?>
<html>
<head>
    <title>Question 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        table.center {
            width:600px;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Result</h1>
    </div>
    <table border="2" align="center" class="center">
        <tr>
            <th colspan="3" style="text-align:center"> Student Result </th>
        </tr>
        <tr>
            <td>Student ID :- </td>
            <td colspan="2"> <?php echo $student_id; ?> </td>
        </tr>
        <tr>
            <td>Student Name :- </td>
            <td colspan="2"> <?php echo $student_name; ?> </td>
        </tr>
        <tr>
            <td colspan="3"> <br> </td>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center"> Student Subject </th>
        </tr>
        <tr>
            <td colspan="3"> <br> </td>
        </tr>
        <tr>
            <td>Introduction to Python :- </td>
            <td colspan="2"> <?php echo $Python; ?> </td>
        </tr>
        <tr>
            <td>Object Oriented Analysis & Design :- </td>
            <td colspan="2"> <?php echo $OOAD; ?> </td>
        </tr>
        <tr>
            <td>PHP with Framework (CMS & E-Commerce) :- </td>
            <td colspan="2"> <?php echo $PHP; ?> </td>
        </tr>
        <tr>
            <td>Software Testing and Quality Assurance :- </td>
            <td colspan="2"> <?php echo $STQA; ?> </td>
        </tr>
        <tr>
            <td colspan="3"> <br> </td>
        </tr>
        <tr>
            <td style="text-align:center">Total :- </td>
            <td colspan="2"> <?php echo $Total."/400"; ?> </td>
        </tr>
    </table>
    <form method="post">
        <div class="center">
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
        </div>
    </form>
</body>
</html>
