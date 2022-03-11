<?php
require_once '../controller/sliderController.php';
?>


    <style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Slider pictures</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $m= new SliderController();

        $allPics = $m->readData();

        foreach($allPics as $pic){
            echo "
            <tr> 
            <td>$pic[slider_image]</td>
            
            <td><a href='edit-slider.php?id=$pic[id]'>Edit</a></td>
            <td><a href='delete-slider.php?id=$pic[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
          
    </table>
    
</div>