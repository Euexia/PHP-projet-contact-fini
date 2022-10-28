
<!--------------------------------------------------------------------------
                    CONNEXION database
---------------------------------------------------------------------------->

<?php
$username = "root";
$password = "root";
$database = 'tableur';
$servername = 'localhost:3306';
$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}
$sql = " SELECT * FROM info";
$result = $mysqli->query($sql);
$mysqli->close();
?>




<!--------------------------------------------------------------------------
                    DOCTYPE
---------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js%22%3E"
    </script>
     <link rel="stylesheet" href="admin.css">

    <title>Admin Page</title>

</head>



<body>
    
<!--------------------------------------------------------------------------
                    TITRE
---------------------------------------------------------------------------->
    <div class="header">
    <div class="waverota">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        <h1> <strong>Contact</strong> </h1>



<!--------------------------------------------------------------------------
                    TABLEAU
---------------------------------------------------------------------------->
        <div class="container">
            <table class="table table-hover table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> Nom </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Telephone </th>
                        <th scope="col"> Message </th>
                    </tr>
                </thead>



<!--------------------------------------------------------------------------
                    RECUPERATION DES DONNEES
---------------------------------------------------------------------------->
                <tr>
                    <?php
                    // BOUCLE JUSQU'À LA FIN DES DONNÉES
                    while ($rows = $result->FETCH_ASSOC()) {
                    ?>
                        <!-- RÉCUPÉRATION DES DONNÉES -->
                        <td><?php echo $rows['nom']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['telephone']; ?></td>
                        <td><?php echo $rows['message']; ?></td>
                </tr>
            <?php
                    }
            ?>

            </table>




<!--------------------------------------------------------------------------
                    STYLE WAVES
---------------------------------------------------------------------------->
            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="inner-header flex">
                <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
                    <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                </svg>
            </div>


</body>
</html>