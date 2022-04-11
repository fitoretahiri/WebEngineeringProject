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
<a href='menuDashboard.php'>Click here for the Products Dashboard</a><br><br>
<a href='contactDashboard.php'>Click here for the Messages Dashboard</a><br><br> 
<a href='../pages/index.php'><-- Back to the Home Page</a><br><br> 
<table class="content-table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Password</th>
            <th>Repeat Password</th>
            <th>Roli</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
</thead>

        <?php
        include_once '../repository/userRepository.php';
        $userRepository=new UserRepository();

        $users=$userRepository->getAllUsers();

        foreach($users as $user){
            echo "
            <tr> 
            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[surname]</td>
            <td>$user[age]</td>
            <td>$user[birthday]</td>
            <td>$user[email]</td>
            <td>$user[psw]</td>
            <td>$user[psw2]</td>
            <td>$user[roli]</td>
            <td><a href='edit.php?id=$user[id]'>Edit</a></td>
            <td><a href='delete.php?id=$user[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
    </table>
</body>
</html>