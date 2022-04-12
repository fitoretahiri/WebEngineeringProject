<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/logIn.css">
    <link rel="stylesheet" href="../CSS/dashboard.css" >
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

            <?php
                $style = "";
                if(isset($_SESSION['roli'])){
                    $style = "style='visibility:hidden;'";
                }?>
            
                <ul id="lista-e-pare">
                    <li> <a href="index.php">Home</a></li> 
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
                    <?php
                        if (isset($_SESSION["roli"]) && $_SESSION["roli"] == 'Admin') {
                    ?>
                     <li>
                        <a href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                    <li> <a <?php echo $style;?> href="logIn.php">Log in</a></li>
                    <!--li><a <!?php echo $style;?> href="register.php">Register</a></li-->

                    <?php
                        if (isset($_SESSION["roli"])) {
                    ?>
                     <li>
                        <a href="../pages/logout.php">
                            Log Out
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
        </div>  
    </nav>