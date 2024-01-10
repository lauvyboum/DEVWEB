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
                <a href="./?j=user&u=list"><span class="fa fa-arrow-left"> retour</span></a>
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