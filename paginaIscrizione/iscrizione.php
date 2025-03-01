<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <meta name="author" content="Alessandro De Vitis">
        <meta name="author" content="Tommaso Ercoli">
        <link rel="icon" href="../immagini/logo_sapienza.ico" />
        <title>SapienPIZza | Iscrizione</title>
        <link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../stili.css" lang="css" type="text/css">
        <style>
            body{
                background-image: url('../immagini/pizza4.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    
    <body>
        <!-- Barra Navigazione --> 
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark flex-nowrap">
        <div class="navbar-toggler mr-2">
            <span class="navbar-toggler-icon"></span>
        </div>
        <span class="navbar-brand w-100"><img src="/immagini/SapienPizza_Trasp.png" width="150px" height="60px"></span>
        <div class="navbar-collapse collapse w-100 justify-content-center" id="navbar5">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/homepage.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/paginaMenu/menu.html">Men&ugrave;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/paginaPrenota/prenota.html">Prenota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/paginaSpesa/spesa.html">Quanto spenderai?</a>
            </li>
          </ul>
        </div>
        <div class="navbar navbar-collapse w-100 justify-content-end">
          
        </div>
    </nav>
        
        <?php
            $db_conn = pg_connect("host=localhost port=5432 dbname=LTW_Progetto_Pizzeria user=postgres password=uZ3Mx8") 
                        or die('Connessione al database fallita: ' . pg_last_error());
            if(!(isset($_POST['bottoneIscrizione']))){ header("Location:../homepage.html"); }
            else{
                $email = $_POST['inputEmail'];
                $q0 = "select * from utenti where email=$1";
                $risultato0 = pg_query_params($db_conn, $q0, array($email));
                if($line = pg_fetch_array($risultato0, null, PGSQL_ASSOC)){
                    echo "<div class=\"container-fluid pt-2 pb-2 rounded text-center\" style=\"background-color: rgba(177, 189, 189, 0.65);\">
                            <h2>L'indirizzo email inserito risulta già registrato </h2> <br>
                            <a href=../paginaLogin/login.html style=\"font-size:16px;\" class=\"badge badge-dark\">Clicca qui per effettuare l'accesso</a>
                            </div>";
                }
                else{
                    $password = md5($_POST['inputPassword']);
                    $nome = $_POST['nome'];
                    $cognome = $_POST['cognome'];
                    $telefono = $_POST['telefono'];
                    $q1 = "insert into utenti values ($1, $2, $3, $4, $5)";
                    $risultato1 = pg_query_params($db_conn, $q1, array($email, $password, $nome, $cognome, $telefono));
                    if($risultato1){
                        echo "<div class=\"container-fluid pt-2 pb-2 rounded text-center\" style=\"background-color: rgba(177, 189, 189, 0.65);\">
                            <h2> Registrazione completata con successo</h2> <br>
                            <a href=../sconto.html?name=$nome style=\"font-size:16px;\" class=\"badge badge-dark\">Ottieni il tuo codice di sconto</a>
                            </div>";
                    }
                }
            }
        ?>
        <div class="page-footer fixed-bottom text-center " id="footer"></div>
    </body>
</html>