<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-white">
            <?php include("exe/add_user.php"); ?>

            <div class="panel-heading clearfix">
                <h2 class="panel-title">Formulaire ajout Utilisateur</h2>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" required placeholder="Entrer votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control" required id="username" placeholder="Entrer votre username">
                    </div>

                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select name="sexe" class="form-control" id="sexe" required>
                            <option value="">Selectionner votre genre</option>
                            <option value="M">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" required id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input type="tel" name="tel" class="form-control" required id="tel" placeholder="Téléphone">
                    </div>
                    <div class="form-group">
                        <label for="role_id">Rôle</label>
                        <select name="role_id" class="form-control" id="role_id" required>
                            <option value="">Selectionner le rôle</option>
                            <?php
                            $roles = getAllRoles();
                            foreach ($roles as $key => $value) {
                                $role = $value;
                            ?>
                                <option value="<?php echo $role['id']; ?>"><?php echo $role['nom']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="description" id="desc" cols="30" rows="10" placeholder="Votre parcourir..."></textarea>
                    </div>

                    <button type="submit" name="btn_add" class="btn btn-primary pull-right">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    </div>
</div>