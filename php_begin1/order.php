<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Podsumowanie zamówienia</title>
</head>

<body>

<?php
    $makrama_s = $_POST['makrama_s'];
    $makrama_m = $_POST['makrama_m'];
    $makrama_l = $_POST['makrama_l'];
    $suma = $makrama_s*29.99+$makrama_m*49.99+$makrama_l*89.99;

echo<<<END
    <h2>Podsumowanie zamowienia</h2>
    <table border="1" cellpadding="10" cellspacing = "0">
    <tr>
    <td>Makrama S (29.99 PLN/szt.)</td> <td>$makrama_s</td>
    </tr>
    <tr>
    <td> Makrama M (49.99 PLN/szt.)</td> <td>$makrama_m</td>
    </tr>
    <tr>
    <td>Makrama L (89.99 PLN/szt.)</td> <td>$makrama_l</td>
    </tr>
    <tr>
    <td>SUMA</td> <td>$suma PLN</td>
    </tr>
    </table>

    <br><a href="index.php">Powrót do strony głownej<a/>
END;
?>

</body>

</html>