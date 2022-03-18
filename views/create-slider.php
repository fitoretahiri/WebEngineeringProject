<?php
require_once '../controller/sliderController.php';

$menu = new SliderController();
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>