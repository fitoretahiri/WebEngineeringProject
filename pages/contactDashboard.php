<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css" >
    
</head>
<body> -->
    <?php
    include '../includes/header.php';
    ?>
<div style="background-color:black; padding-bottom:1%;">
<ul style="display: flex;   flex-wrap: wrap;list-style:none; justify-content: center;">
    <li><a style=" font-size:25px; color:#009879; text-decoration:none;" href="dashboard.php">Users</a></li>
    <li><a style=" font-size:25px; color:#009879; text-decoration:none; margin-left:20%;" href="menuDashboard.php">Products</a></li>
</ul>
</div>
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
<!-- </body>
</html> -->