<?php
/* TODO: Remove me */ $parent = realpath(dirname(__FILE__) . '/..');
require_once ($parent . '/core/authentication.php');
$auth = new auth();
$UserId = $auth->login();
if ($UserId == null)
        return;
?>
<a href="post.php?lang=<?= $row['Language'] ?>&id=<?= $row['MasterID'] ?>"><?= $functionalitiesInstance->label("ویرایش"); ?></a>
<!--
TODO: Add Language Button
-->