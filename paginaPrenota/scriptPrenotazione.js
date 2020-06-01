function validaFormPrenotazione(){
    var oggi = new Date();
    //var data = new Date()
    var prenota = document.formPrenotazione.data.value; 
    //var apertura = data.setHours(19,30,0);
    //var chiusura = data.setHours(22);

    if( new Date(prenota).getTime() < oggi.getTime()){
        alert("Scegliere data e ora non passate"); 
        return false;
    }
    var p = new Date(prenota)
    if(p.getHours() < 20 || p.getHours() > 22){
        alert("Inserire un orario compreso tra le 20:00 e le 22:00"); 
        return false;
    }

    

    if(document.formPrenotazione.numeroPosti.value < 1){
        alert("Prenotare almeno per una persona");
        return false;
    }
    return true;
}