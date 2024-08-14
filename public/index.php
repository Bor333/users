<?php
include dirname(__DIR__) . '/engine/config.php';

$db = getDb();
$usersResult = getAllUsers($db);
$params = ['usersResult' => $usersResult];
echo render('index', $params);



