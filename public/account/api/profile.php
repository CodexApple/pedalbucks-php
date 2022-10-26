<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        if ($profile->saveData($response->uuid, $response->firstname, $response->lastname)) {
            echo json_encode(
                array(
                    "status" => "Success",
                    "message" => "Profile registered successfully",
                ),
                JSON_PRETTY_PRINT
            );
        } else {
            echo json_encode(
                array(
                    "status" => "Failed",
                    "message" => "Failed to register user profile"
                ),
                JSON_PRETTY_PRINT
            );
        }
        break;
    default:
        break;
}
