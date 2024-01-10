<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/avatar1.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>
                            <?php echo $_SESSION['username'];
                            ?><br><small>
                                <?php
                                switch ($_SESSION['role_id']) {
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
                                ?></small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="active"><a href="index.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span>
                    <p>Dashboard</p>
                </a></li>
            <li>
                <a href="test.php" class="waves-effect waves-button">
                    <span class="menu-icon fa fa-code"></span>
                    <p>Code PHP</p>
                </a>
            </li>

            <li><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span>
                    <p>Compte</p>
                </a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-users"></span>
                    <p>Utilisateurs</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="./?j=user">Ajout</a></li>
                    <li><a href="./?j=user&u=list">Liste</a></li>
                    <li><a href="#">Rôle</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span>
                    <p>Activité</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="./?j=activite">Ajout</a></li>
                    <li><a href="./?j=activite&a=list">Liste</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span>
                    <p>Réalisation</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Ajout</a></li>
                    <li><a href="#">Liste</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-log-in"></span>
                    <p>Partenaire</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Ajout</a></li>
                    <li><a href="#">Liste</a></li>
                </ul>
            </li>
            <li>
                <a href="./site/" target="_blank" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-globe"></span>
                    <p>Site web</p>
                </a>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->