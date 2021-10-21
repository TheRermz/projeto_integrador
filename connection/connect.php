<?php
# DB INFO FOR CONNECTION
$server = 'localhost';
$user = 'root';
$passwd = '';
$db = 'hellmasreview';

$con = mysqli_connect($server, $user, $passwd, $db);

if (mysqli_connect_errno()) {
    die('Failed to connect: ' . mysqli_connect_error());
}
