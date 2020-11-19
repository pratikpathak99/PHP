<?php

session_start();

//Get The Array Value from the Privies Page.
$var_value = $_SESSION['varname'];

//hidden Answer
$style="visibility: hidden";

if(isset($_POST["submit"])) {
    header("Location:../index.php");
}
if(isset($_POST["go"])) {

    //Show Answer
    $style="visibility: none";

    $select=$_POST["FormControlSelect1"];
    switch ($select) {
        case "1":
            $ascending_order = $_SESSION['ascending_order'];
            $Answer = $ascending_order;
            break;
        case "2":
            $Count_length = $_SESSION['Count_length'];
            $Answer = $Count_length;
            break;
        case "3":
            $Reserved_string = $_SESSION['Reserved_string'];
            $Answer = $Reserved_string;
            break;
        case "4":
            $Sort_array = $_SESSION['Sort_array'];
            $Answer = $Sort_array;
            break;
        case "5":
            $Palindrome = $_SESSION['Palindrome'];
            $Answer = $Palindrome;
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 7</title>
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
    <p>Question 7 out-put</p>
    <p><?php print_r($var_value); ?></p>
</div>
<div class="container">
    <div class="container" >
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Function</label>
                <select class="form-control" id="FormControlSelect1" name="FormControlSelect1">
                    <option value="1">1. Sort of given array in ascending order</option>
                    <option value="2">2. Count length of array string.</option>
                    <option value="3">3. Reserved string.</option>
                    <option value="4">4. Sort given array.</option>
                    <option value="5">5. Check whether a passed string is palindrome or not.</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="go" id="go">GO</button>
            </div>
            <br>
            <div class="form-group" style="<?php echo $style ?>">
                <label for="exampleFormControlTextarea1">Answer</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php print_r($Answer) ;?></textarea>
            </div>
            </br>
            </br>
            </br>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Write a PHP script to implement following function.
                    1. Sort of given array in ascending order
                    2. Count length of array string.
                    3. Reserved string.
                    4. Sort given array.
                    5. Check whether a passed string is palindrome or not.
                    Note that you have to take input from HTML form.</p>
                <footer class="blockquote-footer">To understand the concept of array & String.</footer>
            </blockquote>
            <div class="center">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
