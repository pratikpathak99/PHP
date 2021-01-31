<?php
    session_start();
    if(isset($_POST['submit'])){
        $product = array("Product_ID" => $_POST["Product_Id"],"Product_Name" => $_POST["product_name"],"Product Packing_Date" =>$_POST["packing_date"],"Expiry_Date"=>$_POST["Expiry_Date"],"Quality_Of_Product" =>$_POST["Quality_Of_Product"]);

        $_SESSION["Main_array"]=$product;
        echo '<script>alert("Data Add")
                window.location.href = "Question 8.php";
            </script>';

    }
?>
<html>
<head>
    <title>Question 8</title>
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
        <p>Question 8 out-put</p>
        <p>Add Product</p>
    </div>
    <form method="POST">
        <div class="container">
            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">Product Id :- </th>
                    <th scope="col" > <input type="text" name="Product_Id" id="Product_Id" placeholder="Enter Your Product Id"/> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">Product Name :- </th>
                    <th> <input type="text" name="product_name" id="product_name" placeholder="Enter Your Product Name"/> </th>
                </tr>
                <tr>
                    <th scope="row">Packing Date :- </th>
                    <td><input type="Date" name="packing_date" id="packing_date" placeholder="Enter packing date"/></td>
                </tr>
                <tr>
                    <th scope="row">Expiry Date :- </th>
                    <td><input type="Date" name="Expiry_Date" id="Expiry_Date" placeholder="Enter Expiry Date"/></td>
                </tr>
                <tr>
                    <th scope="row">Quality Of Product :- </th>
                    <td><input type="text" name="Quality_Of_Product" id="Quality_Of_Product" placeholder="Enter Quality Of Product"/></td>
                </tr>
                <tr>
                    <th colspan="2" style="text-align:center;"><input type="submit" id="submit" name="submit" class="btn btn-primary"/> </th>
                </tr>

                </tbody>
            </table>
        </div>
    </form>
</body>
</html>

