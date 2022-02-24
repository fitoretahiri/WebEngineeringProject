<?php
require_once "./controller/productController.php";

if(isset($_GET['id'])){
    $menuId=$_GET['id'];

}
$menu = new ProductController;
$menu->delete($menuId);
?>