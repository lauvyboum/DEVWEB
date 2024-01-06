<?php session_start();
if (isset($_SESSION['id'])) {
    header('location:index.php');
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php include("pages/head.php"); ?>
    </head>

    <body class="page-login">
        <div class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="#" class="logo-name text-lg text-center">CONNEXION</a>
                                <p class="text-center m-t-md">Bienvenue sur la page de connexion Yan Service.</p>
                                <form class="m-t-md" action="exe/connexion.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="you@domain.indication" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                                    </div>
                                    <button type="submit" name="btn_conx" class="btn btn-success btn-block">Se connecter</button>

                                </form>
                                <div style="margin-top: 250px;">
                                    <p class="no-s">2023 &copy; Yan Service developed by Lauvy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>

            <?php include("pages/js.php"); ?>

    </body>

    </html>
<?php } ?>