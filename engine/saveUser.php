<?php
function saveUser($db)
{
    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `gender`, `birth_date`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]')";
    $usersResult = mysqli_query($db, $sql);
    return $usersResult;
}