<?php

$p = isset($_GET['j']) ? $_GET['j'] : "main";

switch ($p) {
    case "main":
        include("main.php");
        break;
    case "user":
        include("./views/user/index.php");
        break;
    case "tache":
        include("./views/tache/index.php");
        break;
    case "test":
        include("./test.php");
        break;
    default:
        echo ("Page inexistante");
        break;
}
