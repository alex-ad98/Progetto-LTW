function validaFormPrenotazione(){
    var oggi = new Date();
    var arr = document.formPrenotazione.data.value.split("-");
    var d = new Date(arr[2], arr[1]-1, arr[0]);
    if( d.getTime < oggi.getTime){
        alert("Scegliere una data valida"); //NON FUNZIONA, BISOGNA RISOLVERE
        return false;
    }
    if (document.formPrenotazione.ora.value < 19: 30) { //NON FUNZIONA, BISOGNA RISOLVERE
        alert("Il locale apre alle 19:30, non &egrave possibile prenotare prima di quell'ora");
        document.formPrenotazione.ora.value = 19:30;
        return false;
    }
    if(document.formPrenotazione.numeroPosti.value < 1){
        alert("Prenotare almeno per una persona");
        return false;
    }
    return true;
}