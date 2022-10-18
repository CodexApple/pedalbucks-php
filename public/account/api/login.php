<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "loginBtn":
                if ($userDetails = $auth->authUser($response->uuid, $response->password)) {
                    echo json_encode(
                        array(
                            "status" => "Success",
                            "uuid" => $userDetails->uuid,
                            "username" => $userDetails->username,
                            "email" => $userDetails->email,
                        ),
                        JSON_PRETTY_PRINT
                    );
                } else {
                    echo json_encode(
                        array(
                            "status" => "Error",
                            "message" => "Invalid credentials"
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
