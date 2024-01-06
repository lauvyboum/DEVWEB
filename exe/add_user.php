<?php
// include("../route.php");

if (isset($_POST['btn_add'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $role_id = $_POST['role_id'];
    $description = $_POST['description'];

    addUser($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id);

    // header("location:../user_add.php");

?>
    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4>Félicitation !</h4>
        <p>L'utilisateur <?php echo $username; ?> enregistré avec succès !!</p>
    </div>
<?php
    // affichage de l'alert
    // echo "<script>alert('Tous les champs sont obligatoire.');</script>";

    // Redirection vers une autre page apres un delai de 1 seconde
    // header("refresh:1;url=../user_add.php");
    // exit;
}
