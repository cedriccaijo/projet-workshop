<?php include ("Navbar.php");?>
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
    <main id="shop1">
        <div class="row" style="margin: 0% 15%; padding-top: 10vh">
            <div class="col-6">
                <div class="row">
                    <div class="col-6 shirt">
                        <img src="image/maillot1.png" alt="">
                        <h4>Juventus x Palace</h4>
                        <p>180 €</p>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light active">
                                <a href="panier.php?action=ajout&amp;l=nomProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
                                </label>
                        </div>
                    </div>
                    <div class="col-6 shirt">
                        <img src="image/maillot2projet.png" alt="">
                        <h4>Juventus x Palace Veste</h4>
                        <p>100 €</p>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light active">
                                      <a href="panier.php?action=ajout&amp;l=nomProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
                                    </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6 shirt">
                        <img src="image/maillot4projet.png" alt="">
                        <h4>Juventus x Palace Tshirt</h4>
                        <p>40 €</p>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light active">
                                      <a href="panier.php?action=ajout&amp;l=nomProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
                                    </label>
                        </div>
                    </div>
                    <div class="col-6 shirt">
                        <img src="image/maillot3projet.png" alt="">
                        <h4>Juventus x Palace Maillot</h4>
                        <p>80 €</p>
                        <div class="btn-group-toggle valider" data-toggle="buttons">
                            <label class="btn btn-light active">
                                      <a href="panier.php?action=ajout&amp;l=nomProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
                                    </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>