<?php
/**
 * Created by PhpStorm.
 * User: Nee
 * Date: 1-11-2017
 * Time: 12:51
 */

require "pdo.php";
?>

<a href="index.php?logout">Log out</a><br>
<br>
new attractie
<form action="index.php" method="post">
    name: <input type="text" name="name">
    <select name="type">
        <option>Achtbaan</option>
        <option>Reuzenrad</option>
        <option>Waterbaan</option>
    </select>
    <input type="submit" name="submit_new">

</form>
<br>

<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
    </tr>
    <?php
    $statement = $pdo->prepare("select * from pretpark_attractie");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $attractie) {
        ?>
        <tr>
            <td><?= $attractie["name"] ?></td>
            <td><?= $attractie["type"] ?></td>
            <td><a href='edit_attractie.php?id="<?=$attractie["id"]?>"'>Edit</a></td>
            <td><a href='index.php?delete&id="<?=$attractie["id"]?>"'>Delete</a></td>
        </tr>


        <?php

    }
    ?>

</table>

