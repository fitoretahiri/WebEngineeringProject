<style>
.invalidInput{
position: absolute;
top: 25%;
left: 18%;
margin-left:25%;
transform: translate(-15%, -50%);
color:red;  
border: 3px solid red;
background-color:white;
}

.validInput{
position: absolute;
top: 25%;
left: 18%;
margin-left:25%;
transform: translate(-15%, -50%);
color:green;  
border: 3px solid green;
background-color:white;
}
</style>

<?php
include_once '../repository/contactUsRepository.php';
include_once '../Classes/contactClasses.php';


 function emptyInput(){ 
    $result;
   if(empty($_POST['fullName'])||empty($_POST['email'])||empty($_POST['telephone'])||
   empty($_POST['organization'])||empty($_POST['message'])){
       $result=false;
   }
   else{
       $result=true;
   }
   return $result;
}

 function onlyDigits(){ 
    $result;
   if(!is_numeric($_POST['telephone'])){
       $result=false;
   }
   else{
       $result=true;
   }
   return $result;
}

 function nineDigitsMobile(){ 
    $result;
    $telLength=strlen ($_POST ["telephone"]);
   if( $telLength!=9){
       $result=false;
   }
   else{
       $result=true;
   }
   return $result;
}

 function validEmail(){ 
    $result;
    $validEmail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
   if(!preg_match ($validEmail, $_POST['email']) ){
       $result=false;
   }
   else{
       $result=true;
   }
   return $result;
}

 function validName(){ 
    $result;
   if(!preg_match('/^[\p{L} ]+$/u',$_POST['fullName'])  ){
       $result=false;
   }
   else{
       $result=true;
   }
   return $result;
}


    if(isset($_POST['submit'])){
        if (emptyInput()==false) {
            echo "<p class='invalidInput'>Fill all fields!</p>";
        }

        else{

        if (onlyDigits()==false) {
            echo "<p class='invalidInput'>Mobile must contain only numbers.</p>";
        }
         
        if (nineDigitsMobile()==false) {
            echo "<p class='invalidInput'>Mobile must have 9 digits.</p>";
        }

        if (validName()==false)  { 
            echo "<p class='invalidInput'>Only alphabets and whitespaces are allowed.</p>";  
        }

        if (validEmail()==false){ 
            echo "<p class='invalidInput'>Invalid email address.</p>"; 
        }

    }

        if(emptyInput()&& onlyDigits()&&nineDigitsMobile()&&validName()&&validEmail()){
            $fullName= $_POST['fullName'];
            $email= $_POST['email'];
            $telephone= $_POST['telephone'];
            $organization= $_POST['organization'];
            $message= $_POST['message'];
            $id=$fullName.rand(100,999);

            $contact= new Message($id,$fullName,$email,$telephone,$organization,$message);
            $contactUsRepository=new ContactUsRepository();
        
            $contactUsRepository->insertMessage($contact);

            echo "<p class='validInput'>Message sent successfully.</p>"; 
        }
        
    }

   
?>