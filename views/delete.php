<?php
    include_once '../repository/userRepository.php';
    // e marrim id e perdorusit permes get
    $userId=$_GET['id'];
    
    $userRepository=new UserRepository();
    

    $userRepository->deleteUser($userId);  
    header("location:dashboard.php");

?>