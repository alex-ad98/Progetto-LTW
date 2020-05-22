function validaFormPrenotazione(){
    if (document.formPrenotazione.telefono.value == "" && document.formPrenotazione.email.value == ""){
        alert("Inserire almeno un recapito (telefono o e-mail)");
        return false;
    } 
    var oggi = new Date();
    var arr = document.formPrenotazione.data.value.split("-");
    var d = new Date(arr[2], arr[1]-1, arr[0]);
    if( d.getTime < oggi.getTime){
        alert("Scegliere una data valida"); //NON FUNZIONA, BISOGNA RISOLVERE
        return false;
    }
    return true;
}