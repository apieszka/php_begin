<?php
    session_start(); //aby działało na innych stronach równiez trzeba dać session_start() na początku dokumentu

    require_once "db_connect.php"; // require - generates a fatal error in the event of an error
                                   // include - causes the code to go on
                                   //once - causes it to attach a file only once!
                                
    
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); //@ - silencing error reporting - own error control custom

    if ($polaczenie->connect_errno!=0){//coonnect errno == 0 when the last try for connection with db ended with success 
        echo "Error: ".$polaczenie->connect_errno; //error

    }
    else{
        $login=$_POST['login'];
        $haslo = $_POST['haslo'];

        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'"; //enquiry in " ", php variables in ' '

        if ($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $wiersz = $rezultat->fetch_assoc(); //przynieś dane i włóż je do tablicy asocjacyjnej - skojarzeniowo jako indeks posłużą nazwy z bazy
                //tablica ze słownym indeksem
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['drewno'] = $wiersz['drewno'];
                $_SESSION['kamien'] = $wiersz['kamien'];
                $_SESSION['zboze'] = $wiersz['zboze'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['dnipremium'] = $wiersz['dnipremium'];

                unset($_SESSION['blad']);
                $rezultat->free_result();//uwolnienie pamięci

                header('Location: gra.php'); //przekierowanie na inną stronę

            }
                else{
                    $_SESSION['blad'] = '<span style="color:red">Nieprawidlowy login lub hasło!</span>';
                    header('Location: index.php');
                }
            
        }
        $polaczenie->close(); //close the connection when it was set on 
        
    }

?>
