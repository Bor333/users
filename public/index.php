<?php
include dirname(__DIR__) . '/engine/config.php';
$db = getDb();
$params = [];
$data = [];
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $page = 'index';
        $usersResult = getAllUsers($db);
        $params = ['usersResult' => $usersResult];
        break;
    case '/add':
        $page = 'add';
        break;
    case '/save':
        $data['id'] = $_POST['id'];
        $data['first_name'] = $_POST['first_name'];
        $data['last_name'] = $_POST['last_name'];
        $data['gender'] = $_POST['gender'];
        $data['birth_date'] = $_POST['birth_date'];
        saveUser($db, $data);
        header('Location: /');
        break;
    case '/delete':
        $id = $_POST['id'];
        deleteUser($db, $id);
        header('Location: /');
        break;
    case '/update':
        $params['id'] = $_POST['id'];
        $params['first_name'] = $_POST['first_name'];
        $params['last_name'] = $_POST['last_name'];
        $params['gender'] = $_POST['gender'];
        $params['birth_date'] = $_POST['birth_date'];
        $page = 'update';
        break;
}

echo render($page, $params);