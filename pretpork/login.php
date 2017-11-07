<?php
/**
 * Created by PhpStorm.
 * User: Nee
 * Date: 1-11-2017
 * Time: 12:05
 */

require "pdo.php";
?>
<form action="index.php" method="post">
    username: <input type="text" name="username">
    password: <input type="password" name="password">
    <input type="submit" name="submit_login">
</form>


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

            <?php if (isset($_SESSION["user_id"])) { ?>
                <td><a href='edit_attractie.php?id="<?=$attractie["id"]?>"'>Edit</a></td>
                <td><a href='index.php?delete&id="<?=$attractie["id"]?>"'>Delete</a></td>
            <?php } ?>
        </tr>


        <?php

    }
    ?>

</table>
