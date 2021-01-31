<?php
    session_start();

    if(isset($_POST["submit"])){

        $threearray = array (
            array($_POST["oneone"],$_POST["onetwo"],$_POST["onethree"]),
            array($_POST["twoone"],$_POST["twotwo"],$_POST["twothree"]),
            array($_POST["threeone"],$_POST["threetwo"],$_POST["threethree"]),
        );
        $_SESSION['threearray'] = $threearray;
        /*echo $threearray[0][0].": In stock: ".$threearray[0][1].", sold: ".$threearray[0][2].".<br>";
        echo $threearray[1][0].": In stock: ".$threearray[1][1].", sold: ".$threearray[1][2].".<br>";
        echo $threearray[2][0].": In stock: ".$threearray[2][1].", sold: ".$threearray[2][2].".<br>";*/

        header("location:find_value.php");
    }
?>
<html>
<head>
    <title>Question 9</title>
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
        <p>Question 9 out-put</p>
    </div>
    <form method="post">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" colspan="3" style="text-align:center;">3 * 3 Array</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" id="oneone" name="oneone" placeholder="Row 1 value 1" /> </td>
                    <td><input type="text" id="onetwo" name="onetwo" placeholder="Row 1 value 2" /> </td>
                    <td><input type="text" id="onethree" name="onethree" placeholder="Row 1 value 3" /> </td>
                </tr>
                <tr>
                    <td><input type="text" id="twoone" name="twoone" placeholder="Row 2 value 1" /> </td>
                    <td><input type="text" id="twotwo" name="twotwo" placeholder="Row 2 value 2" /> </td>
                    <td><input type="text" id="twothree" name="twothree" placeholder="Row 2 value 3" /> </td>
                </tr>
                <tr>
                    <td><input type="text" id="threeone" name="threeone" placeholder="Row 3 value 1" /> </td>
                    <td><input type="text" id="threetwo" name="threetwo" placeholder="Row 3 value 2" /> </td>
                    <td><input type="text" id="threethree" name="threethree" placeholder="Row 3 value 3" /> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="center">
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Add Value</button>
        </div>
    </form>
</body>
</html>
