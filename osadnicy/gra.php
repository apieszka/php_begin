<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <!-- wykorzystanie najwyższej wersji strony dot. internet explorer -->
    <meta http-equic="X-UA_Compatible" content="IE=edge,chrome=1" /> 
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>
<?php
    session_start();
    echo "<p>W.itaj " . $_SESSION['user'] . "!<br>";
    echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
    echo "| <b>Kamień</b>: ".$_SESSION['kamien'];
    echo "| <b>Zboże</b>: ".$_SESSION['zboze']."<p>";

    echo "<p><b>E-mail</b>: ".$_SESSION['email'];
    echo "|<b>Ilość dni premium</b>: ".$_SESSION['dnipremium']."</p>";
?>
    
</body>

</html>  