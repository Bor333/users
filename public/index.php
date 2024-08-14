<?php
include dirname(__DIR__) . '/engine/config.php';
$db = getDb();

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $page = 'index';
        $usersResult = getAllUsers($db);
        $params = ['usersResult' => $usersResult];
        break;
    case '/add':
        $page = 'add';
        addUser();
        break;
//    case '/save':
//        $page = 'save';
//        $usersResult = addUser($db);
//        $params = ['usersResult' => $usersResult];
//        break;
}

echo render($page, $params);