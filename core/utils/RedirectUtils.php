<?php

class RedirectUtils
{
    public function setBodyData($id)
    {
        if ($id == 1) {
            include $_SERVER['DOCUMENT_ROOT'] . '/public/include/game/genshin_inject.php';
        } elseif ($id == 2) {
            include $_SERVER['DOCUMENT_ROOT'] . '/public/include/game/honkai_inject.php';
        } elseif ($id == 3) {
            include $_SERVER['DOCUMENT_ROOT'] . '/public/include/game/priconne_inject.php';
        } elseif ($id == 4) {
            include $_SERVER['DOCUMENT_ROOT'] . '/public/include/game/rewitch_inject.php';
        } else {
            echo '<script> window.location.replace("localhost/auth/404"); </script>';
        }
    }
}
