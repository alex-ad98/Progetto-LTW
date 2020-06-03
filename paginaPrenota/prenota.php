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
                background-image: url('../immagini/pizza8.jpg');
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
                    <a class="nav-link" href="../paginaSpesa/spesa.html">Quanto spenderai?</a>
                </li>
             </ul>
        </nav>

        <?php
            $db_conn = pg_connect("host=localhost port=5432 dbname=LTW_Progetto_Pizzeria user=postgres password=uZ3Mx8") 
                        or die('Connessione al database fallita: ' . pg_last_error());
            if(!(isset($_POST['bottonePrenota']))){ header("Location:../homepage.html"); }
            else{
                $data = $_POST['data'];
                $quantita = $_POST['numeroPosti'];
                $nominativo = $_POST['nominativo'];
                $telefono = $_POST['telefono'];
                $q0 = "select from prenotazioni";
                
                   
                $q1 = "insert into prenotazioni values ($1, $2, $3, $4)";
                $risultato1 = pg_query_params($db_conn, $q1, array($data, $quantita, $nominativo, $telefono));
                if($risultato1){
                    echo "<div class=\"container-fluid pt-2 pb-2 rounded text-center\" style=\"background-color: rgba(177, 189, 189, 0.65);\">
                            <h2>Prenotazione effettuata con successo</h2> <br>
                            <a href=../homepage.html style=\"font-size:16px;\" class=\"badge badge-dark\">Torna alla Homepage</a>
                            </div>";
                }
            }
        ?>

        <div class="page-footer fixed-bottom text-center " id="footer"></div>

    </body>
</html>