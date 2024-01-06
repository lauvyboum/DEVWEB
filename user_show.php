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
                <h3>Utilisateur</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Information</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="container">
                    <div class="row">
                        <?php

                        $user_id = isset($_GET['id']) ? $_GET['id'] : "";
                        $users = getUserById($user_id);

                        foreach ($users as $value) {
                            $user = $value;
                        }
                        ?>
                        <div class="col-md-4 text-center">
                            <img src="<?php
                                        if ($user['sexe'] == "M") {
                                            echo "assets/images/av_homme.png";
                                        } else {
                                            echo "assets/images/av_femme.png";
                                        }
                                        ?>" width="50%" height="150" alt="">
                            <br><br>
                            <h3>
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
                            </h3>
                        </div>
                        <div class="col-md-8">
                            <h3>Informations personnelles
                                <a href="user_list.php"><span class="fa fa-arrow-left"> retour</span></a>
                            </h3>
                            <hr>
                            <h3>Prénom et Nom : <?php echo $user['prenom'] . ' ' . $user['nom']; ?></h3>
                            <hr>
                            <h3>Email : <?php echo $user['email']; ?></h3>
                            <hr>
                            <h3>Téléphone : <?php echo $user['phone']; ?></h3>
                            <hr>
                            <h3>Description : <br> <?php echo $user['description'] ?></h3>
                        </div>
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