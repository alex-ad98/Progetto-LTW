function validaFormIscrizione(){ 
    if (document.formIscrizione.inputPassword.value != document.formIscrizione.checkPassword.value){
        alert("Le password inserite non combaciano");
        document.formIscrizione.inputPassword.value = "";
        document.formIscrizione.checkPassword.value = "";
        return false;
    }
    return true;
}

function validaPassword(){ //da completare
    if (document.formIscrizione.inputPassword.length < 6) {
        alert("La password deve contenere almeno 6 caratteri");
        return false;
    }
    return true;
}