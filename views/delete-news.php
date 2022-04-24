<?php
require_once "../controller/newsController.php";

if(isset($_GET['id'])){
    $newsId=$_GET['id'];

}
$news = new NewsController;
$news->delete($newsId);
?>