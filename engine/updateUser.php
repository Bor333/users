<?php
function saveUser($db, $data)
{
    $id = $data['id'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $birth_date = $data['birth_date'];
    $sql = "UPDATE `users` SET `first_name`='{$first_name}',`last_name`='{$last_name}',`gender`='{$gender}',`birth_date`='{$birth_date}' WHERE id = {$id}";
    $usersResult = mysqli_query($db, $sql);
    return $usersResult;
}

function updateUser($data)
{
    $params = ['data' => $data];
    header('Location: /save');
}