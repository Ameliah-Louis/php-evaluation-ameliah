<?php

require_once 'layout/header.php';
require_once 'functions/db.php';
require_once 'classes/User.php';

// echo 'test getDbConnection <br>';
// $testpdoconnect = getDbConnection();
// session_start();
// var_dump($_SESSION);
if (isset($_SESSION['user_name'])) {
    $welcomeMessage = "Bienvenue, " . $_SESSION['user_name'];
  } else {
    // var_dump($_SESSION);
$welcomeMessage = "Bienvenue, veuillez choisir un utilisateur.";
}  ?>
<h1><?php echo $welcomeMessage; ?></h1>

<?php 
    try {
      $Users = getUsers ();
      // echo "Users récupérés <br>";
    } catch (PDOException $e) {
      echo "Erreur récup TestUser <br>";
      var_dump($e);
      exit;
    }
    // echo "Users récupérés dans Users <br>";
    // var_dump($Users);
    // var dump de controle car je ne trouvais pas ou mes users se "perdaient" en chemin.
    ?>

<?php 
// echo "\$Users avant le selecteur try catch <br>";
// var_dump($Users);
// var dump de controle car je ne trouvais pas ou mes users se "perdaient" en chemin.
?>
<form action="auth.php" method="post">
  <div>
    <label for="user_name">Utilisateur :</label>
    <select name="user_name">
<?php echo '<option value="">Choisissez un utilisateur</option>';
foreach ($Users as $User) {
require 'templates/user_selection.php';
} echo '</select>';
// var_dump ($User);
require_once 'login.php'
?>

<!-- require_once 'templates/user.php';
}
?> 
Le Require Template ne fonctionne pas, (à cause du foreach?) donc j'ai mis dans l'index
-->



<?php require_once 'layout/footer.php'; ?>
