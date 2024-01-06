<?php include('../route.php');

if (isset($_POST['btn_edit'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $role_id = $_POST['role_id'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    updateUser($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id, $id);

    header("location:../user_list.php?uid=" . $id);
}
