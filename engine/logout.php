<?php
function logout()
{
    setcookie("login", "", time() - 3600, "/");
    setcookie("pass", "", time() - 3600, "/");
}