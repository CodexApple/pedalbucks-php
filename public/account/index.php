<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/core/Core.php';

if (empty($_SESSION['user'])) {
    header('Location: /auth/login?error=201');
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/public/include/header.php';

$field = isset($_GET["field"]) ? $_GET["field"] : null;
$content = isset($_POST["content"]) ? $_POST["content"] : null;
switch ($_SESSION['user']->usertype) {

    case 1:
        if (!isset($_GET['field']) && !isset($_GET['content'])) {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/IAdmin.php';
        } else {
            if ($_GET['field'] == 1 && $_GET['content'] == 'syslogs') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/syslogs.php';
            } elseif ($_GET['field'] == 2 && $_GET['content'] == 'advertisements') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/advertisements.php';
            } elseif ($_GET['field'] == 2 && $_GET['content'] == 'features') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/features.php';
            } elseif ($_GET['field'] == 3 && $_GET['content'] == 'economy') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/economy.php';
            } elseif ($_GET['field'] == 3 && $_GET['content'] == 'task') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/task.php';
            }
        }
        break;
    case 2:
        break;
    case 3:
        break;
    default:
        break;
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/public/include/footer.php';
