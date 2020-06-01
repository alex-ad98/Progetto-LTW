function validaFormIscrizione(){ 
    if (document.formIscrizione.inputPassword.value != document.formIscrizione.checkPassword.value){
        alert("Le password inserite non combaciano");
        document.formIscrizione.inputPassword.value = "";
        document.formIscrizione.checkPassword.value = "";
        return false;
    }
    return true;
}

function validaPassword(){ 
    if (document.formIscrizione.inputPassword.value.length < 8) {
        alert("La password deve contenere almeno 8 caratteri");
        document.formIscrizione.inputPassword.value = "";
        document.formIscrizione.checkPassword.value = "";
        return false;
    }
    return true;
}

function mostraPassword() {
    var password = document.getElementById("password");
    var check = document.getElementById("checkpsw");
    if(password.type === "password"){
        password.type = "text";
    } 
    else{
        password.type = "password";
    }
    if(check.type === "password"){
        check.type = "text";
    }
    else{
        check.type = "password";
    }
}
