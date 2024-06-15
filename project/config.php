<?php
$db=mysqli_connect('localhost','msume','1234','berkeh');
if (!$db)
{
    echo mysqli_connect_errno();
}

ini_set('display_errors',1);
error_reporting(E_ALL);
?>