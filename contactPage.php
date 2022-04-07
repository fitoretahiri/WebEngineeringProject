<?php
include('includes/header.php'); 
?>

<?php
/*require_once './controller/contactController.php';

$menu = new ContactController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}

*/
?>

<style>
*{
    margin: 0;
    padding: 0;
}

.reachUs-div{
    padding-top: 120px;
    text-align: center;
}

.contactBody-div{
   margin:auto;
   margin-left: 20%;
   margin-right: 20%;
   height:1300px;
}

.contactBody-div input{
    border: 3px solid rgba(170, 167, 167, 0.959);
}

.contactBody-div textarea{
    border: 3px solid rgba(170, 167, 167, 0.959);
}

.usersAndOurInfo-div{
    display: flex;
    flex-wrap: wrap;
}

.usersInfo-div{
    margin-bottom: 8%;
}

input.invalid{
    border: 1px solid red;
}

.error-hint{
    color: red;
    font-size: 13px;
}

.thankU-div{
    padding: 40px;
    font-size: 32px;
    text-align: center;
}

hr{
  height: 1px;
  background-color:rgb(184, 182, 182);
  border: none;
  margin-bottom: 20px;
  margin-top: 20px;
}

.submitButton-div button{
    padding: 7px;
    font-size: 15px;
    background-color: rgb(199, 198, 198);
   
    color: whitesmoke;
    border-radius: 10px;
    transition: all 1s;
    cursor: pointer;
}

button{
    transition: all 1s;
    cursor: pointer;
    background-color: rgba(235, 225, 180, 0.726);
}

button:hover{
    background-color:rgba(92, 209, 203, 0.377);
    border: rgba(0, 0, 0, 0.342);
    color: white;
}

.hidden{
    display: none;
}

.ourInfo-div{
    height: 360px;
    width: 400px;
    margin: auto;
    background-color:rgb(199, 198, 198);
    border: 3px solid rgba(170, 167, 167, 0.959);
    text-align: center;
    margin-bottom: 8%;
}

.ourInfo-div div{
    padding-left: 15px;
    padding-bottom: 35px;
    padding-top: 35px;
}

.locationIcon-div{
    display: flex;
}

.emailIcon-div{
    display: flex;
}

.phoneIcon-div{
    display: flex;
}

.usersNameEmail-div{
    padding-top: 20px;
    display: flex;
    flex-wrap: wrap;
    padding-bottom: 20px;
}

.usersNameEmail-div div{
    padding-right: 20px;
}

.usersPhoneOrganization-div{
    display: flex;
    flex-wrap: wrap;
}

.usersPhoneOrganization-div div{
    padding-right: 20px;
}

.comment-div{
    padding-top: 20px;
    padding-bottom:20px ;
}

.googleMap{
    max-width: 100%;
}

  /*  @media screen and (max-width:855px){

      .reachUs-div{
        text-size-adjust: 350%;
        margin-bottom: 10%;
      }

      .usersInfo-div p{
        text-size-adjust: 300%;
      }

      .usersInfo-div input{
          height: 100px;
          width: 600px;
      }

      .usersInfo-div textarea{
        height: 400px;
        width: 600px;
        text-size-adjust: 300%;
      }

      .contactBody-div{
          height: 300px;
      }

      .usersInfo-div button{
          height: 90px;
          width: 250px;
          text-size-adjust: 300%;
      }

      .ourInfo-div {
          height: 600px;
          width: 800px;
          text-size-adjust: 350%;
      }

      .contactIcons-div img {
          height: 70px;
      }
      .googleMap {
          height: 900px;
          width: 800px;
      }
    } */
    </style>

<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8"/>
    <title>Contact Page</title>
    <script src="https://kit.fontawesome.com/96651c389e.js" crossorigin="anonymous"></script>    
</head>

            <div class="reachUs-div">
            <h4>Reach Our Team</h4> <br> 
            <p>We're always happy to help!</p>  
            </div>
        </div>

        <div class="contactBody-div"> 
             
            <div class="usersAndOurInfo-div">
                

                <form name="contact-form" action="" method="post">

                <div class="usersInfo-div">
                <p><b>Send us a message</b></p>
                <p>Send us a message and we'll respond within 24 hours</p>
                    <div class="usersNameEmail-div">
                    <div class="usersName-div">
                    <p>Full Name:</p>
                    <input id="name" type="text" name="name" size="15" maxlength="20"/> 
                    <div class="error-hint hidden ">Your name is required.</div>
                    </div>

                    <div class="usersEmail-div">
                    <p>Email:</p>
                    <input id="email" type="email" name="email" size="15" maxlength="20"/>
                    <div class="error-hint hidden ">Your email is required.</div>
                    </div>
                    </div>
                    
                    <div class="usersPhoneOrganization-div">
                    <div class="usersPhone-div">
                    <p>Telephone:</p>
                    <input id ="telephone" name="telephone" size="15" maxlength="20"/>
                    <div class="error-hint hidden ">Your tel. is required.</div>
                    </div>

                    <div class="usersOrganization-div">
                    <p>Organization:</p>
                    <input id="organization" type="text" name="user" size="15" maxlength="20"/>
                    </div>
                    </div>

                    <div class="comment-div">
                    <textarea id="message"name="comments" placeholder="Your Message" cols="54" rows="10"></textarea>
                    <div class="error-hint hidden ">Your message is required.</div>
                    </div>

                     <hr>
                     <input id="myButton" type="submit" name="submit" value="Save">
                    </form>
                </div>

                    <div class="thankU-div hidden">
                        Thank you for your feedback!
                    </div>
                
                <div class="ourInfo-div">
                <p><b>Contact Information</b></p>
                    <div class="contactIcons-div">

                      <div class="locationIcon-div">
                           <img src="../WebEngineeringProject/icons/location.png" alt="">
                           <p>---location---</p>
                      </div>
                      
                      <div class="emailIcon-div">
                        <img src="../WebEngineeringProject/icons/email .png" alt="">
                        <p>---email---</p>
                      </div>

                      <div class="phoneIcon-div">
                        <img src="../WebEngineeringProject/icons/telephone .png" alt="">
                        <p>---phone---</p>
                      </div>
                    </div>
                </div>

                <div class="map-div">
                   <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11748.417575593037!2d21.12200163556503!3d42.595528566746445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549df227a98755%3A0x367373bea7b41f98!2sMobileri%20Prishtina!5e0!3m2!1sen!2s!4v1639605826330!5m2!1sen!2s" width="870" 
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
             </div>
        </div>
    
        <?php
           include('includes/footer.php'); 
        ?>
    </div>
    
    <?php
    include_once('controller/contactController.php');
    ?> 


<!---    
    <script>
        var menuList=document.getElementById("menuList");
        menuList.style.maxHeight="0px";
    
        function togglemenu(){
            if(menuList.style.maxHeight=="0px"){
                menuList.style.maxHeight="290px"
            }
            else{
                menuList.style.maxHeight="0px" ;
            }
    
        }
    </script>--->
</body>
    