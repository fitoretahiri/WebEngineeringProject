<?php
include('../includes/header.php'); 
require_once '../controller/productController.php';
include_once '../repository/userRepository.php';
include_once '../Classes/signupClasses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/orderPage.css" >
    <title>Order Now!</title>

</head>
<body>
<div class="batch-div" >
    <?php
    
    $products=new ProductController();
    $all=$products->readData();
    for($i=0;$i<count($all);$i++){
        echo '<div  class = "products-div">
        <div class="productsImages">
        <img src ="'.$all[$i]['menu_image'].'"width="300" height="250">
        </div>
        <div class="productsTitleAndBody-div">
        <h5>'.$all[$i]['menu_title'].'</h5>
        <p>'.$all[$i]['menu_body'].'</p>
        
        </div> 
        </div>';
    }
    ?>
    </div> 
</body>
 
</html>
      <?php 
 include '../includes/footer.php';
 ?>