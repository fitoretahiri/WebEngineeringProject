<?php
include '../includes/header.php';
?>
<body>

<div style="background-color:black;">
<ul style="display: flex;   flex-wrap: wrap;list-style:none; justify-content: center;">
    <li><a style=" font-size:25px; color:#009879; text-decoration:none;" href="menuDashboard.php">Products</a></li>
    <li><a style=" font-size:25px; color:#009879; text-decoration:none; margin-left:20%;" href="contactDashboard.php">Messages</a></li>
</ul>
</div>

<div style="overflow-x:auto; margin-bottom:20%;">
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
            <td><a href='../views/edit.php?id=$user[id]'>Edit</a></td>
            <td><a href='../views/delete.php?id=$user[id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
    </table>
    </div>    
<?php
include '../includes/footer.php';
?>