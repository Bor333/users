<?php

function getAllUsers($db)
{
    $sql = "SELECT * FROM `users`";
    $usersResult = mysqli_query($db, $sql);
    return $usersResult;
}



