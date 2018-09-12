<html>
    <head>
        <title>Sendevorgang...</title>
    </head>
    
    <body>
        <?php
            if($_POST['von'] !="" and $_POST['mail'] !="" and $_POST['betreff'] !="" and $_POST['nachricht'] !="") {
            $empf = "kontakt@fliesen-kemker.de";
            $betreff = $_POST['betreff'];
            $text = "From: ";
            $text .= $_POST['von'];
            $text .= " (";
            $text .= $_POST['mail'];
	    $text .= ")";
            $text .= "\n";
	    $text .= "------------------------------------------";
	    $text .= "\n";
            $text .= $_POST['nachricht'];
	    
                
            mail ($empf, $betreff, $text, $from);
            echo "Ihre Nachricht wurde erfolgreich gesendet";
            } else {
            echo "Bitte alle Felder ausf&uuml;llen";
            }
        ?>
    </body>

</html>
