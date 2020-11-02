<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/2/2020
 * Time: 5:14 PM
 */
$style="visibility: hidden";

$Marks = array (35,50,55,40,45,33,44,47,49,33,38,41,51,58,59,60,53,52);

if(isset($_POST["submit"])) {
    header("Location:../index.php");
}
if(isset($_POST["go"])) {
    $style="visibility: none";
    $select=$_POST["FormControlSelect1"];
    switch ($select) {
        case "1":
            $a = array_filter($Marks);
            $Answer = array_sum($a)/count($a);
            break;
        case "2":
            $Answer=min($Marks);
            break;
        case "3":
            $Answer=max($Marks);
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 5</title>
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
    <p>Question 5 out-put</p>
    <p>Recorded Marks: 35,50,55,40,45,33,44,47,49,33,38,41,51,58,59,60,53,52</p>
</div>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Function</label>
            <select class="form-control" id="FormControlSelect1" name="FormControlSelect1">
                <option value="1">1. Find average marks</option>
                <option value="2">2. List out the lowest marks out of 60</option>
                <option value="3">3. List out the highest marks out of 60</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="go" id="go">GO</button>
        </div>
        <br>
        <div class="form-group" style="<?php echo $style ?>">
            <label for="exampleFormControlTextarea1">Answer</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo "Answer is ".$Answer ?></textarea>
        </div>
        <div class="center">
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
        </div>
    </form>
</div>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<blockquote class="blockquote text-center">
    <p class="mb-0">Write a PHP script to perform following task from given recorded marks and display the answer.</p>
    <footer class="blockquote-footer">To understand the concept of control structure.</footer>
</blockquote>
</body>
</html>

