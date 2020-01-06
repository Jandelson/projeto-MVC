<?php

function today()
{
    $now = date('d/m/Y');
    return $now;
}

function redirect($uri)
{
    header('Location: /' . $uri);
    exit;
}
