<?php

    require_once "db_connect.php"; // require - generates a fatal error in the event of an error
                                   // include - causes the code to go on
                                   //once - causes it to attach a file only once!
                                
    
    $connect = @new mysqli($host, $db_user, $db_password, $db_name); //@ - silencing error reporting - own error control custom

    if ($connect->connect_errno!=0){//coonnect errno == 0 when the last try for connection with db ended with success 
        echo "Error: ".$connect->connect_errno; //error

    }
    else{

        $login=$_POST['login'];
        $haslo = $_POST['haslo'];

        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'"; //enquiry in " ", php variables in ' '
        $connect->close(); //close the connection when it was set on 
        
    }

?>


<!-- <!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/> -->
    <!-- wykorzystanie najwyższej wersji strony dot. internet explorer -->
    <!-- <meta http-equic="X-UA_Compatible" content="IE=edge,chrome=1" /> 
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

    
</body>

</html>   -->