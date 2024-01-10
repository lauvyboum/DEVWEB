<?php

$p = isset($_GET['a']) ? $_GET['a'] : "add";

switch ($p) {
    case "add":
        include("./views/activite/add.php");
        break;
    case "list":
        include("./views/activite/list.php");
        break;
    default:
        echo ("page inexistante");
        break;
}
