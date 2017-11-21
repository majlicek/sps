<?php

/* Klient */

if (isset($_GET["action"]) && isset($_GET["id"]) && $_GET["action"] == "get_user")
{
$user_info = file_get_contents('http://localhost/api.php?action=get_user&id=' . $_GET["id"]);
$user_info = json_decode($user_info, true);

?>
<table>
    <tr>
        <td>Meno: </td><td> <?php echo $user_info["meno"] ?></td>
    </tr>
    <tr>
        <td>Priezvisko: </td><td> <?php echo $user_info["priezvisko"] ?></td>
    </tr>
    <tr>
        <td>Email: </td><td> <?php echo $user_info["email"] ?></td>
    </tr>
</table>
<a href="http://localhost/client.php?action=get_userlist" alt="user list">Return to the user list</a>
<?php
}
else
{
    $user_list = file_get_contents('http://localhost/api.php?action=get_user_list');
    $user_list = json_decode($user_list, true);
    ?>
    <ul>
        <?php foreach ($user_list as $user): ?>
            <li>
                <a href=<?php echo "http://localhost/client.php?action=get_user&id=" . $user["id"]  ?> alt=<?php echo "user_" . $user["id"] ?>><?php echo $user["meno"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
}

?>