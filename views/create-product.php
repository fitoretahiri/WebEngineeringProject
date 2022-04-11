<?php
require_once '../controller/productController.php';

$menu = new ProductController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
?>

<style>
    body {
	height: 100%;
	font-family: "Nunito Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
    background-image: url('../HomePics/silvery.jpg');
}
.create-form{
    margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
  display: flex;
    flex-direction: column;
}

.create-form input{
    height:30px;
    font-size:15pt;
    border:3px solid grey;
}

.create-form p{
    font-size:18pt;
}
</style>

<div>
    <h1 style="text-align:center;padding-top:20px;">Add Product:</h1>
    <form class="create-form"method="POST">
        
        <p>Image:</p>
        <input type="file" name="image">
        <br>
        <p>Title:</p>
        <input type="text" name="title">
        <br>
        <p>Content:</p>
        <textarea name="body" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>