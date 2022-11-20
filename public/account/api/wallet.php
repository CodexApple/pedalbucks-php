<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "loginBtn":
                if ($dataWallet = $wallet->saveData($response->uuid)) {
                    echo json_encode(
                        array(
                            "status" => "Success",
                            "message" => "Wallet created successfully",
                        ),
                        JSON_PRETTY_PRINT
                    );
                }
                break;

            case "updateBtn":
                if ($dataWallet = $wallet->getData($response->uuid)) {
                    $currentWallet = $dataWallet->user_points;
                    $newWallet = $currentWallet + $response->user_points;

                    if ($wallet->updateData($response->uuid, $newWallet)) {
                        echo json_encode(
                            array(
                                "status" => "Success",
                                "message" => "Wallet updated successfully"
                            ),
                            JSON_PRETTY_PRINT
                        );
                    }
                }
                break;
        }
        break;

    case "GET":
        if (isset($_GET['uuid']) && $dataWallet = $wallet->getData($_GET['uuid'])) {
            echo json_encode(
                array(
                    "uuid" => $dataWallet->user_uuid,
                    "userPoints" => $dataWallet->user_points
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
