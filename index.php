<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>
<body>
        <div style="background-color: black;">
            <p id="header"><i>Wellcome in our page!</i></p>
        </div>
        <nav class="nav-bar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>

            <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
            <div class="nav-list">
            <!--h1 id="logo"><em>Furniture</em></h1-->
            
                <ul id="lista-e-pare">
                    <li> <a href="index.html">Home</a></li> 
                    <li><a href="order.html">Order</a></li>
                    <li><a href="contactPage.html">Contact</a></li>
                    <li><a href="logIn.php">Log in</a></li>
                    <li><a href="register.php">Register</a></li>
                    <!--li class="corner"><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                    <li id="heart"><a href=""><i class="far fa-heart"></i></a></li-->
                </ul>
            
        </div>  
    </nav>


        <div class="carousel">
            <div class="inside-carousel" id="first">    
                <div class="slider-text">
                    <h2 class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ipsam.</h2>
                    <p class="red-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    <button class="butoni"> <a href="#" class="link-style">Order now!</a></button>    
                </div>
            </div>

            <div class="inside-carousel" id="second">    
                <div class="slider-text">
                    <h2 class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ipsam.</h2>
                    <p class="red-text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <button class="butoni"> <a href="#" class="link-style">Order now!</a></button>  
                </div>
                
            </div>

            <div class="inside-carousel" id="third">    
                <div class="slider-text"> 
                    <h2 class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ipsam.</h2>
                    <p class="red-text">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    <button class="butoni"> <a href="#" class="link-style">Order now!</a></button>    
                </div>
            </div>
         </div>


        <div class="most-liked">
          <!--  <h1 class="paragrafi">Disa nga produktet me te pelqyera!</h1-->
            <div class="div-most-liked">
                <div class="produktet">
                    <img src="HomePics/kitchen.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
                <div class="produktet">
                    <img src="HomePics/chair.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
            </div>
            <div class="div-most-liked">  
                <div class="produktet">
                    <img src="HomePics/lamp.jpeg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
                <div class="produktet">
                    <img src="HomePics/sofa.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
            </div>
        </div>
        <h1 class="paragrafi">What others say about us!</h1>
        <div class="others-say">
           
            <div class="div-holder" id="iPari">
                <div class="div-circle">
                    <img src="HomePics/tim.jpg" alt="" class="Fotot-rreth">   
                </div>  
                
                <div class="paragrafi-div" id="paragrafi-iPari">
                    <h1 class="emri">Timothee Chalamet</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aperiam.</p>
                </div>    
            </div>
            <!--div i dyte-->
            <div class="div-holder" id="iDyti">    
                <div class="div-circle">
                    <img src="HomePics/dylan.jpg" alt="" class="Fotot-rreth">
                </div>   
                <div class="paragrafi-div" id="paragrafi-iDyti">
                    <h1 class="emri">Dylan O'Brien</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, magni?</p>
                </div>             
            </div>
            <!--div i trete-->
            <div class="div-holder" id="iTreti">
                <div class="div-circle">
                    <img src="HomePics/johnny.jpg" alt="" class="Fotot-rreth">
                </div>  
                <div class="paragrafi-div" id="paragrafi-iTreti">
                    <h1 class="emri">Johnny Depp</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, magni?</p>
                </div>                  
            </div>
        </div>

        <div class="sales">
            <h1 class="paragrafi">Produktet ne zbritje!</h1>
            <div class="div-most-liked">
                <div class="last-div">
                    <img src="HomePics/hLamp.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
                <div class="last-div">
                    <img src="HomePics/sofa.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
            </div>
            <div class="div-most-liked">  
                <div class="last-div">
                    <img src="HomePics/lamp.jpeg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
                <div class="last-div">
                    <img src="HomePics/chair.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
            </div>
            <a href="order.html" id="kliko">Buy now>></a>
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
                    <li><a href="index.html">Back to start</a></li>
                    <li><a href="contactPage.html">Contact</a></li>
                    <li><a href="logIn.html">Log In</a></li>
                    <li><a href="order.html">Order</a></li>
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
   
    <script src="JS/home.js"></script>
</body>
</html>