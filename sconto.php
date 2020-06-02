<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <meta name="author" content="Alessandro De Vitis">
        <meta name="author" content="Tommaso Ercoli">
        <link rel="icon" href="../immagini/logo_sapienza.ico" />
        <title>SapienPIZza | Codice sconto</title>
        <link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../stili.css" lang="css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery-qrcode-master/src/jquery.qrcode.js"></script>
        <script type="text/javascript" src="jquery-qrcode-master/src/qrcode.js"></script>
        <style>
            body{
                background-image: url('../immagini/pizza7.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <script>
            function generaCodice(){
                var codice = '';
                var caratteri = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
                for (var i = 0; i < 10; i++) {
                    var casuale = Math.floor(Math.random() * caratteri.length);
                    codice += caratteri.substring(casuale, casuale + 1);
                }
                return codice;
            }
        </script>
        <script>
            var cod = generaCodice();
            window.onload = function(){
                document.getElementById("passaggioCodice").innerHTML=cod;
            }
            $(document).ready(function(){
                $("#qrcode").qrcode({ text: JSON.stringify(cod),
                    render: "table",
                    width: 128,
                    height: 128
                });
            });
        </script>
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

        <h2 >Ecco il tuo codice sonto: <span id="passaggioCodice"></span></h2>
        <h4>Ricordati di salvarlo, altrimenti fai un screenshoot al codice qr e presentalo alla cassa</h4>
        <div id="qrcode"></div>

        <?php

        ?> 
        <div class="page-footer fixed-bottom text-center " id="footer"></div>
    </body>
</html>