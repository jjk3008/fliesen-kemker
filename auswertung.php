<html>
    <head>
        <title>Sendevorgang...</title>
    </head>
    
    <body>
        <?php
            if($_POST['von'] !="" and $_POST['mail'] !="" and $_POST['betreff'] !="" and $_POST['nachricht'] !="") {
            $empf = "kontakt@fliesen-kemker.de";
            $betreff = $_POST['betreff'];
            $from = "From: ";
            $from .= $_POST['von'];
            $from .= " <";
            $from .= $_POST['mail'];
            $from .= ">\n";
            $from .= "Reply-To: ";
            $from .= $_POST['mail'];
            $from .= "\n";
            $from .= "Content-Type: text/html\n";
            $text = $_POST['nachricht'];
                
            mail ($empf, $betreff, $text, $from);
            echo "Ihre Nachricht wurde erfolgreich gesendet";
            } else {
            echo "Bitte alle Felder ausf&uuml;llen";
            }
        ?>
    </body>

</html>