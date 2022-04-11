<?php

    include_once '../repository/userRepository.php';
    // e marrim id e perdorusit permes get
    $userId=$_GET['id'];

    $userRepository=new UserRepository();
    $user=$userRepository->getUserById($userId);
?>

<style>
    body {
	height: 130%;
	font-family: "Nunito Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
    background-image: url('../HomePics/silvery.jpg');
}
.edit-form{
    margin: 0;
  position: absolute;
  top: 64%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.edit-form input{
    height:29px;
    font-size:15pt;
    border:3px solid grey;
}

.edit-form p{
    font-size:15pt;
    display:flex;
    flex-wrap:wrap;

}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center;padding-top:20px;">Edit User:</h1>
<form class="edit-form"action ="" method="POST">
    <p>ID:</p>
    <input type="text" name="id" value="<?=$user['id'] ?>" readonly><br>
    <p>Name:</p>
    <input type="text"  name="name" value="<?=$user['name'] ?>"><br>
    <p>Surname:</p>
    <input type="text" name="surname" value="<?=$user['surname'] ?>"><br>
    <p>Age:</p>
    <input type="number" name="age"value="<?=$user['age'] ?>"><br>
    <p>Birthdate:</p>
    <input type="date" name="birthday"value="<?=$user['birthday'] ?>"><br>
    <p>Email:</p>
    <input type="email"  name="email"value="<?=$user['email'] ?>"><br>
    <p>Pass:</p>
    <input type="password"  name="psw"value="<?=$user['psw'] ?>"><br>
    <input type="password"  name="psw2"value="<?=$user['psw2'] ?>"><br><br>
    <input type="submit"  name="saveBtn" value="Save"><br>
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
    header("location:dashboard.php");
}
?>
</html>