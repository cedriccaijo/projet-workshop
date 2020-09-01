<?php include ("Navbar.php");

session_start();
if (!isset($_SESSION['id'])) header('Location: seconnecter.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juventus Pas Officiel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./sass/index.css">
</head>

<body>
    <h1 style="padding-top: 5%; color: #a6adbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Réservez vos places </h1>
    <hr width="75%" color="black"> &nbsp;

    <div class="card-deck billet">
        <div class="card">
            <img src="image/Banner.png" class="card-img-top" alt="Banner.png">
            <div class="card-body">
                <h5 class="card-title">Juventus / Atalanta</h5>
                <p class="card-text">Samedi 14 decembre à 18h </p>
                <p class="card-text">
                    <class="text-muted">A partir de 30€</p>
            </div>
        </div>
        <div class="card">
            <img src="image/milan.jpg" class="card-img-top" alt="milan.jpg">
            <div class="card-body">
                <h5 class="card-title">Juventus / Milan</h5>
                <p class="card-text">Samedi 21 decembre à 21h</p>
                <p class="card-text">
                    <class="text-muted">A partir de 50€</p>
            </div>
        </div>
        <div class="card">
            <img src="image/inter3.jpg" class="card-img-top" alt="inter3.jpg">
            <div class="card-body">
                <h5 class="card-title">Juventus / Inter</h5>
                <p class="card-text">Samedi 28 decembre à 20h </p>
                <p class="card-text">
                    <class="text-muted">A partir de
                        <FONT size="4pt"> 70€</p>
            </div>
        </div>
    </div>
</body>

</html>