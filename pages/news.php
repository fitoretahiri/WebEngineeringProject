<?php
include('../includes/header.php'); 
?>


<?php
require_once '../controller/newsController.php';
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
    
    $news=new newsController();
    $all=$news->readData();
    for($i=0;$i<count($all);$i++){
        echo '<div  class = "products-div">
        <div class="productsImages">
        <img src ="'.$all[$i]['image'].'"width="300" height="250">
        </div>
        <div class="productsTitleAndBody-div">
        <h5>'.$all[$i]['title'].'</h5>
        <p>'.$all[$i]['text'].'</p>
        
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