<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "updateBtn":
                if (!empty($response->uuid)) {
                    if ($user->updateData($response->uuid, $response->email, $response->password)) {
                        echo json_encode(
                            array(
                                "status" => "Success",
                                "message" => "User Information Updated!",
                                "email" => $response->email,
                                "password" => "Successfully changed Password!"
                            ),
                            JSON_PRETTY_PRINT
                        );
                    }
                }
                break;
        }

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
