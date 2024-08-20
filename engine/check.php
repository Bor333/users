<?php
function check($db, $input)
{
    return strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $input)));
}