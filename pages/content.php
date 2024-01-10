<?php

$p = isset($_GET['j']) ? $_GET['j'] : "main";

switch ($p) {
    case "main":
        include("main.php");
        break;
    case "user":
        include("./views/user/index.php");
        break;
    case "activite":
        include("./views/activite/index.php");
        break;
    default:
        echo ("Page inexistante");
        break;
}
