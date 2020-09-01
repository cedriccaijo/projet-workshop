<?php
if(count($_POST))
{   
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $conee = new PDO('mysql:host=localhost;dbname=workshop', 'root', 'root');
    
    $sql = "SELECT * FROM utilisateur where Email = '$email' and MotDePasse = '$password'";
    //echo $sql;
    $result = $conee->query($sql);
    
    $row = $result->fetch();
    if ($row['Email'] == $email && $row['MotDePasse'] == $password)
    {
        echo "'Bienvenue ' . $email .'!'";
        session_start();
        $_SESSION['id']=$row['id_user'];
        header('Location: atterrissage.php');
    }
    else
    {
        echo "Identifiant ou mot de passe incorrect.";
    }
}
?>
