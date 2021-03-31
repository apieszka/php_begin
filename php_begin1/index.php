<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Vintage shop</title>
</head>

<body>
    <h1>Zamówienie online</h1>
    <form action="order.php" method="post"> 
        Makrama S (29.99 PLN/szt.):
        <input type="text" name="makrama_s"/> <!-- przycisk do wpisywania ilości sztuk zamówienia -->
        
        <br/><br/>
        
        Makrama M (49.99 PLN/szt.):
        <input type="text" name="makrama_m" /> <!-- przycisk do wpisywania ilości sztuk zamówienia -->
        
        <br/><br/>
        
        Makrama L (89.99 PLN/szt.):
        <input type="text" name="makrama_l"/> <!-- przycisk do wpisywania ilości sztuk zamówienia -->
        
        <br/><br/>

        <!-- przycisk do podsumowania zamówienia i przesłania go dalej -->
        <input type="submit" value="wyślij zamówienie"/> 
    </form>

</body>

</html>