<?php

class product{
    private $Product_id;
    private $product_name;
    private $packing_date;
    private $product_expire_date;
    private $quality_of_product;

    function set_details($Product_id,$product_name,$packing_date,$product_expire_date,$quality_of_product){
        $this->Product_id = $Product_id;
        $this->product_name = $product_name;
        $this->packing_date = $packing_date;
        $this->product_expire_date = $product_expire_date;
        $this->quality_of_product = $quality_of_product;
    }
    function get_details(){
        echo $this->Product_id."<br>";
        echo $this->product_name."<br>";
        echo $this->packing_date."<br>";
        echo $this->product_expire_date."<br>";
        echo $this->quality_of_product."<br>";
    }

}

$product_one = new product();
$product_one->set_details(1,"p","11/20/2020","11/20/2021",2);
$product_one->get_details();
?>
<!DOCTYPE html>
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
</body>
</html>

