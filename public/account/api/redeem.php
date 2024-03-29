<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['uuid'])) {

            $array = array();

            foreach ($redeem->getAllData() as $inventory => $data) {
                if ($data->user_uuid == $_GET['uuid']) {
                    $array[] = array(
                        "userUUID" => $data->user_uuid,
                        "id" => $data->product_id,
                        "name" => $product->getData($data->product_id)->name,
                        "description" => $product->getData($data->product_id)->description,
                        "image" => $product->getData($data->product_id)->image,
                        "voucherCode" => $data->product_code,
                        "isUsed" => $data->is_used,
                    );
                }
            }

            echo json_encode(
                $array,
                JSON_PRETTY_PRINT
            );
        }

        /**
         * Code is not working DO NOT USE PUID GETTER
         */

        elseif ((isset($_GET['puid']))) {
            foreach ($redeem->getAllData() as $key => $data) {
                if ($data->user_uuid = $_GET['puid']) {
                    echo json_encode(
                        $redeem->getData($data->user_uuid, $data->product_code),
                        JSON_PRETTY_PRINT
                    );
                }
            }
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
}
