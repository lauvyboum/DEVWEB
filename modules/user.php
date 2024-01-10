<?php

// recupere tous les rôles de la BDD
function getAllRoles()
{
    global $db;
    $getrows = $db->getRows("SELECT * FROM roles");
    return $getrows;
}

// Ajout d'un utilisateur
function addUser($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id)
{
    try {
        global $db;
        $stmt = $db->insertRow(
            "INSERT INTO users (nom, prenom, username, sexe, email, phone, description, role_id) 
        VALUES(?,?,?,?,?,?,?,?)",
            array($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id)
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getAllUsers()
{
    global $db;
    $getrows = $db->getRows("SELECT * FROM users");
    return $getrows;
}

function getUserById($id)
{
    global $db;
    $getrow = $db->getRows("SELECT * FROM users WHERE id=?", array($id));
    return $getrow;
}

function getRoleById($id)
{
    global $db;
    $getrow = $db->getRows("SELECT * FROM roles WHERE id=?", array($id));
    return $getrow;
}

function updateUser($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id, $id)
{
    global $db;
    $db->updateRow("UPDATE users SET nom=?, prenom=?, username=?, sexe=?, email=?, phone=?, description=?, role_id=? WHERE id=?", array($nom, $prenom, $username, $sexe, $email, $tel, $description, $role_id, $id));
}

function deleteUser($id)
{
    global $db;
    $db->deleteRow("DELETE FROM users WHERE id=?", array($id));
}

function getUserByEmailAndPassword($email, $password)
{
    global $db;
    $getrows = $db->getRows("SELECT * FROM users WHERE email=? AND password=?", array($email, $password));
    return $getrows;
}

function searchUser($mot)
{
    global $db;
    $getrows = $db->getRows("SELECT * FROM users WHERE nom like '%$mot%' OR email like '%$mot%' OR prenom like '%$mot%' OR username like '%$mot%' OR phone like '%$mot%'");
    return $getrows;
}
