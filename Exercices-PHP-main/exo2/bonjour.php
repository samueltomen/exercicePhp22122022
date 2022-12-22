<?php if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['nickname'])) {
    echo 'Bonjour ' . '<strong>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '</strong>' . '!' . '</br>';
    echo 'Votre pseudo est ' . '<strong>' . $_POST['nickname'] . '</strong>' . '!';
} else {
    echo '<a href="index.php">Il faut renseigner un nom et un prénom !</a>';
}
?>