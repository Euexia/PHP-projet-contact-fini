

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="contact.css">


  <title>Contactez moi !</title>
</head>

<body>
  <!----------------------------------------------------------------------
                   NAVBAR
------------------------------------------------------------------------>
  <header id="header">
    <nav class="navbar navbar-expand-lg shadow-lg mb-4 bg-light fixed-top">
      <div class="container-fluid">
        <a class="nav-link text-dark fw-bold fs-4" style="margin-right: 10px; margin-left: 10px" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">A propos</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="portfolio.php">Portfolio</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="contact.php">Contact</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">CV</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!----------------------------------------------------------------------
                   NAVBAR END
------------------------------------------------------------------------>





  <!----------------------------------------------------------------------
                     FORMULAIRE
------------------------------------------------------------------------>


  <div class="office">

    <form id="contactForm" class="contact-form js-contact-form has--loader" method="post" data-js-contactform="">

      <h2> <strong> Contactez Nous</strong> </h2>
      <p>Utilisez le formulaire ci-dessous pour nous contacter ou envoyez-nous un e-mail à lucie.quintana04@gmail.com.</p>

      <div id="container">
        <div class="underline">
        </div>
        <div class="icon_wrapper">
        </div>
        <form action="#" method="post" id="contact_form">

          <div class="name">
            <label for="name"></label>
            <input type="text" placeholder="Nom" name="nom" id="name_input" required>
          </div>

          <div class="email">
            <label for="email"></label>
            <input type="email" placeholder="Email" name="email" id="email_input" required>
          </div>

          <div class="telephone">
            <label for="name"></label>
            <input type="text" placeholder="Telephone" name="telephone" id="telephone_input" required>
          </div>

          <div class="message">
            <label for="message"></label>
            <textarea name="message" placeholder="Ecrivez votre message" id="message_input" cols="30" rows="5" required></textarea>
          </div>

          <div class="submit">
            <input type="submit" value="Send Message" id="form_button" />
          </div>
        </form>

        <!----------------------------------------------------------------------
                     FORMULAIRE END
------------------------------------------------------------------------>






        <!----------------------------------------------------------------------
                        ADMIN
------------------------------------------------------------------------>



        <a href="loginadmin.php" target="Error" > ADMIN</a>    <!-- redirige vers la page de login  -->



        <!----------------------------------------------------------------------
                        ADMIN END 
------------------------------------------------------------------------>












        <!----------------------------------------------------------------------
                        MEDIA
------------------------------------------------------------------------>

        <footer class="connect-footer">
          <div class="column newsletter">

<!-- Restez informé -->
            <h4 class="tx--body-lead label">Restez informé</h4>
            <div class="signup-field">
              <form method="post" target="_blank">
                <p><input type="text" id="mail" required="" name="EMAIL" placeholder="EMAIL" class="subscribe-field">
                  <button type="submit" class="subscribe-btn"></button><br>
                </p>
              </form>
              <svg class="signup-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
            </div>
          </div>

<!-- Media -->
          <div class="column">
            <h4 class="tx--body-lead label">Media</h4>
            <p>Lucie Quintana<br>
              lucie.quintana@gmail.com<br>
              0000000000</p>
          </div>
          
<!-- Reseaux sociaux  -->
          <div class="column social">
            <h4 class="tx--body-lead label">Suivez moi !</h4>
            <li>
              <a class="no-barba tx--caption first" href="#" title="Facebook" target="Error">Facebook</a>
            </li>

            <li>
              <a class="no-barba tx--caption" href="#" title="Twitter" target="Error">Twitter</a>
            </li>

            <li>
              <a class="no-barba tx--caption" href="#" title="Instagram" target="Error">Instagram</a>
            </li>

            <li>
              <a class="no-barba tx--caption" href="#" title="Linkedin" target="Error">Linkedin</a>
            </li>

          </div>
        </footer>
      </div>
  </div>

<!----------------------------------------------------------------------
                        MEDIA END
------------------------------------------------------------------------>








<!----------------------------------------------------------------------
                        SEND DATA
------------------------------------------------------------------------>
 
 <!-- Connexion a la base de données l200, transmission des données php l202-5, insertion des données dans la data base l206  -->
 <?php
  $pdo = new PDO('mysql:host=localhost;dbname=tableur', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));  
  if ($_POST) {
    echo $_POST['nom'];
    echo $_POST['email'];                
    echo $_POST['telephone'];   
    echo $_POST['message'];
    $pdo->exec("INSERT INTO info (nom, email, telephone, message) VALUES ('$_POST[nom]', '$_POST[email]', '$_POST[telephone]', '$_POST[message]')");
  }
  ?>

  <!----------------------------------------------------------------------
                        SEND DATA END 
------------------------------------------------------------------------>


</body>
</html>