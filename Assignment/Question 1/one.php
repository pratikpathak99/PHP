<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/1/2020
 * Time: 12:14 PM
 */

$department = "Indus University";

?>
<html>
<head>
    <title>Question 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center">
    <h1>Pratik Pathak</h1>
    <p>Question 1 out-put</p>
</div>
<blockquote class="blockquote text-center">
    <p class="mb-0">To understand the basic concepts of programming with PHP.</p>
    <footer class="blockquote-footer">Understand <cite title="Source Title">H1 And H3 Tag</cite></footer>
</blockquote>
<h1 class="display-1">
    <?php echo $department ?>
</h1>
<h3 class="display-1">
    <?php echo $department ?>
</h3>

</body>
</html>

