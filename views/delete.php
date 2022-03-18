<?php
require_once "../repository/userRepository.php";

if(isset($_GET['id'])){
    $menuId=$_GET['id'];

}
$menu = new UserRepository;
$menu->deleteUser($menuId);
?>