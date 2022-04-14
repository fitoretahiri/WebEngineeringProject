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
<<<<<<< HEAD
    <link rel="stylesheet" href="../CSS/dashboard.css" >
=======
=======
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/logIn.css">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
>>>>>>> parent of cea3811 (strukturimi i files)
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>
<body>
        <div style="background-color: black;">
            <p id="header"><i>Welcome in our page!</i></p>
        </div>
        <nav class="nav-bar">
            <div class="logo-div"><h1 id="logo"><em>Furniture</em></h1></div>
            <div class="nav-list">
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
            <!--h1 id="logo"><em>Furniture</em></h1-->
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
=======

>>>>>>> Stashed changes
            <?php
                $style = "";
                if(isset($_SESSION['roli'])){
                    $style = "style='visibility:hidden;'";
                }?>
            
                <ul id="lista-e-pare">
                    <li> <a href="index.php">Home</a></li> 
                    <li><a href="order.php">Order</a></li>
                    <li> <a href="news.php">News</a></li> 
                    <li><a href="contactPage.php">Contact</a></li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li> <a <?php echo $style;?> href="../pages/logIn.php">Log in</a></li>
                    <li><a <?php echo $style;?> href="../pages/register.php">Register</a></li>
=======
                    <li> <a <?php echo $style;?> href="logIn.php">Log in</a></li>
                    <li><a <?php echo $style;?> href="register.php">Register</a></li>
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
>>>>>>> parent of cea3811 (strukturimi i files)
                    <?php
                        if (isset($_SESSION["roli"]) && $_SESSION["roli"] == 'Admin') {
                    ?>
                     <li>
<<<<<<< HEAD
                        <a href="dashboard.php">
=======
<<<<<<< HEAD
                        <a href="../views/dashboard.php">
=======
                        <a href="./views/dashboard.php">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
>>>>>>> parent of cea3811 (strukturimi i files)
                            Dashboard
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                    <li> <a <?php echo $style;?> href="logIn.php">LogIn</a></li>
                    <!--li><a <!?php echo $style;?> href="register.php">Register</a></li-->

                    <?php
                        if (isset($_SESSION["roli"])) {
                    ?>
                     <li>
<<<<<<< HEAD
                        <a href="../pages/logout.php">
<<<<<<< HEAD
                            LogOut
=======
=======
                        <a href="logout.php">
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
                            Log Out
>>>>>>> parent of cea3811 (strukturimi i files)
                        </a>
                    </li>
                    <?php
                        }
                    ?>

                <?php
                        if (isset($_SESSION["roli"])) {
                    ?>
                     <li>
                        <?php
                            echo "<p style='color:white; margin-left:5%;'>" . $_SESSION["name"] . " " . $_SESSION["surname"] . "</p>";
                        ?>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
        </div>  
    </nav>