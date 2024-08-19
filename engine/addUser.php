<?php
function addUser($db, $data)
{
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $birth_date = $data['birth_date'];
    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `gender`, `birth_date`) VALUES ('{$first_name}','{$last_name}','{$gender}','{$birth_date}')";
    $usersResult = mysqli_query($db, $sql);
    return $usersResult;
}