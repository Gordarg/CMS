<?php
/* TODO: Remove me */ $parent = realpath(dirname(__FILE__) . '/..');
require_once ($parent . '/core/authentication.php');
$auth = new auth();
$UserId = $auth->login();
if ($UserId == null)
        return;
if ($row['Language'] == $_COOKIE['LANG'])
{
        echo '<a href="post.php?lang=' . $row['Language'] . '&id=' . $row['MasterID'] . '">' . $functionalitiesInstance->label("ویرایش") . '</a>';
}
else{
        echo '<a href="post.php?lang=' . $_COOKIE['LANG'] . '&id=' . $row['MasterID'] . '">' . $functionalitiesInstance->label("ویرایش فارسی") . '</a>';
}