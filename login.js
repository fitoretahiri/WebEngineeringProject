let emailInput=document.getElementById('email');
let passwordInput=document.getElementById('password');
let checkboxInput=document.getElementById('checkbox');
let password2Input=document.getElementById('password2');
let nameInput=document.getElementById('name');
let surnameInput=document.getElementById('surname');
let ageInput=document.getElementById('age');
let birthdayInput=document.getElementById('birthday');
let isEmail=false;
let isPass=false;
let isCheckbox=false;

//Validimi i faqes log in
function validateLogIn(){
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
    if(checkboxInput.checked ==false){
        onError(checkboxInput,"Accept our terms of use!")
    }
    else{
        onSuccess(checkboxInput);
        isCheckbox=true;
    }
    if(isEmail && isPass && isCheckbox){
        var mess = document.getElementById('show');
        mess.style.visibility='visible';
        
    }
}
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


function emailValidation(emailInput){
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailInput);
 }

 function testWhiteSpaces(passwordInput){
     return  /^(?=.*\s)/.test(passwordInput);
 }
function testLength(passwordInput){
     return /^.{8,}$/.test(passwordInput);
 }
function testContentP(passwordInput){
    return /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?~_+-=|\])..{8,32}$/.test(passwordInput);
}
//thirrja e funksionit ne buton


document.querySelector("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateLogIn();
});

