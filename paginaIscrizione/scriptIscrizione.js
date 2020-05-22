function validaFormIscrizione(){ 
    if (document.formIscrizione.inputPassword.value != document.formIscrizione.checkPassword.value){
        alert("Le password inserite non combaciano");
        document.formIscrizione.inputPassword.value = "";
        document.formIscrizione.checkPassword.value = "";
        return false;
    }
    alert("Registrazione effettuata correttamente"); //Valutare se mantenerlo o toglierlo 
    return true;
}