<!--thirrja e header-it-->
<?php include '../includes/header.php';
?>

<link rel="stylesheet" href="../CSS/style.css" >
    <form class="main-div" action="../loginVerify.php"  method="post" >
        <h2 class="together">Log in to continue!</h2>
        <div class="form-control">
            <label for="">Enter email:</label>
            <input type="email" placeholder="email" id="email" class="inputs" name="email">
            <small>Error message</small>
        </div>
        <br>
        <div class="form-control">
            <label for="" >Enter password:</label>
            <input type="password" placeholder="password" id="password" class="inputs" name="password">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <input type="checkbox" id="checkbox">
            <label for="">I agree with the terms</label>
            <br>
            <small>Error message</small>
        </div>

        <br>
        <a href="">Forgot your password?</a>
        <br>
        <button class="btn" name="loginBtn" value="Login">Log in</button>
        <br>
        <button class="btn"><a href="www.facebook.com" style="color: white; text-decoration: none;">Register with Facebook</a></button>
        <br>
        <button class="btn"><a href="www.gmail.com" style="color: white; text-decoration: none;">Register with Google</a></button>
        <br>
        <p>If your're not registered, <a href="register.php">register!</a></p>

        <h3 id="show" class="con">You are now logged in! <a href="order.php">Continue!</a></h2>
    </form> 

<!--thirrja e footer-it-->
<?php
    include '../loginVerify.php';  
    include('../includes/footer.php');
    ?> 