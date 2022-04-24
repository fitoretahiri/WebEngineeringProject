<?php
    include('../includes/header.php');
?>
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
            <div class="div-most-liked">
                <div class="produktet">
                    <img src="../HomePics/kitchen.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
                <div class="produktet">
                    <img src="../HomePics/chair.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
            </div>
            <div class="div-most-liked">  
                <div class="produktet">
                    <img src="../HomePics/lamp.jpeg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
                <div class="produktet">
                    <img src="../HomePics/sofa.jpg" alt="" class="foto">
                    <p></p>
                    <button class="order">order</button>
                </div>
            </div>
        </div>
        <h1 class="paragrafi">What others say about us!</h1>
        <div class="others-say">
           
            <div class="div-holder" id="iPari">
                <div class="div-circle">
                    <img src="../HomePics/tim.jpg" alt="" class="Fotot-rreth">   
                </div>  
                
                <div class="paragrafi-div" id="paragrafi-iPari">
                    <h1 class="emri">Timothee Chalamet</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aperiam.</p>
                </div>    
            </div>
            <!--div i dyte-->
            <div class="div-holder" id="iDyti">    
                <div class="div-circle">
                    <img src="../HomePics/dylan.jpg" alt="" class="Fotot-rreth">
                </div>   
                <div class="paragrafi-div" id="paragrafi-iDyti">
                    <h1 class="emri">Dylan O'Brien</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, magni?</p>
                </div>             
            </div>
            <!--div i trete-->
            <div class="div-holder" id="iTreti">
                <div class="div-circle">
                    <img src="../HomePics/johnny.jpg" alt="" class="Fotot-rreth">
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
                    <img src="../HomePics/hLamp.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
                <div class="last-div">
                    <img src="../HomePics/sofa.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
            </div>
            <div class="div-most-liked">  
                <div class="last-div">
                    <img src="../HomePics/lamp.jpeg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
                <div class="last-div">
                    <img src="../HomePics/chair.jpg" alt="" class="foto">
                    <br>
                    <button class="order">order</button>
                </div>
            </div>
            <a href="order.html" id="kliko">Buy now>></a>
        </div>

        <script src="../JS/home.js"></script>

<?php include '../includes/footer.php';
?>       