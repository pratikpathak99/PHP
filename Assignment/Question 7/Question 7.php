<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 11/3/2020
 * Time: 7:24 PM
 */

session_start();

$sty = "hidden";
$style="visibility: hidden";
$style_Two="";

if(isset($_POST["value"])) {

    $sty = "";
    $style="visibility: none";
    $style_Two="visibility: hidden";

    $ascending_order = $_POST["levels"];
    asort($ascending_order);

    $Count_length=count($ascending_order);

    $Reserved_string=array_reverse($ascending_order);

    $Sort_array=$_POST["levels"];
    sort($Sort_array);

    $Palindrome_check=$_POST["levels"];

    function palindrome($arr, $n)
    {
        // Initialise flag to zero.
        $flag = 0;

        // Loop till array size n/2.
        for ($i = 0; $i <= $n / 2 && $n != 0; $i++)
        {
            // Check if first and last element are
            // different then set flag to 1.
            if ($arr[$i] != $arr[$n - $i - 1])
            {
                $flag = 1;
                break;
            }
        }

        // If flag is set then print Not Palindrome
        // else print Palindrome.
        if ($flag == 1)
            $_SESSION['Palindrome']  = "Not Palindrome";
        else
            $_SESSION['Palindrome']  = "Palindrome";
    }

    // Driver code.
    $arr = $Palindrome_check;
    $n = count($arr);

    palindrome($arr, $n);

    $_SESSION['ascending_order'] = $ascending_order;
    $_SESSION['Count_length'] = $Count_length;
    $_SESSION['Reserved_string'] = $Reserved_string;
    $_SESSION['Sort_array'] = $Sort_array;
    $_SESSION['varname'] = $_POST["levels"];

    header("Location:Question_Ans.php");
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

</div>
<div class="container">
<form id="form" method="post">
    <label for="firstName" class="col-sm-3 control-label" style="<?php echo $style_Two; ?>">Enter Your Array Limit :- </label>
    <input type="type" id="idname" oninput="fun()" value="" style="<?php echo $style_Two; ?>">

    <div>
        <br>
        <button type="submit" name="value" id="value" class="col-sm-3 control-label" style="<?php echo $style_Two; ?>"> Submit Value </button>
        <br>
        <br>
    </div>


</form>
</div>
<script>
    function fun() {
        /*Getting the number of text fields*/
        var no = document.getElementById("idname").value;
        /*Generating text fields dynamically in the same form itself*/
        for(var i=0;i<no;i++) {
            var textfield = document.createElement("input");
            textfield.type = "text";
            //textfield.value = "";
            textfield.name ="levels[]";
            document.getElementById('form').appendChild(textfield);
        }

    }
</script>

</body>
</html>
