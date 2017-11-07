<?php
/**
 * Created by PhpStorm.
 * User: Nee
 * Date: 1-11-2017
 * Time: 12:03
 */

session_start();

require "pdo.php";

if (isset($_GET["logout"])) {
    session_destroy();
    $_SESSION = [];
}

if (isset($_POST["submit_login"])) {
    $statement = $pdo->prepare("select * from pretpark_admin");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $user) {
        $user_found = false;
        if ($user ["username"] == $_POST ["username"] && password_verify($_POST["password"], $user["hashed_password"])) {
            $_SESSION["user_id"] = $user["id"];
            $user_found = true;
            break;
        }
    }
    if (!$user_found) {
        header("Location: login.php");
    }
}

if (isset($_POST["submit_edit"])) {
    $statement=$pdo->prepare("update pretpark_attractie set name = '".$_POST["name"]."', type = '".$_POST["type"]."' where id = ".$_POST["id"]);
    $statement->execute();
    header("Location: attracties-overzicht.php");
}

if (isset($_GET["delete"])) {
    $statement=$pdo->prepare("delete from pretpark_attractie where id = ".$_GET["id"]);
    $statement->execute();
    header("Location: attracties-overzicht.php");
}

if (isset($_POST["submit_new"])) {
    $statement=$pdo->prepare("insert into pretpark_attractie (name, type) VALUES ('".$_POST["name"]."', '".$_POST["type"]."')");
    $statement->execute();
    header("Location: attracties-overzicht.php");
}


if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}
else {
    header("Location: attracties-overzicht.php");
}


?>