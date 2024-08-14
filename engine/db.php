<?php
function getDb()
{
    static $db = '';
    if (empty($db)) {
        $db = mysqli_connect('users',  'sibers', 'l71oH/]!xuJHEU1i', 'sibers');
    }
    return $db;
}


