<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/core/Core.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/public/include/header.php';

if ($_SESSION['user']->usertype == 1) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/IAdmin.php';
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/public/include/footer.php';
