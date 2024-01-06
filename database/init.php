<?php
session_start();
include_once("configPDO.php");

// Connexion à la base de données

$db = new db("root", "", "localhost", "yanservice", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
