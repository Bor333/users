<?php
function deleteUser($db, $id)
{
    $sql = "DELETE FROM `users` WHERE id = {$id}";
    $usersResult = mysqli_query($db, $sql);
    return $usersResult;
}