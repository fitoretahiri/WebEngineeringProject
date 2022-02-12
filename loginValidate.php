<?php
    if(isset($_POST['loginBtn'])){
        if(empty($_POST['email']) ||empty($_POST['password']) ){
            echo "Fill all fields"
        }else{
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    include_once 'usersShembuj.php';

    foreach($users as $user){
        if($email==$user['email'] && $password==$user['password'] ){
            echo "ne rregull";
        }

        else{
            echo "Incorrect Username or Password!";
        }
    }
}
    }

?>
