<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['uuid']) && $userDetails = $user->getData($_GET['uuid'])) {
            echo json_encode(
                array(
                    "status" => "Success",
                    "uuid" => $userDetails->uuid,
                    "username" => $userDetails->username,
                    "email" => $userDetails->email,
                ),
                JSON_PRETTY_PRINT
            );
        } elseif (isset($_GET['datatable'])) {
            $array = array();
            foreach ($user->getAllData() as $user => $data) {
                $array[] = array(
                    "db_id" => $data->id,
                    "uuid" => strtoupper($data->uuid),
                    "username" => $data->username,
                    "email" => $data->email,
                    "password" => $data->password
                );
            }
            echo json_encode(array("data" => $array), JSON_PRETTY_PRINT);
        } else {
            echo json_encode(
                array(
                    "status" => "Error",
                    "message" => "Invalid UUID"
                ),
                JSON_PRETTY_PRINT
            );
        }
        break;

    default:
        echo json_encode(
            array(
                "status" => "Error",
                "message" => "Invalid action"
            ),
            JSON_PRETTY_PRINT
        );
        break;
}
