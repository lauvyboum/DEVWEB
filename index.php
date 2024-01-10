<?php
include('route.php');

if (!isset($_SESSION['id'])) {
    header('location:login.php');
} else {
?>
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
                    <h3>Dashboard </h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <?php include("pages/content.php"); ?>
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
<?php } ?>