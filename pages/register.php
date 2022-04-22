<?php include_once '../includes/header.php'; 
require_once('../controller/userController.php');
?>

    <div class="main-div" id="main-content">
        <h2 class="together">WELLCOME! Register to our site:</h2>

    <form action="register.php"  method="POST">
        <div class="form-control">
            <label for="">Enter your name:</label>
            <input type="text" placeholder="Name" class="inputs"  name="name" id="name">
            <small>Error message</small>
        </div>    
        
        <div class="form-control">
            <label for="">Enter your surname:</label>
            <input type="text" placeholder="surname" class="inputs" name="surname" id="surname">
            <small>Error message</small>
        </div>    

        <div class="form-control">
            <label for="">Enter your age:</label>
            <input type="number" placeholder="age" class="inputs" name="age" id="age">
            <small>Error message</small>
        </div>    
        
        <div class="form-control">
            <label for="">Enter your birthdate:</label>
            <input type="date" placeholder="date of birth" class="inputs" name="birthday" id="birthday">
            <small>Error message</small>
        </div>

        <div class="form-control">
        <label for="">Enter email:</label>
            <input type="email" placeholder="email" class="inputs" name="email" id="email">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="">Enter password:</label>
            <input type="password" placeholder="password" class="inputs"  name="psw" id="password">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="">Re-enter password:</label>
            <input type="password" placeholder="re enter password" class="inputs" name="psw2" id="password2">
            <small>Error message</small>
        </div>

        <input type="hidden" name="roli">

        <div class="form-control">
        <input type="checkbox" id="checkbox" name="checkbox">
        <label for="">I agree with the terms</label>
        <br>
        <small>Error message</small>
        </div>

        <input name="submit" type="submit" class="btn">
        <br>
        <button class="btn"><a href="www.facebook.com" style="color: white; text-decoration: none;">Register with Facebook</a></button>
        <br>
        <button class="btn"><a href="www.gmail.com"  style="color: white; text-decoration: none;">Register with Google</a></button>
        <br>
        <p>Already have an account, <a href="logIn.php">log in!</a></p>
    </div>
</form>

<?php
<<<<<<< HEAD
    require_once('../controller/userController.php');
=======
    
    include('../includes/footer.php');
>>>>>>> 92604c8ad98ac624d7126dd7ee30d3a841daa9ea
    ?> 