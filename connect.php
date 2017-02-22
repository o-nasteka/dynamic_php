<?php
/**
 * Created by PhpStorm.
 * User: nasteka
 * Date: 2/17/17
 * Time: 10:49
 */


require_once 'login.php';
require_once 'error.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) // die($conn->connect_error);
    mysql_fatal_error($conn->connect_error);

?>