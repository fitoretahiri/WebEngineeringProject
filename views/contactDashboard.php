<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css" >
</head>
<body>
<br><br>
<a href='dashboard.php' style="color:green">Click here for the Users Dashboard</a><br><br>
<a href='menuDashboard.php'style="color:green">Click here for the Products Dashboard</a>
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
            <td><a href='delete-message.php?id=$message[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
    </table>
</body>
</html>