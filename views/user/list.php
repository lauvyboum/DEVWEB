<div class="row">
    <div class="col-md-12">
        <?php include('exe/delete_user.php'); ?>
        <div class="panel panel-white">
            <?php
            $uid = isset($_GET['uid']) ? $_GET['uid'] : '';
            if ($uid) {
            ?>
                <div class="alert alert-info fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>Félicitation !</h4>
                    <p>L'utilisateur modifié avec succès !!</p>
                </div>
            <?php
            }

            ?>
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Liste des utilisateurs</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="example" class="display table" cellspacing="0" width="100%">
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
                        <tfoot>
                            <tr>
                                <th>Photo</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $users = getAllUsers();

                            if (!empty($users)) {
                                foreach ($users as $key => $value) {
                                    $user = $value;
                            ?>
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
                                            <a href="./?j=user&u=edit&id=<?php echo $user['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                            <a href="./?j=user&u=show&id=<?php echo $user['id']; ?>" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                            <a type="button" data-toggle="modal" data-target="#delete_user_<?php echo $user['id'] ?>" class=" btn btn-danger"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Row -->
<?php
foreach ($users as $key => $value) {
    $user = $value;
?>
    <!-- The Modal -->
    <div class="modal fade" id="delete_user_<?php echo $user['id'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center"><span style="color:red;">SUPPRESSION</span></h4>
                </div>

                <!-- Modal body -->
                <form action="" method="post">
                    <div class="modal-body">
                        <h4 class="text-center" style="line-height: 1.5;">
                            Voulez - vous vraiment supprimer définitivement l'utilisateur <br>
                            <span style="color:red;"><?php echo $user['prenom'] . ' ' . $user['nom']; ?> ?</span>
                        </h4>
                        <input type="text" hidden name="id" value="<?php echo $user['id']; ?>">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" name="btn_delete" class="btn btn-danger">Oui</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php } ?>