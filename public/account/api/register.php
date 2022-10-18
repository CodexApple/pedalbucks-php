<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "registerBtn":
                if ($user->saveApiData($response->username, $response->email, $response->password)) {
                    echo json_encode(
                        array(
                            "status" => "Success",
                            "message" => "User registered successfully"
                        ),
                        JSON_PRETTY_PRINT
                    );
                } else {
                    echo json_encode(
                        array(
                            "status" => "Failed",
                            "message" => "Failed to register new user"
                        ),
                        JSON_PRETTY_PRINT
                    );
                }
                break;
        }
}
