<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/logIn.css">
=======
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/logIn.css">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>
<body>
        <div style="background-color: black;">
            <p id="header"><i>Welcome in our page!</i></p>
        </div>
        <nav class="nav-bar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>

            <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
            <div class="nav-list">
<<<<<<< HEAD

=======
            <!--h1 id="logo"><em>Furniture</em></h1-->
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
            <?php
                $style = "";
                if(isset($_SESSION['roli'])){
                    $style = "style='visibility:hidden; '";
                }?>
            
                <ul id="lista-e-pare">
                    <li> <a href="index.php">Home</a></li> 
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
<<<<<<< HEAD
                    <li> <a <?php echo $style;?> href="../pages/logIn.php">Log in</a></li>
                    <li><a <?php echo $style;?> href="../pages/register.php">Register</a></li>
=======
                    <li> <a <?php echo $style;?> href="logIn.php">Log in</a></li>
                    <li><a <?php echo $style;?> href="register.php">Register</a></li>
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
                    <?php
                        if (isset($_SESSION["roli"]) && $_SESSION["roli"] == 'Admin') {
                    ?>
                     <li>
<<<<<<< HEAD
                        <a href="../views/dashboard.php">
=======
                        <a href="./views/dashboard.php">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
                            Dashboard
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                    <?php
                        if (isset($_SESSION["roli"])) {
                    ?>
                     <li>
<<<<<<< HEAD
                        <a href="../pages/logout.php">
=======
                        <a href="logout.php">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
                            Log Out
                        </a>
                    </li>
                    <li>
                        <?php>echo $_SESSION['role']; <?>
                    </li>
                    <?php
                        }
                    ?>

                </ul>
            
        </div>  
    </nav>