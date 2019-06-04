<?php
$db = mysqli_connect('localhost', 'root', '77', 'simple_ecommerce');

if (!$db) {
    echo mysqli_connect_error();
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', '13579');



/* execute multi query */
if ($mysqli->multi_query($sql)) {
    echo "success";
} else {
   echo "error";
}
