<?php
include('../route.php');

if (isset($_POST['btn_conx'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = getUserByEmailAndPassword($email, $password);

    if (!empty($users)) {

        foreach ($users as $value) {
            $user = $value;
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['sexe'] = $user['sexe'];
        $_SESSION['email'] = $user['email'];

        $_SESSION['phone'] = $user['phone'];
        $_SESSION['description'] = $user['description'];
        $_SESSION['role_id'] = $user['role_id'];

        if ($user['photo'] == NULL) {

            if ($user['sexe'] == "M") {
                $_SESSION['photo'] = "assets/images/av_homme";
            } else {
                $_SESSION['photo'] = "assets/images/av_femme";
            }
        } else {
            $_SESSION['photo'] = $user['photo'];
        }

        header("location:../index.php");
    } else {
        // affichage de l'alert
        echo "<script>alert('Utilisateur n\'existe pas, essayez à nouveau.');</script>";

        // Redirection vers une autre page apres un delai de 1 seconde
        header("refresh:1;url=../login.php");
        exit;
    }
}
