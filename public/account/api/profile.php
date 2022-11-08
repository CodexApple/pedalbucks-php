<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['uuid']) && $profileDetails = $profile->getData($_GET['uuid'])) {
            echo json_encode(
                $profileDetails,
                JSON_PRETTY_PRINT
            );
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
    case "POST":
        if ($profile->saveData(
            $response->uuid,
            $response->firstname,
            $response->lastname,
            $response->cellphone,
            $response->address,
            $response->birthday,
            $response->type,
            $response->distance,
            $response->height,
            $response->weight,
            $response->calories
        )) {
            if($dataProfile = $profile->getData($response->uuid)) {
                echo json_encode(
                    array(
                        "status" => "Success",
                        "message" => "Profile registered successfully",
                        "profile" => $dataProfile
                    ),
                    JSON_PRETTY_PRINT
                );
            }
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
