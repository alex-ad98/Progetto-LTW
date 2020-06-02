Sito Web di una pizzeria immaginaria (SapienPIZza).
 
Realizzato nei mesi di aprile e maggio 2020 da Alessandro De Vitis (devitis.1810855@studenti.uniroma1.it) e Tommaso Ercoli (ercoli.1800047@studenti.uniroma1.it) come progetto pratico del corso "Linguaggi e tecnologie per il web" del corso di laurea in Ingegneria Informatica dell'università La Sapienza di Roma.

------------------------------------------------------------------------------------------

Istruzioni SQL per la creazione del database relazionale PostgresSQL utilizzato

create table utenti(
    email varchar(50) primary key,
    password varchar(32) not null,
    nome varchar(30) not null,
    cognome varchar(30) not null,
    telefono varchar(13)
)

create table prenotazioni(
	data_e_ora varchar(25) not null,
	quantita int not null,
	nomintativo varchar(50) not null,
	telefono varchar(13)
)

create table codici_sconto(
    codice varchar(10) not null,
    email varchar(50) not null
)



