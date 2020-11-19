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
            $Answer = "one";
            break;
        case "2":
            $Answer = "Two";
            break;
        case "3":
            $Answer = "Three";
            break;
        case "4":
            $Answer = "Four";
            break;
        case "5":
            
            $Answer = "Five";
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
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo "Answer is "?></textarea>
            </div>
            <div class="center">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
