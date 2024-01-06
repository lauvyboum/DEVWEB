<?php include('route.php'); ?>

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
                <h3>Edition utilisateur</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Modifier</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-white">
                            <?php
                            // include("exe/edit_user.php");
                            ?>

                            <div class="panel-heading clearfix">
                                <h2 class="panel-title">Edition d'un Utilisateur</h2>
                            </div>
                            <div class="panel-body">
                                <?php

                                $id = isset($_GET['id']) ? $_GET['id'] : "";

                                $users = getUserById($id);

                                if (!empty($users)) {
                                    foreach ($users as $value) {
                                        $user = $value;
                                ?>
                                        <form action="exe/edit_user.php" method="post">
                                            <input type="text" hidden name="id" value="<?php echo $user['id'] ?>">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" name="nom" value="<?php echo $user['nom'] ?>" class="form-control" id="nom" placeholder="Entrer votre nom" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" value="<?php echo $user['prenom'] ?>" class="form-control" id="prenom" required placeholder="Entrer votre prénom">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">username</label>
                                                <input type="text" name="username" value="<?php echo $user['username'] ?>" class="form-control" required id="username" placeholder="Entrer votre username">
                                            </div>

                                            <div class="form-group">
                                                <label for="sexe">Sexe</label>
                                                <select name="sexe" class="form-control" id="sexe" required>
                                                    <option value="<?php echo $user['sexe'] ?>">
                                                        <?php
                                                        if ($user['sexe'] == "M") {
                                                            echo "Homme";
                                                        } else {
                                                            echo "Femme";
                                                        }
                                                        ?>
                                                    </option>
                                                    <option value="M">Homme</option>
                                                    <option value="F">Femme</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control" required id="email" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="tel">Téléphone</label>
                                                <input type="tel" name="tel" value="<?php echo $user['phone'] ?>" class="form-control" required id="tel" placeholder="Téléphone">
                                            </div>
                                            <div class="form-group">
                                                <label for="role_id">Rôle</label>
                                                <select name="role_id" class="form-control" id="role_id" required>
                                                    <option value="<?php echo $user['role_id']; ?>">
                                                        <?php
                                                        switch ($user['role_id']) {
                                                            case '1':
                                                                echo "Administrateur";
                                                                break;
                                                            case '2':
                                                                echo "Développeur";
                                                                break;
                                                            case '3':
                                                                echo "Web Designer";
                                                                break;
                                                            default:
                                                                echo "Le role n'existe";
                                                                break;
                                                        }
                                                        ?>
                                                    </option>
                                                    <?php

                                                    $roles = getAllRoles();
                                                    foreach ($roles as $key => $value) {
                                                        $role = $value;
                                                        if ($role['id'] != $user['role_id']) {
                                                    ?>
                                                            <option value="<?php echo $role['id']; ?>"><?php echo $role['nom']; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" name="description" id="desc" cols="30" rows="10" placeholder="Votre parcourir..."><?php echo $user['description']; ?></textarea>
                                            </div>

                                            <button type="submit" name="btn_edit" class="btn btn-primary pull-right">Modifier</button>
                                        </form>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
            <div class="page-footer">
                <p class="no-s">2023 &copy; Yan Service developed by Lauvy.</p>
            </div>
        </div>
    </main>
    <div class="cd-overlay"></div>
    <!-- Javascripts -->
    <?php include("pages/js.php"); ?>
</body>

</html>