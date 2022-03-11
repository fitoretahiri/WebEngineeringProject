<?php
require_once "../controller/sliderController.php";

if(isset($_GET['id'])){
    $sliderId=$_GET['id'];

}
$slider = new SliderController();
$slider->delete($sliderId);
?>