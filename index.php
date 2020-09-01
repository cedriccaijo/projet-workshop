  <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./sass/index.css">
    </head>
    <style>
         ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: black;
            opacity: 1;
            /* Firefox */
        }
        
         :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: black;
        }
        
         ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: black;
        }
        
        {
            color: white;
        }
        
        .box {
            width: 550px;
            padding: 40px;
            position: absolute;
            top: 56%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 15px;
            padding-top: 15vh;
        }
        .box li a {
           color : white;
           font-size: 25px;
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .box input[type="text"],
        .box input[type="Email"] {
            border: 0;
            background: rgba(128, 128, 128, 0.80);
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid black;
            padding: 14px 10px;
            width: 260px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        
        .box input[type="text"]:focus,
        .box input[type="Email"]:focus {
            width: 320px;
            border-color: white;
        }
        
        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: rgba(128, 128, 128, 0.80);
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid black;
            padding: 14px 10px;
            width: 260px;
            outline: #D3D3D3;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        
        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 320px;
            border-color: white;
        }
        
        .box input[type="text"],
        .box input[type="password2"] {
            border: 0;
            background: rgba(128, 128, 128, 0.80);
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid black;
            padding: 14px 10px;
            width: 260px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        
        .box input[type="text"]:focus,
        .box input[type="password2"]:focus {
            width: 320px;
            border-color: white;
        }
        
        .box input[type="submit"] {
            border: 0;
            background: rgba(128, 128, 128, 0.80);
            display: block;
            margin: 20px auto;
            margin-left: 5px;
            margin-right: 5px;
            border: 2px solid black;
            padding: 14px 40px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            display: inline-block;
            width: 160px;
        }
        
        .box input[type="submit"]::placeholder {
            text-align: center;
        }
        
        .box input[type="submit"]:hover {
            background: rgba(128, 128, 128, 0.80);
            color: #E8E8E8;
            border: 2px solid #E8E8E8;
        }
    </style>

    <body>
        <?php include("Navbar2.php");?>
        <section id="connexion">
            <form class='box' action="inscris.php" method="POST">
                <h1 style = "margin-left:10px;"> Inscription </h1>
                <input type="Text" name="Nom" placeholder="Votre nom">
                <input type="Text" name="Prenom" placeholder="Votre prénom">
                <input type="Email" name="Email" placeholder="Email">
                <input type="Password" name="Password" placeholder="Mot de passe">
                <input type="Password" name="Password2" placeholder="Confirmez votre mot de passe">
                <input type="submit" name="Inscription" value="Je m'inscris">
            <?php 

            if(isset($_GET['e']))
            {
                ?>
                <p id ='error'>
                    <?php switch ($_GET['e']) {
                        case 1: 
                            echo 'Les mots de passses ne sont pas identiques.';
                            break;
                        
                        case 2:
                           echo 'Le mot de passe est trop court.';
                            break;
                        case 3: 
                            echo 'Les champs ne sont pas remplies.';
                            break;
                        case 4:
                            echo 'Le mail choisis est déjà utiliser.'; 
                            break;       
                    } ?>
                    </p><?php
            }

            ?>
            </form>
        </section>
    </body>

    </html>