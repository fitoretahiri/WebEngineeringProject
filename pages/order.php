<?php
include('../includes/header.php'); 
?>

<?php
require_once '../controller/productController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
  <div class="productsss-div">
    <?php
    $products=new ProductController();
    $all=$products->readData();
    for($i=0;$i<count($all);$i++){
        echo '<div>
        <div>
        <img src ="'.$all[$i]['menu_image'].'"width="300" height="250">
        </div>
        <div>
        <h5>'.$all[$i]['menu_title'].'</h5>
        <p>'.$all[$i]['menu_body'].'</p>
        </div>';
    }
    ?>
    </div>  
</body>
 
</html>
     <?php 
 include '../includes/footer.php';
 ?> 
<!---
<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
    
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
               
                    <li> <a href="index.php">Home</a></li> 
                    <li><a href="order.php">Order</a></li>
                    <li> <a href="contactPage.php">Contact</a></li> 
                    <li><a href="logIn.php">Log In</a></li>
                    
                
                    <div class="cartWishlist-div">
                    <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                    <li><a href=""><i class="far fa-heart"></i></a></li>
                    </div>
                </ul>   
            </div>
            </div>
            <div class="search-div">
            <input type="text" id="search" name="" size="30" maxlength="30" placeholder="Search"/>
            </div>

            <div class="saleBrandsFilter-div">
               
                <div class="saleBrands-div">
                <button>Sale</button>
                
                <select name="Brands">
                    <option value=""disabled selected hidden>Brands</option>
                    <option value="All Brands">All Brands</option>
                    <option value="Floyd">Floyd</option>
                    <option value="Stickley">Stickley</option>
                </select>
                </div>

                <div class="filter-div">
                <select name="Filter">
                    <option value=""disabled selected hidden>Filter</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Z-A">Z-A</option>
                    <option value="MIN-MAX">MIN-MAX</option>
                    <option value="MAX-MIN">MIN-MAX</option>
                </select>
                </div>
            </div>
        </div>
    

        
        <div class="body-div">
            
            <div class="produktet1-2-3-div">
            <div class="produkti1-div">
                <img src="HomePics/whiteTable.jpeg" alt="produkti1" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="produkti1.html">Order now! </a>
            </div>
            <div class="produkti2-div">
                <img src="HomePics/pinkFurniture1.jpg" alt="produkti2" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="">Order now! </a>
            </div>
            <div class="produkti3-div">
                <img src="HomePics/auraLamp.jpg" alt="produkti3" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="">Order now! </a>
            </div>
            
        </div>
        <div class="produktet4-5-6-div">
        <div class="produkti4-div">
                <img src="HomePics/bedroom.png" alt="produkti4" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="">Order now! </a>
            </div>
            <div class="produkti5-div">
                <img src="HomePics/blueFurniture.jpg" alt="produkti5" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="">Order now! </a>
            </div>
            <div class="produkti6-div">
                <img src="HomePics/pinkFurniture.jpg" alt="produkti6" width="300" height="250">
                <p>Product's name</p>
                <p>Price</p>
                <a href="">Order now! </a>
            </div>
           
        </div>

        <div class="produktet7-8-9-div">
            <div class="produkti7-div">
                    <img src="HomePics/greenFurniture.jpg" alt="produkti4" width="300" height="250">
                    <p>Product's name</p>
                    <p>Price</p>
                    <a href="">Order now! </a>
                </div>
                <div class="produkti8-div">
                    <img src="HomePics/whiteTable.jpeg" alt="produkti5" width="300" height="250">
                    <p>Product's name</p>
                    <p>Price</p>
                    <a href="">Order now! </a>
                </div>
                <div class="produkti9-div">
                    <img src="HomePics/pastelLamps.jpg" alt="produkti6" width="300" height="250">
                    <p>Product's name</p>
                    <p>Price</p>
                    <a href="">Order now! </a>
                </div>
               
            </div>
            
        </div>
        <div class="numrat-div">
            <button class="numrat">1</button>
            <button class="numrat">2</button>
            <button class="numrat">3</button>
            <button class="numrat">4</button>
            <button class="numrat">..</button>
            <button class="numrat">End</button>
        </div>

        <div class="footer-div">
            <div class="logo-div2"> 
                <img src="HomePics/logo1.png" alt="logo" width="100" height="80"> 
                <p id="quote">Furniture must have a personality <br> well as be beautiful</p> 
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

</html>