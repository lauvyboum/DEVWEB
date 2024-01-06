<?php include("route.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <?php include("pages/head.php"); ?>
</head>

<body class="page-header-fixed">
    <div class="overlay"></div>

    <?php include("pages/user_menu.php"); ?>
    <?php include("pages/research.php"); ?>

    <main class="page-content content-wrap">
        <?php include("pages/topbar.php"); ?>

        <?php include("pages/sidebar.php"); ?>

        <div class="page-inner">
            <div class="page-title">
                <h3>Datatables</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Datatables</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
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
                                                            <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                                            <a href="user_show.php?id=<?php echo $user['id']; ?>" class="btn btn-info"><span class="fa fa-eye"></span></a>
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
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">2023 &copy; Yan Service developed by Lauvy.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <div class="cd-overlay"></div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/pace-master/pace.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="assets/plugins/waves/waves.min.js"></script>
    <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
    <script src="assets/js/modern.min.js"></script>
    <script src="assets/js/pages/table-data.js"></script>

</body>

</html>