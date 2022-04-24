<?php
    include '../includes/header.php';
    include "../includes/dashboardHeader.php";
?>
<div style="overflow-x:auto; margin-bottom:20%;">
    <table class="content-table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Organization</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
</thead>

        <?php
        include_once '../repository/contactUsRepository.php';
        $contactUsRepository=new ContactUsRepository();

        $messages=$contactUsRepository->getAllMessages();

        foreach($messages as $message){
            echo "
            <tr> 
            <td>$message[id]</td>
            <td>$message[fullName]</td>
            <td>$message[email]</td>
            <td>$message[telephone]</td>
            <td>$message[organization]</td>
            <td>$message[message]</td>
            <td><a href='../views/delete-message.php?id=$message[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
    </table>
    </div>
    <?php
    include '../includes/footer.php';
    ?>