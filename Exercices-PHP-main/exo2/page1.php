<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon Profil</title>
</head>

<body>
    <p>Bonjour <?php echo $_SESSION['prenom']; ?> !<br />Tu es sur la page accueil de mon site. Veux tu aller sur une autre page ?</p>
</body>

</html>