<?php
/**
 * Created by PhpStorm.
 * User: Nee
 * Date: 1-11-2017
 * Time: 13:07
 */


require "pdo.php";

$statement = $pdo->prepare("select * from pretpark_attractie where id = ".$_GET["id"]);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
?>


<form action="index.php" method="post">
    <input type="text" name="name" value="<?= $result["name"] ?>">
    <select name="type" >
        <option <?= ($result["type"] == "Achtbaan")? "selected" : "" ?>>Achtbaan</option>
        <option <?= ($result["type"] == "Reuzenrad")? "selected" : "" ?>>Reuzenrad</option>
        <option <?= ($result["type"] == "Waterbaan")? "selected" : "" ?>>Waterbaan</option>
    </select>
    <input type="submit" name="submit_edit" value="OK">
    <input type="hidden" name="id" value="<?= $result["id"] ?>">
</form>
