<?php
   include 'usersShembuj.php';     
$SimpleUser=new SimpleUser("Era","Graicevci","eg51908@ubt-uni.net","era123456","user");
$admin=new Admin("Fitore","Tahiri","ft111@ubt-uni.net","12345678","amdin","all permissions");

if(isset($_POST["loginBtn"])){
        if(empty($_POST['email']) ||empty($_POST['password']) ){
            echo "Fill all fields";
        }else{
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    

    $i=0;
    foreach($SimpleUser as $useri){
        $i++;
        if($email==$SimpleUser->getEmail() && $password==$SimpleUser->getPassword() ){
            echo "ne rregull";

           /* session_start();
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['role']=$user['role'];*/

           session_start();
            $_SESSION[$SimpleUser->getEmail()]=$email;
            $_SESSION[$SimpleUser->getPassword()]=$password;
            $_SESSION[$SimpleUser->getRole()]=$role; 

            header("location:order.php");
            exit();
        }
    

       
           
            
        }
    }
}
    

?>
