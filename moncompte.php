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
    <section>
        <div class="banniere">
        </div>

        <div class="formulaire">
            <h1>Vos informations personnelles</h1>

            <fieldset>
                <form>
                    <p>
                        <label for="identifiant"> Votre Mail</label>
                        <input placeholder="jean@gmail.com" required="" type="email" name="identifiant" id="identifiant" autofocus>
                    </p>
                    <p>
                        <label for="confirmMail"> Confirmez Votre Mail</label>
                        <input required="" type="text" name="confirmMail" id="confirmMail">
                    </p>
                    <p>
                        <label for="mdp"> Entrez Mot de Passe</label>
                        <input required="" type="password" name="mdp" id="mdp">
                    </p>
                    <p>
                        <label for="confirmMmdp"> Confirmez Mot de passe</label>
                        <input required="" type="password" name="confirmmdp" id="confirmmdp">
                    </p>
                </form>
            </fieldset>
            <fieldset>
                <legend> Informations personnelles </legend>
                <form>

                    <p>
                        <label for="nom"> Nom</label>
                        <input placeholder="Jean" required="" type="text" name="nom" id="nom">
                    </p>
                    <p>
                        <label for="prenom"> Prenom</label>
                        <input placeholder="PAUL" required="" type="text" name="prenom" id="prenom">
                    </p>
                    <p>
                        <label for="CP"> Code Postal</label>
                        <input placeholder="75014" required="" type="text" name="CP" id="CP" maxlength="5">
                    </p>
                    <p>
                        <label for="Ville"> Ville</label>
                        <input placeholder="Paris" required="" type="text" name="Ville" id="Ville">
                    </p>
                    <p>
                        <label for="pays">Pays</label>
                        <select required="" name="pays" id="pays">
                        <option selected value="france">France</option>
                        <option value="Belgique">Belgique</option>
                        <option value="mc">Mon cul</option>
                        <option value="Espagne">Espagne</option>
                        <option value="BK">Burkina Faso</option>
                    </select>
                    </p>
                    <p>
                        <label for="Telephone">Telephone</label>
                        <input placeholder="06 45 89 31 20" required="" type="number" name="Telephone" id="Telephone" maxlength="10">
                    </p>
                    <action="welcome.php" method="post">
                        Name: <input type="text" name="name"><br> LastName: <input type="text" name="LastName"><br> password: <input type="text" name="password"><br> E-mail: <input type="text" name="email"><br>
                        <input type="submit">
                </form>
            </fieldset>

            <fieldset>
                <legend> Je souhaite recevoir </legend>
                <form>

                    <p><label for="pub">Recevoir pleins de pubs et me faire spam</label>
                        <input checked required="" type="checkbox" name="client" id="pub1"> </p>

                    <p><label for="pub">Recevoir une News Letters que je ne lirais jamais</label>
                        <input checked required="" type="checkbox" name="client" id="pub1"> </p>

                    <p><label for="pub"> Recevoir des offres priviligiés par mail </label>
                        <input checked required="" type="checkbox" name="client" id="pub1"> </p>


                </form>
            </fieldset>

            <div class="droite"> <a href="atterrissage.php" class="button">Envoyer</a> </div>

        </div>
    </section>
</body>