<?php
    session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <!-- wykorzystanie najwyższej wersji strony dot. internet explorer -->
    <meta http-equic="X-UA_Compatible" content="IE=edge,chrome=1" /> 
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

    Tylko martwi ujrzeli koniec wojny - Platon <br/><br/>
    
    <!-- Formularz logowania -->
    <form action="zaloguj.php" method="post">
    
        Login:<br /> <input type="text" name="login"/> <br/>
        Hasło:<br /> <input type="password" name="haslo"/> <br/> <br/>
        <input type="submit" value="Zaloguj się"/>
    
    </form>
<?php
    if(isset($_SESSION['blad'])){
        
        echo $_SESSION['blad'];
    }
    
?>
</body>

</html> 