<?php

$p = isset($_GET['u']) ? $_GET['u'] : "add";

switch ($p) {
    case "add":
        include("./views/user/add.php");
        break;
    case "list":
        include("./views/user/list.php");
        break;
    case "edit":
        include("./views/user/edit.php");
        break;
    case "show":
        include("./views/user/show.php");
        break;
    case "search":
        include("./views/user/search.php");
        break;
    default:
        echo ("page inexistante");
        break;
}
