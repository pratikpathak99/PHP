<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/3/2020
 * Time: 6:50 PM
 */
$name=array ("Arjun","Vyanktesh","Utshav","Mahendarshin","Ambati Raydu","zeel");
$new_array = array_map('strlen', $name);
$sort=min($new_array);
$longest = max($new_array);

if(isset($_POST["submit"])) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 6</title>
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
    <p>Question 6 out-put</p>
    <p>Sample arrays: ("Arjun","Vyanktesh","Utshav","Mahendarshin","Ambati Raydu","zeel")</p>

</div>

<div class="container">

    <p><u><h3><b>Expected Output:</b></h3></u></p>
    <p><i><h4>The shortest string length is <?php echo $sort; ?>.</h4></i></p>
    <p><i><h4>The longest string length is <?php echo $longest; ?></h4></i></p>

    <form method="post">
        <div class="center">
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
        </div>
    </form>
    <br>
</div>

<blockquote class="blockquote text-center">
    <p class="mb-0">Write a PHP script to get the shortest string and longest string length from a given array.Sample arrays: ("Arjun","Vyanktesh","Utshav","Mahendarshin","Ambati Raydu","zeel")Expected Output:</p>
    <footer class="blockquote-footer">To understand the concept of array, String & control structure.</footer>
</blockquote>
</body>
</html>
