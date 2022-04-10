<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Organization</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>

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