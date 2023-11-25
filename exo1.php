<?php
$couleur = isset($_POST['couleur']) ? $_POST['couleur'] : '';

echo "Votre couleur est : ";
switch ($couleur) {
    case 'rouge':
        echo 'Rouge';
        break;
    case 'vert':
        echo 'Vert';
        break;
    case 'bleu':
        echo 'Bleu';
        break;
    case 'noir':
        echo 'Noir';
        break;
    default:
        echo 'erreur :)';
}
?>
