<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/2/2020
 * Time: 4:48 PM
 */

$products = array ("notebook", "pen", "pencil", "eraser");
if(isset($_POST["submit"])) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="jumbotron text-center">
    <h1>Pratik Pathak</h1>
    <p>Question 4 out-put</p>
</div>

<h1>Array Value</h1>

<?php
foreach( $products as $value ) {
    echo "$value ";
}
echo "<div><br></div>";
foreach( $products as $va ) {?>
    <ul style="list-style-type:disc">
        <li><?php echo "$va "; ?></li>
    </ul>
<?php
}
?>
<form method="post">
    <div class="center">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Back To Home</button>
    </div>
</form>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<blockquote class="blockquote text-center">
    <p class="mb-0">$products = array (‘notebook’, ’pen’, ‘pencil’, ’eraser’);
        Using above array, write a PHP script which will display the value in the following way:</p>
    <footer class="blockquote-footer">To understand the basic concepts of programming with PHP.</footer>
</blockquote>

</body>
</html>

