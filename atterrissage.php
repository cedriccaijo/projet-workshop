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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/sass/font-awesome.min.css">
    <link rel="stylesheet" href="/sass/bootstrap.min.css">
</head>
<body>
    <main id="main1">
        <div class="container">
            <div class="row">
                <section class="carousel col-7">
                    <div id="carouselExampleIndicators" class="carousel slide asolue" data-ride="carousel" style="float: left">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/juv2projet.png" alt="First slide" width=66O height=370>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/juv1projet.jpg" alt="Second slide" width=66O height=370>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/carousel1projet.jpg" alt="Third slide" width=66O height=370>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
                <div class="col-5">
                    <div class="match">
                        <div class="container">
                            <div class="row">
                                <h2>Juventus x Palace x Adidas Football</h2>
                                <p>Très attendue, la fameuse collaboration entre Adidas et Palace pour la Juventus de Turin a été dévoilé hier soir à l’occasion de la réception du club de Genoa. La célèbre Vieille Dame possède l’aura particulière des plus
                                    grands clubs européens et une identité puissante imposée par ses célèbres bandes verticales blanches et noires.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main id="main2">
        <div class="container">
            <div class="row">
                <div class="col-4 info">
                    <h4>Cristiano Ronaldo</h4>
                    <ul>
                        <li>Taille : 1m84</li>
                        <li>Poids : 83 kg</li>
                        <li>Poste : Attaquant</li>
                        <li>Numéro : 7</li>
                        <li>Matchs joués : 12 (saison 2019-2020)</li>
                        <li>Buts marqués : 7 (saison 2019-2020)</li>
                        <li>Passes décisives : 1 (saison 2019-2020)</li>
                    </ul>
                </div>
                <div class="col-3 info">
                    <h4>Juventus</h4>
                    <p id ="Juventus">Le palmarès de la Juventus FC, le club le plus titré d'Italie, est l'un des plus impressionnants au monde et fait partie des dix équipes les plus prestigieuses et titrées de l'histoire du football mondial10.</p>
                </div>
                <div class="col-4 info">
                    <h4>Paulo Dybala</h4>
                    <ul>
                        <li>Taille : 1m80</li>
                        <li>Poids : 72 kg</li>
                        <li>Poste : Attaquant</li>
                        <li>Numéro : 10</li>
                        <li>Matchs joués : 13 (saison 2019-2020)</li>
                        <li>Buts marqués : 4 (saison 2019-2020)</li>
                        <li>Passes décisives : 1 (saison 2019-2020)</li>
                    </ul>

                </div>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</html>