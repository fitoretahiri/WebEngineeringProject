<?php
    if(isset($_POST["loginBtn"])){
        if(empty($_POST['email']) ||empty($_POST['password']) ){
            echo "Fill all fields";
        }else{
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    include_once 'usersShembuj.php';

    $i=0;
    foreach($user as $useri){
        $i++;
        if($email==$user->getEmail() && $password==$user->getPassword() ){
            echo "ne rregull";

            session_start();
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['role']=$user['role'];

            /*session_start();
            $_SESSION[$user->getEmail()]=$email;
            $_SESSION[$user->getPassword()]=$password;
            $_SESSION[$user->getRole()]=$role; */

            header("location:order.php");
            exit();
        }
    

        else {
            if($i==is_array($user)){
                echo "Incorrect Username or Password!";
                exit();
            }
           
            
        }
    }
}
    }

?>
