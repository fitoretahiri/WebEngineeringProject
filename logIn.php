
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="CSS/logIn.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="nav-bar">
        <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
        <div class="nav-list">
        <!--h1 id="logo"><em>Furniture</em></h1-->
        
            <ul id="lista-e-pare">
                <li> <a href="index.html">Home</a></li> 
                <li><a href="order.html">Order</a></li>
                <li><a href="contactPage.html">Contact</a></li>
                <li><a href="logIn.html">Log in</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        
    </div>  
    </div>


    <form class="main-div" action="logIn.php" method="post" >
        <h2>Log in to continue!</h2>
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
        <button class="butoni1" name="loginBtn" value="Login">Log in</button>
        <br>
        <button><a href="www.facebook.com" style="color: white; text-decoration: none;">Register with Facebook</a></button>
        <br>
        <button><a href="www.gmail.com" style="color: white; text-decoration: none;">Register with Google</a></button>
        <br>
        <p>If your're not registered, <a href="register.html">register!</a></p>

        <h3 id="show">You are now logged in! <a href="order.html">Continue!</a></h2>
    </form>
    <?php
    require_once 'loginValidate.php';
   ?>

    <div class="footer-div">
        <div class="logo-div2"> 
            <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
        </div>
        <div class="quote">
        <p>Furniture must have a personality <br>as well as be beautiful</p> 
    </div>
        <div class="nav-list2">
            <ul>
                <li><a href="">Back to start</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Log In</a></li>
                <li><a href="">Order</a></li>
            </ul>
         </div>

         <div class="email-div">
             <p>Be the first to be informed about our offers!</p>
             <p>Email:
                 <input type="text" name="email" size="15" maxlength="30"/>
             </p>
         </div>

         <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="far fa-envelope"></i>
        </div>
    </div>
  <!---<script src="JS/login.js"></script>--->
</body>
</html>