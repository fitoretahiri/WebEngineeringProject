<?php
include '../includes/header.php';
require_once '../controller/newsController.php';
?>

<link rel="stylesheet" href="../CSS/dashboard.css" >
<div>
<?php
    include "../includes/dashboardHeader.php";
?>
<button style="background-color:#009879; border-radius:20%; padding:10px;margin-left:45%; margin-top:3%; margin-bottom:3%;"><a style="text-decoration:none; color:white;" href="../views/create-news.php">Create news</a></button>
<div style="overflow-x:auto; margin-bottom:20%;">   
<table class="content-table">
        <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Added by</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $m= new NewsController();

        $allMenu = $m->readData();

        foreach($allMenu as $menu){
            echo "
            <tr> 
            <td>$menu[image]</td>
            <td>$menu[title]</td>
            <td>$menu[text]</td>
            
            <td><a href='../views/edit-news.php?id=$menu[id]'>Edit</a></td>
            <td><a href='../views/delete-news.php?id=$menu[id]'>Delete</a></td>
            <td>$menu[addedby]</td>
            </tr>
            ";
        }

        ?>
          
    </table>
    </div>
    
</div>    
<?php
include '../includes/footer.php';
?>