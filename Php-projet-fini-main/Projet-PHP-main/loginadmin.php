

<?php
    session_start();
    $_SESSION['connected'] = FALSE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">

    <title>Login</title>
</head>
<body>
<h1>Connexion de l'administrateur</h1>


<!--------------------------------------------------------------------------
                    BOUTON CONNECTION
---------------------------------------------------------------------------->

<form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Pseudo" name="pseudo" id="pseudo_input" required>
    </div>

    <div class="mdp">
      <label for="mdp"></label>
      <input type="password" placeholder="Mot de passe" name="mdp" id="mdp_input" required>
    </div>

    <div class="subject">
      <label for="subject"></label>
    </div>
    <div class="submit">
      <input type="submit" value="Connexion" id="form_button" />
    </div>




</form>
</body>
</html>


<!--------------------------------------------------------------------------
                    LIEES MSQL-PHP
---------------------------------------------------------------------------->


<?php 
$pdo = new PDO('mysql:host=localhost;dbname=gtech group', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if ($_POST) {
    $sql = $pdo->query("SELECT * FROM admin");

    while($users=$sql->fetch(PDO::FETCH_ASSOC)){
        if ($users['pseudo'] == $_POST['pseudo'] && $users['mdp'] == $_POST['mdp']) {
            $_SESSION['connected'] = TRUE;
            header('Location: admin.php');
        }
    }
}
?>
