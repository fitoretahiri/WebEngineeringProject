<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/logIn.css">
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

    <div class="main-div" id="main-content">
        <h2>WELLCOME! Register to our site:</h2>
        <div class="form-control">
            <label for="">Enter your name:</label>
            <input type="text" placeholder="Name" class="inputs" id="name">
            <small>Error message</small>
        </div>    
        
        <div class="form-control">
            <label for="">Enter your surname:</label>
            <input type="text" placeholder="surname" class="inputs" id="surname">
            <small>Error message</small>
        </div>    

        <div class="form-control">
            <label for="">Enter your age:</label>
            <input type="number" placeholder="age" class="inputs" id="age">
            <small>Error message</small>
        </div>    
        
        <div class="form-control">
            <label for="">Enter your birthdate:</label>
            <input type="date" placeholder="date of birth" class="inputs" id="birthday">
            <small>Error message</small>
        </div>

        <div class="form-control">
        <label for="">Enter email:</label>
            <input type="email" placeholder="email" class="inputs" id="email">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="">Enter password:</label>
            <input type="password" placeholder="password" class="inputs" id="password">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="">Re-enter password:</label>
            <input type="password" placeholder="re enter password" class="inputs" id="password2">
            <small>Error message</small>
        </div>

        <div class="form-control">
        <input type="checkbox" id="checkbox">
        <label for="">I agree with the terms</label>
        <br>
        <small>Error message</small>
        </div>

        <button class="butoni2">Register</button>
        <br>
        <button><a href="www.facebook.com" style="color: white; text-decoration: none;">Register with Facebook</a></button>
        <br>
        <button><a href="www.gmail.com"  style="color: white; text-decoration: none;">Register with Google</a></button>
        <br>
        <p>Already have an account, <a href="logIn.html">log in!</a></p>
    </div>


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
    <script src="JS/register.js"></script>
</body>
</html>