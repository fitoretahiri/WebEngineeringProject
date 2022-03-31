<?php
require_once "../repository/userRepository.php";

if(isset($_GET['id'])){
    $userId=$_GET['id'];

}
$user = new UserRepository;
$user->deleteUser($userId);
?>