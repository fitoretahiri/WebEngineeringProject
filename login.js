function logIn(){
    var passwordRegex=/^[A-Z]{1}[A-Za-z0-9]+\d{3}$/;
    var inputi =document.getElementById('password').value
    var testo=passwordRegex.test(inputi);

    if(testo){
        console.log('Regjistrimi u krye me sukses!')
        document.write('Jeni regjistruar me sukses!');
    }
    else{
        console.log('Keni gabuar fjalekalimin apo emailin tuaj!');
        document.write('Keni gabuar fjalekalimin apo emailin tuaj!');
    }
}

function register(){

}