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

<form method="POST">
    Image:
    <input type="file" name="image" value="<?php echo $currentMenu['menu_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currentMenu['menu_title'];?>">
    <br>
    Body:
    <input type="text" name="body" value="<?php echo $currentMenu['menu_body']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>