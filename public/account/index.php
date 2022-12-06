<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/core/Core.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        if (isset($_POST['uploadTaskBtn'])) {
            if ($task->saveData()) {
                $log->saveData(0, "Created new Task", $_SESSION['user']->username . " created a new task, detailed link: pedalbucks.gq?taskid");
                header("Location: /account/?field=3&content=task&action=success");
            } else header("Location: /account/?field=3&content=task&action=failed");

            return;
        }

        if (isset($_POST['saveProduct'])) {
            if ($product->saveData()) {
                $log->saveData(0, "Added a new Product", $_SESSION['user']->username . " added a new product, detailed link: pedalbucks.gq?pid=");
                header("Location: /account/?field=4&content=product&action=success");
            } else header("Location: /account/?field=4&content=product&action=failed");
        }
}

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
            } elseif ($_GET['field'] == 4 && $_GET['content'] == 'product') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/product.php';
            } elseif ($_GET['field'] == 5 && $_GET['content'] == 'profile') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/profile.php';
            } elseif ($_GET['field'] == 5 && $_GET['content'] == 'user') {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/admin/user.php';
            } else {
                echo '<script>window.location="' . $NOT_FOUND . '";</script>';
            }
        }
        break;
    case 2:
        if (!isset($_GET['field']) && !isset($_GET['content'])) {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/ISponsor.php';
        } else {
        }
        break;
    case 3:
        if (!isset($_GET['field']) && !isset($_GET['content'])) {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/inject/IUser.php';
        } else {
        }
        break;
    default:
        break;
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/public/include/footer.php';
