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
                                        echo "<option value=\"owner1\">" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </form>
    </body>
</html>

