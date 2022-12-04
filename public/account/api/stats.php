<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "statsBtn":
                if ($stat->saveData($response->uuid, $response->datetime, $response->speed, $response->distance, $response->calories)) {
                    echo json_encode(
                        array(
                            "status" => "success",
                            "message" => "Statistics saved successfully"
                        ),
                        JSON_PRETTY_PRINT
                    );
                }
                break;
        }
        break;
    case "GET":
        if (isset($_GET['uuid']) && $userStat = $stat->getData($_GET['uuid'])) {
            echo json_encode(
                array(
                    "uuid" => $userStat->user_uuid,
                    "DateTime" => $userStat->datetime,
                    "DistanceTravelled" => $userStat->distance,
                    "CaloriesBurned" => $userStat->calories,
                    "AverageSpeed" => $userStat->speed
                ),
                JSON_PRETTY_PRINT
            );
            return;
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
