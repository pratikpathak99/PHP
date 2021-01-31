<?php
    session_start();
    $product = $_SESSION["Main_array"];
    $id = $product['Product_ID'];
    $name = $product['Product_Name'];
    $Product_Packing_Date = $product['Product Packing_Date'];
    $Expiry_Date = $product['Expiry_Date'];
    $Quality_Of_Product = $product['Quality_Of_Product'];
    $current_date = date("Y/m/d");
    $product_expire_date=ceil(abs(strtotime($current_date)-strtotime($Product_Packing_Date))/86400);
    $sub_struct_month = ($product_expire_date / 30);
    $sub_struct_month = floor($sub_struct_month);
    if($sub_struct_month<=3)
    {
        $qtyprod='good quality';
    }
    else if($sub_struct_month>=4)
    {
        $qtyprod='average quality';
    }
    else if($sub_struct_month>=5)
    {
        $qtyprod='poor quality';
    }
    else if($sub_struct_month>=6)
    {
        $qtyprod='unused quality';
    }
    if(isset($_POST['submit'])){
        header("Location:../index.php" );
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
</div>
<div class="container">
    <form method="post">
        <table class="table" >
            <thead>
            <tr>
                <th scope="col">Product Id :- </th>
                <th scope="col" > <input type="text" name="Product_Id" id="Product_Id" readonly value = "<?php echo $id; ?>"/> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="col">Product Name :- </th>
                <th> <input type="text" name="product_name" id="product_name" readonly value = "<?php echo $name; ?>"/> </th>
            </tr>
            <tr>
                <th scope="row">Packing Date :- </th>
                <td><input type="Date" name="packing_date" id="packing_date" readonly value = "<?php echo $Product_Packing_Date; ?>"></td>
            </tr>
            <tr>
                <th scope="row">Expiry Date :- </th>
                <td><input type="Date" name="Expiry_Date" id="Expiry_Date" readonly value = "<?php echo $Expiry_Date; ?>"></td>
            </tr>
            <tr>
                <th scope="row">Quality Of Product :- </th>
                <td><input type="text" name="Quality_Of_Product" id="Quality_Of_Product" readonly value = "<?php echo $qtyprod; ?>"/></td>
            </tr>
            <tr>
                <th colspan="2" style="text-align:center;"><input type="submit" id="submit" name="submit" class="btn btn-primary" value="Back To home"/>  </th>
            </tr>

            </tbody>
        </table>
    </form>
</div>
</body>
</html>
