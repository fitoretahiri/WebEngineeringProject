<?php
require_once '../controller/sliderController.php';
if(isset($_GET['id'])){
    $sliderId=$_GET['id'];
}
//$menuId=$_GET['id'];
$slider = new SliderController();
$currentSlider= $slider->edit($sliderId);

if(isset($_POST['submit'])){
    $menu->update($_POST,$sliderId);
}

?>

<form method="POST">
    Image:
    <input type="file" name="image" value="<?php echo $currentSlider['menu_image']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>