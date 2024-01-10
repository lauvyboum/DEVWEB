<h1>Liste de recherche Utilisateur</h1>
<?php
$mot = isset($_POST['mot']) ? $_POST['mot'] : "";
$users = searchUser($mot);
if (!empty($users)) {
    foreach ($users as $key  => $value) {
        $user = $value;
?>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php
                                if ($user['photo'] === NULL) {
                                    if ($user['sexe'] == "M") {
                                ?>
                                        <img src="assets/images/av_homme.png" alt="" width="20" height="20">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="assets/images/av_femme.png" alt="" width="20" height="20">
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <img src="<?php echo $user['photo']; ?>" alt="" width="20" height="20">
                                <?php
                                }
                                ?>
                            </td>
                            <td><?php echo $user['prenom'] ?></td>
                            <td><?php echo $user['nom'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                            <td>
                                <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                <a href="user_show.php?id=<?php echo $user['id']; ?>" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                <a type="button" data-toggle="modal" data-target="#delete_user_<?php echo $user['id'] ?>" class=" btn btn-danger"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
<?php
    }
} else {
    echo "<h4 style='color:red'>Aucun utilisateur trouvé...</h4>";
}
?>