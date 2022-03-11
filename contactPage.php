<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8"/>
    <title>Contact Page</title>
    <link rel="stylesheet" type="text/css" href="CSS/contactPage.css">
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>    
</head>

<body>
    <div class="welcome-div">
        <p>Welcome!</p>
    </div>
    <div class="div-1">
        <div class="header-div">
            <div class="logoNavlist-div">
     
                    <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
                
    
                <div class="menuIcon-div"style="font-size: 70px;">
                    <i class="fas fa-bars" onclick="togglemenu()"></i>
                </div>
                <div class="nav-list">
                    <ul id="menuList">
                   
                        <li> <a href="index.html">Home</a></li> 
                        <li><a href="order.html">Order</a></li>
                        <li> <a href="contactPage.html">Contact</a></li> 
                        <li><a href="logIn.html">Log In</a></li>
                        
                    
                        <!--div class="cartWishlist-div">
                        <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                        <li><a href=""><i class="far fa-heart"></i></a></li>
                        </div-->
                    </ul>   
                </div>
                </div>
            </div>

            <div class="reachUs-div">
            <h4>Reach Our Team</h4> <br> 
            <p>We're always happy to help!</p>  
            </div>
        </div>

        <div class="contactBody-div"> 
             
            <div class="usersAndOurInfo-div">
                
                <form name="contact-form" action="" method="post">
               
                <div class="usersInfo-div">
                <p><b>Send us a message</b></p>
                <p>Send us a message and we'll respond within 24 hours</p>
                    <div class="usersNameEmail-div">
                    <div class="usersName-div">
                    <p>Full Name:</p>
                    <input id="name" type="text" name="name" size="15" maxlength="20"/> 
                    <div class="error-hint hidden ">Your name is required.</div>
                    </div>

                    <div class="usersEmail-div">
                    <p>Email:</p>
                    <input id="email" type="email" name="email" size="15" maxlength="20"/>
                    <div class="error-hint hidden ">Your email is required.</div>
                    </div>
                    </div>
                    
                    <div class="usersPhoneOrganization-div">
                    <div class="usersPhone-div">
                    <p>Telephone:</p>
                    <input id ="telephone" name="telephone" size="15" maxlength="20"/>
                    <div class="error-hint hidden ">Your tel. is required.</div>
                    </div>

                    <div class="usersOrganization-div">
                    <p>Organization:</p>
                    <input id="organization" type="text" name="user" size="15" maxlength="20"/>
                    </div>
                    </div>

                    <div class="comment-div">
                    <textarea id="message"name="comments" placeholder="Your Message" cols="54" rows="10"></textarea>
                    <div class="error-hint hidden ">Your message is required.</div>
                    </div>

                     <hr>
                    <div class="submitButton-div">
                    <button id="myButton">SUBMIT</button>
                    </div>
                    </form>
                </div>

                    <div class="thankU-div hidden">
                        Thank you for your feedback!
                    </div>
                
                <div class="ourInfo-div">
                <p><b>Contact Information</b></p>
                    <div class="contactIcons-div">

                      <div class="locationIcon-div">
                           <img src="../WebEngineeringProject/icons/location.png" alt="">
                           <p>---location---</p>
                      </div>
                      
                      <div class="emailIcon-div">
                        <img src="../WebEngineeringProject/icons/email .png" alt="">
                        <p>---email---</p>
                      </div>

                      <div class="phoneIcon-div">
                        <img src="../WebEngineeringProject/icons/telephone .png" alt="">
                        <p>---phone---</p>
                      </div>
                    </div>
                </div>

                <div class="map-div">
                   <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11748.417575593037!2d21.12200163556503!3d42.595528566746445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549df227a98755%3A0x367373bea7b41f98!2sMobileri%20Prishtina!5e0!3m2!1sen!2s!4v1639605826330!5m2!1sen!2s" width="870" 
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
             </div>
        </div>
    
        <div class="footer-div">
            <div class="logo-div2"> 
                <img src="HomePics/logo2.png" alt="logo" width="100" height="80">
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
    
    
    </div>
    <?php
    
    include_once('controller/contactController.php');
    ?> 


    
    <script>
        var menuList=document.getElementById("menuList");
        menuList.style.maxHeight="0px";
    
        function togglemenu(){
            if(menuList.style.maxHeight=="0px"){
                menuList.style.maxHeight="290px"
            }
            else{
                menuList.style.maxHeight="0px" ;
            }
    
        }
    </script>
</body>
    