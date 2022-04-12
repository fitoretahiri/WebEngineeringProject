<?php

    include_once '../repository/userRepository.php';
    // e marrim id e perdorusit permes get
    $userId=$_GET['id'];

    $userRepository=new UserRepository();
    $user=$userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="" method="POST">
    <input type="text" name="id" value="<?=$user['id'] ?>" readonly><br><br>
    <input type="text"  name="name" value="<?=$user['name'] ?>"><br><br>
    <input type="text" name="surname" value="<?=$user['surname'] ?>"><br><br>
    <input type="number" name="age"value="<?=$user['age'] ?>"><br><br>
    <input type="date" name="birthday"value="<?=$user['birthday'] ?>"><br><br>
    <input type="email"  name="email"value="<?=$user['email'] ?>"><br><br>
    <input type="password"  name="psw"value="<?=$user['psw'] ?>"><br><br>
    <input type="password"  name="psw2"value="<?=$user['psw2'] ?>"><br><br>
    <input type="submit"  name="saveBtn" value="save"><br><br>
</form>
</body>

<?php

    if(isset($_POST["saveBtn"])){
    //id e marrim direkt prej userit ne databaze e cila nuk mund te ndryshohet
    $id=$user['id'];

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $birthday=$_POST['birthday'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $psw2=$_POST['psw2'];
    //$roli=$_POST['roli'];

    $userRepository->updateUser($id,$name,$surname,$age,$birthday,$email,$psw,$psw2);
    header("location:../pages/dashboard.php");
}
?>
</html>