<?php

$p = isset($_GET['a']) ? $_GET['a'] : "add";

switch ($p) {
    case "add":
        include("./views/tache/add.php");
        break;
    case "list":
        include("./views/tache/list.php");
        break;
    default:
        echo ("Page inexistante");
        break;
}
