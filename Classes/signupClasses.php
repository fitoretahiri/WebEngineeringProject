  <?php

  class Signup extends Dbh{

    protected function setUser($name,$surname,$birthday,$email, $password){
        //kqyrim a eshte nje email qe e shkrun useri e ne databaze dmth qe u shkrujt m'a heret
         $statement=$this->connect()->prepare(' INSERT INTO users(users_name,users_surname,users_birthday,users_email,users_password)VALUES (?,?,?,?,?);');

         //me databaze e shfaqim passwordin hashed
         $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
         //nese statement execution fails
         if!($statement->execute(array($name,$surname,$birthday,$email, $hashedPassword))){
             $statement=null;
             header("location: ../index.php?error=statementfailed");
             exit();
         }

         $statement=null;
     }

      protected function checkUser($email){
         //kqyrim a eshte nje email qe e shkrun useri e ne databaze dmth qe u shkrujt m'a heret
          $statement=$this->connect()->prepare('SELECT users_email FROM users WHERE users_email=? ;');

          //nese statement execution fails
          if!($statement->execute($email)){
              $statement=null;
              header("location: ../index.php?error=statementfailed");
              exit();
          }

          //nese useri vec ekziston ne databaze me qat email, nuk e leojojme regjistrimin, nese ndodh e kunderta e lejojme
          $resultCheck;
          if($statement->rowCount()>0){
              $resultCheck=false;
          }
          else{
              $resultCheck=true;
          }
          return $resultCheck;
      }

      
  }