<?php
    session_start();
    $threearray = $_SESSION['threearray'];
    if(isset($_POST["submit"]))
    {
        
    }
?>
<!DOCTYPE html>
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
    <p><?php echo $threearray[0][0].",".$threearray[0][1].",".$threearray[0][2]?></p>
    <p><?php echo $threearray[1][0].",".$threearray[1][1].",".$threearray[1][2]?></p>
    <p><?php echo $threearray[2][0].",".$threearray[2][1].",".$threearray[2][2]?></p>
</div>
<div class="container">

    <form method="post">
        <table>
            <tr>
                <th>
                    <p>Enter Your Find Value :- </p>
                </th>
                <th>
                    <input type="text" placeholder="enter your value you can find" id="find" name="find" />
                </th>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit">Search</button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

    </form>
</div>
</body>
</html>
