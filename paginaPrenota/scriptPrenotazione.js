function validaFormPrenotazione(){
    var oggi = new Date();
    var prenota = document.formPrenotazione.data.value; 

    if( new Date(prenota).getTime() < oggi.getTime()){
        alert("Scegliere data e ora non passate"); 
        return false;
    }

    if(document.formPrenotazione.numeroPosti.value < 1){
        alert("Prenotare almeno per una persona");
        return false;
    }
    return true;
}