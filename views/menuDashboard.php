<?php
require_once '../controller/productController.php';
?>

<link rel="stylesheet" href="../CSS/dashboard.css" >
<div>
<br><br>
<a href='dashboard.php'>Click here for the Users Dashboard</a><br><br>
<a href='contactDashboard.php'>Click here for the Messages Dashboard</a><br><br>   
<a href='../pages/index.php'><-- Back to the Home Page</a><br><br>   
<table class="content-table">
        <thead>
            <tr>
              <th>Menu image</th>
              <th>Menu title</th>
              <th>Menu body</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $m= new ProductController();

        $allMenu = $m->readData();

        foreach($allMenu as $menu){
            echo "
            <tr> 
            <td>$menu[menu_image]</td>
            <td>$menu[menu_title]</td>
            <td>$menu[menu_body]</td>
            
            <td><a href='../views/edit-product.php?id=$menu[id]'>Edit</a></td>
            <td><a href='../views/delete-products.php?id=$menu[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
          
    </table>
    
</div>
















































<?php
/*include_once 'controller/ProductController.php';

$tdhena=new ProductController();
$data=$tdhena->readData();
/*
if (!isset($_SESSION['email'])) {
    header("location:login.php");
} else {
    if ($_SESSION['role'] != "admin") {
        header("location:projekti.php");
    } else {
     */   
?>

<!---<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <link rel="stylesheet" href ="CSS/insert.css"/>
        <link rel="stylesheet" href ="CSS/menuDashboard.css"/>
    </head>
    <body>
        <?php
       // include_once 'includes/header.php';
        ?>
            <div class = "TitleForRegister">
                <h3 id="dashboardTitle">Click to add products</h3>
                <a href="insert.php"><Button id='buttonRegister'>Register</Button></a>
            </div>
         <table class ="tableElem" style="height:fit-content">
            <h4>List of Products</h4>
                    <tr class="tabelaROW">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>User</th>
                        <th>Action</th>
                      
                    </tr>
            <tr class="insertTableROW">
                      <?php
                     // foreach((array)$data as $key=>$value){
                        ?>
                        <td><?php// echo $value['menu_title']?></td>
                        <td><?php //echo $value['menu_body']?></td>
                        <td><?php //echo $value['menu_image']?></td>

                        <td ><?//php echo $_SESSION['email'];?></td>

                        <td id='de'><a href="delete.php?id=<?php echo $value['id']; ?>">
                        <button name="delete" id="d">DELETE</button></a>
                        <a href="edit.php?id=<//?php echo $value['id']; ?>"><button id='e' name='edit'>EDIT</button></td></a>
                    </tr> 
                    <?php
                     //   }
                        ?>
            </table>
        </div>      
        <?php
        //include_once "includes/footer.php";
        ?>
    </body>
</html>     
