<?php
require_once "../repository/contactUsRepository.php";

if(isset($_GET['id'])){
    $messageId=$_GET['id'];

}
$message = new ContactUsRepository;
$message->deleteMessage($messageId);
?>