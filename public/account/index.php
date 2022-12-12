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

            return;
        }

        if (isset($_POST['updateProduct'])) {
            if ($product->updateData($userUtils->uploadImage($_FILES['file']))) {
                $log->saveData(0, "Updated a Product", $_SESSION['user']->username . " updated an existing product, detailed link: pedalbucks.gq?pid=");
                header("Location: /account/?field=4&content=product&action=successUpdate");
            } else header("Location: /account/?field=4&content=product&action=failedUpdate");

            return;
        }

        if (isset($_POST['updateProfile'])) {

            $uuid = $_POST['uuid'];
            $address = $_POST['address'];
            $telephone = $_POST['telephone'];
            $cellphone = $_POST['cellphone'];
            $type_choice = $_POST['choice'];
            $distance_goal = $_POST['distance'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $calories = $_POST['calories'];

            if ($profile->updateData($uuid, $address, $telephone, $cellphone, $type_choice, $distance_goal, $height, $weight, $calories)) {
                header("Location: /account/?field=5&content=profile&action=successUpdate");
            } else header("Location: /account/?field=4&content=product&action=failedUpdate");

            return;
        }

        if (isset($_POST['updateTask'])) {

            $tid = $_POST['uuid'];
            $name = $_POST['name'];
            $desc = $_POST['description'];
            $distance = $_POST['taskDistance'];
            $reward = $_POST['reward'];
            $challenge = $_POST['isChallenge'];

            if ($task->updateData($tid, $name, $desc, $distance, $reward, $challenge)) {
                header("Location: /account/?field=3&content=task&action=successUpdate");
            } else header("Location: account/?field=3&content=task&action=failedUpdate");

            return;
        }

        if (isset($_POST['updatePoints'])) {

            $uuid = $_POST['uuid'];
            $points = $_POST['points'];

            if ($wallet->updateData($uuid, $points)) {
                header("Location: /account/");
            } else header("Location: /account/");
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
