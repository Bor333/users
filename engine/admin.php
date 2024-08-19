<?php
function isAdmin($login, $pass)
{
    if ($login === 'admin' && $pass === 'WLc7%WOk') {
        setcookie('login', 'admin');
        setcookie('pass', 'WLc7%WOk');
        return true;
    }
}
