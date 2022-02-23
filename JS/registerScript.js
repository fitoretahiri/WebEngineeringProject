

let nameInput=document.getElementById('name');
let surnameInput=document.getElementById('surname');
let ageInput=document.getElementById('age');
let birthdayInput=document.getElementById('birthday');
let emailInput=document.getElementById('email');
let passwordInput=document.getElementById('password');
let password2Input=document.getElementById('password2');
let checkboxInput=document.getElementById('checkbox');
let isEmail=false;
let isPass=false;
let isCheckbox=false;
let isName=false;
let isSurname=false;
let isDate=true;
let isAge=false;
let isPass2=false;

function validateRegister(){
    if(nameInput.value.trim()===''){
        onError(nameInput,"Name cannot be empty!")
    }else{
        if(!validoEmrin(nameInput.value.trim())){
            onError(nameInput,"Name must start with an uppucase letter!")
        }
        else{
            onSuccess(nameInput);
            isName=true;
        }
    }

    if(surnameInput.value.trim()===''){
        onError(surnameInput,"Surname cannot be empty!")
    }
    else{
        if(!validoEmrin(surnameInput.value.trim())){
            onError(surnameInput,"Surname must start with an uppercase letter!")
        }
        else{
            onSuccess(surnameInput);
            isSurname=true;
        }
    }

    if(ageInput.value.trim()===''){
        onError(ageInput,"Age cannot be empty!");
    }else{
        if(!validoMoshen(ageInput.value)){
            onError(ageInput,"Only numbers are allowed!");
        }
        else if(ageInput.value<=0 || ageInput.value>110){
            onError(ageInput,"This age does not exist!");
        }
        else{
            onSuccess(ageInput);
            isAge=true;
        }
    }

    if(birthdayInput.value.trim()===''){
        onError(birthdayInput,"Birthday cannot be empty!");
    }else{
        onSuccess(birthdayInput);
        isDate=true;
    }
    
    if(emailInput.value.trim()===''){
        onError(emailInput,"Email cannot be empty!");
    }
    else{
        if(!emailValidation(emailInput.value.trim())){
            onError(emailInput,"Email is not valid");
        }else{
            onSuccess(emailInput);
            isEmail=true;
        }
    }
    if(passwordInput.value.trim()===''){
        onError(passwordInput,"Password cannot be empty!")
    }
    else{
        if(testWhiteSpaces(passwordInput.value)){
            onError(passwordInput,"Password cannot contain white spaces!")
        }
      else if(!testLength(passwordInput.value)){
            onError(passwordInput,"Password should be atleast 8 characters long!")
        }
        else{
            onSuccess(passwordInput);
            isPass=true;
        }
    }

    if(password2Input.value.trim()===''){
        onError(password2Input,"Password cannot be empty!")
    }else{
        if(passwordInput.value.trim()!==password2Input.value.trim()){
            onError(password2Input,"Password & confirm password are not matching!");
         }
         else{
             onSuccess(password2Input);
             isPass2=true;
         }
    }
    if(checkboxInput.checked ==false){
        onError(checkboxInput,"Accept our terms of use!")
    }
    else{
        onSuccess(checkboxInput);
        isCheckbox=true;
    }
    if(isName && isSurname && isAge &&isDate&&isPass2&&isPass2&&isCheckbox&&isEmail){
        var div = document.getElementById('main-content');
        
        document.getElementById('main-content').innerHTML = "";
        div.innerHTML += 'You are now registered! Continue shopping!';

        console.log("Emri: ",nameInput.value);
        console.log("Mbiemri: ",surnameInput.value);
        console.log("Mosha: ",ageInput.value);
        console.log("Data e lindjes: ",birthdayInput.value);
        console.log("Email: ",emailInput.value);
    }
}

/*
form.addEventListener("submit",(event)=>{
    event.preventDefault();
    validateRegister();
});
*/

document.querySelector("input[name='submit']")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateRegister();
});

//Nese permbushen kerkesat
function onSuccess(input){
    let parent=input.parentElement;
    let messageE=parent.querySelector("small");
    messageE.style.visibility='hidden';
    parent.classList.remove('error');
    parent.classList.add('success');
}

//Nese nuk permbushen kerkesat
function onError(input, message){
    let parent=input.parentElement;
    let messageE=parent.querySelector("small");
    messageE.style.visibility='visible';
    messageE.innerText=message;
    parent.classList.add('error');
    parent.classList.remove('success');
}



function validoEmrin(nameInput){
    return /^[A-Z]{1}/.test(nameInput);
}

function validoMoshen(ageInput){
    return /^\d+$/.test(ageInput);
}

function validoDaten(birthdayInput){
    return /^\d{1,2}\/\d{1,2}\/\d{4}$/.test(birthdayInput);
}

function emailValidation(emailInput){
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailInput);
 }

 function testWhiteSpaces(passwordInput){
     return  /^(?=.*\s)/.test(passwordInput);
 }
function testLength(passwordInput){
     return /^.{8,}$/.test(passwordInput);
 }
 
/*
 const signup = document.querySelector('input[type="submit"]');
 var status
 signup.addEventListener('click',()=>{
     const formData = new FormData(document.querySelector('form'))
     fetch('http://localhost:8080/userController.php',{
         method: 'POST',
         body: formData
     })
     .then(res => {
         //status = res.status;
         return res.text();
     })
     .then(data=>{
         alert(data);
     })
 })*/
