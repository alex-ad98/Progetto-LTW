<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <meta name="author" content="Alessandro De Vitis">
        <meta name="author" content="Tommaso Ercoli">
        <link rel="icon" href="../immagini/logo_sapienza.ico" />
        <title>SapienPIZza | Accesso</title>
        <link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../stili.css" lang="css" type="text/css">
        <style>
            body{
                background-image: url('../immagini/pizza9.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <?php
            $db_conn = pg_connect("host=localhost port=5432 dbname=LTW_Progetto_Pizzeria user=postgres password=uZ3Mx8")
                        or die('Connessione al database fallita: ' . pg_last_error());
            if(!(isset($_POST['bottoneAccesso']))){ 
                header("Location:../homepage.html"); 
            }         
            else{
                $email = $_POST['inputEmail'];
                $q0 = "select * from utenti where email=$1";
                $risultato0 = pg_query_params($db_conn, $q0, array($email));
                if(!($tupla0 = pg_fetch_array($risultato0, null, PGSQL_ASSOC))){
                    echo "<h2>L'indirizzo email inserito non è associato a nessun account</h2>
                    <a href=../paginaIscrizione/iscrizione.html> Clicca qui per iscriverti </a>";
                }
                else{
                    $password = md5($_POST['inputPassword']);
                    $q1 = "select * from utenti where email = $1 and password = $2";
                    $risultato1 = pg_query_params($db_conn, $q1, array($email, $password));
                    if(!($tupla1 = pg_fetch_array($risultato1, null, PGSQL_ASSOC))){
                        echo "<h2>La Password inserita è sbagliata</h2>
                        <a href=login.html>Clicca qui per accedere</a>";
                    }
                    else{
                        $nome = $tupla1['nome'];
                        echo "<h2>Benvenuto $nome</h2>
                        <a href=../homepage.html?name=$nome>Torna alla Homepage</a>";
                    }
                }
            }     
        ?>
    </body>

</html>