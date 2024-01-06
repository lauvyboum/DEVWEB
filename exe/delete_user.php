<?php

if (isset($_POST['btn_delete'])) {

    $user_id = isset($_POST['id']) ? $_POST['id'] : "";

    deleteUser($user_id);

?>
    <div class="alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4>Félicitation !</h4>
        <p>L'utilisateur supprimé avec succès !!</p>
    </div>
<?php
}

// affichage de l'alert
//echo "<script>alert('Utilisateur supprimé avec succès.');</script>";

// Redirection vers une autre page apres un delai de 1 seconde
// header("refresh:1;url=../user_list.php");
// exit;
