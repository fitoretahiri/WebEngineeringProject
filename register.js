let nameInput=document.getElementById('name');
let surnameInput=document.getElementById('surname');
let ageInput=document.getElementById('age');
let birthdayInput=document.getElementById('birthday');
let emailInput=document.getElementById('email');
let passwordInput=document.getElementById('password');
let password2Input=document.getElementById('password2');
let checkboxInput=document.getElementById('checkbox');




function validateRegister(){
    if(nameInput.value.trim()===''){
        onError(nameInput,"Name cannot be empty!")
    }else{
        if(!validoEmrin(nameInput.value.trim())){
            onError(nameInput,"Name must start with an uppucase letter!")
        }
        else{
            onSuccess(nameInput);
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
        }
    }

    if(birthdayInput.value.trim()===''){
        onError(birthdayInput,"Birthday cannot be empty!");
    }else{
        if(!validoDaten(birthdayInput.value)){
            onError(birthdayInput,"Date is not valid!");
        }
        else{
            onSuccess(birthdayInput);
        }
    }

    if(emailInput.value.trim()===''){
        onError(emailInput,"Email cannot be empty!");
    }
    else{
        if(!emailValidation(emailInput.value.trim())){
            onError(emailInput,"Email is not valid");
        }else{
            onSuccess(emailInput);
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
        }
    }

    if(password2Input.value.trim()===''){
        onError(password2Input,"Password cannot be empty!")
    }else{
        if(password2Input.value.trim()!==password2Input.value.trim()){
            onError(password2Input,"Password & confirm password are not matching!");
         }
         else{
             onSuccess(password2Input);
         }
    }
    if(checkboxInput.checked ==false){
        onError(checkboxInput,"Accept our terms of use!")
    }
    else{
        onSuccess(checkboxInput);
    }
}

document.querySelector("button")
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