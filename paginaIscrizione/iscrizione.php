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
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
            <!-- Links -->
             <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../homepage.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../paginaMenu/menu.html">Men&ugrave;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../paginaPrenota/prenota.html">Prenota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../paginaSpesa/spesa.html">Quanto spenderai?</a>
                </li>
             </ul>
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
                    echo "<h2>L'indirizzo email inserito risulta già registrato </h2>
                          <a href=../paginaLogin/login.html>Clicca qui per effettuare l'accesso </a>";
                }
                else{
                    $password = md5($_POST['inputPassword']);
                    $nome = $_POST['nome'];
                    $cognome = $_POST['cognome'];
                    $telefono = $_POST['telefono'];
                    $q1 = "insert into utenti values ($1, $2, $3, $4, $5)";
                    $risultato1 = pg_query_params($db_conn, $q1, array($email, $password, $nome, $cognome, $telefono));
                    if($risultato1){
                        echo "<h2> Registrazione completata </h2> <br>
                            <a href=../homepage.html?name=$nome> Torna alla Homepage </a>";
                    }
                }
            }
        ?>
    </body>
</html>