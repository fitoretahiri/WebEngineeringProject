<?php

require_once '../controller/productController.php';
if(isset($_GET['id'])){
    $menuId=$_GET['id'];
}
//$menuId=$_GET['id'];
$menu = new ProductController;
$currentMenu= $menu->edit($menuId);

if(isset($_POST['submit'])){
    $menu->update($_POST,$menuId);
}
?>

<style>
    body {
	height: 100%;
	font-family: "Nunito Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
    background-image: url('../HomePics/silvery.jpg');
}
.edit-form{
    margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
}

.edit-form input{
    height:30px;
    font-size:14pt;
    border:3px solid grey;
}

.edit-form p{
    font-size:20pt;
    /*display:inline-block;*/
}
</style>

<h1 style="text-align:center;padding-top:20px;">Edit Product:</h1>
<form class="edit-form"method="POST">
    <p>Image:</p>
    <input id="fileid"type="file" name="image" value="<?php echo $currentMenu['menu_image']; ?>">
    <br>
   <p> Title:</p>
    <input type="text" name="title" value="<?php echo $currentMenu['menu_title'];?>">
    <br>
   <p> Body:</p>
    <input type="text" name="body" value="<?php echo $currentMenu['menu_body']; ?>">
    <br><br><br>
    <input type="submit" name="submit" value="Update">
</form>