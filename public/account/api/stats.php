<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "statsBtn":
                if ($stat->saveData($response->uuid, $response->datetime, $response->duration, $response->speed, $response->distance, $response->calories)) {
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
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'all':
                    if (isset($_GET['uuid'])) {
                        if ($userStat = $stat->getData('all', $_GET['uuid'])) {
                            echo json_encode(
                                array(
                                    "status" => "success",
                                    "activityLogs" => $userStat
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                        else {
                            echo json_encode(
                                array(
                                    "status" => "failed",
                                    "message" => "Activity logs not found."
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                    }
                    break;
                case 'report':
                    if (isset($_GET['uuid'])) {
                        if ($userStat = $stat->getData('report', $_GET['uuid'])) {
                            echo json_encode(
                                array(
                                    "status" => "success",
                                    "activityLogs" => $userStat
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                        else {
                            echo json_encode(
                                array(
                                    "status" => "failed",
                                    "message" => "Activity logs not found."
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                    }
                    break;
                case 'records':
                    if(isset($_GET['uuid'])) {
                        if ($userStat = $stat->getData('records', $_GET['uuid'])) {
                            echo json_encode(
                                array(
                                    "status" => "success",
                                    "records" => $userStat
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                        else {
                            echo json_encode(
                                array(
                                    "status" => "failed",
                                    "message" => "Records not found."
                                ),
                                JSON_PRETTY_PRINT
                            );
                            return;
                        }
                    }
            }
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
