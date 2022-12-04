<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['uuid']) && $redeemDetails = $redeem->getData($_GET['uuid'])) {

            $array = array();

            foreach ($redeem->getAllData() as $inventory => $data) {
                if ($data->user_uuid == $_GET['uuid']) {
                    $array[] = array(
                        "userUUID" => $data->user_uuid,
                        "productId" => $data->product_id,
                        "productName" => $product->getData($data->product_id)->name,
                        "productDescription" => $product->getData($data->product_id)->description,
                        "productCode" => $data->product_code,
                        "isUsed" => $data->is_used,
                    );
                }
            }

            echo json_encode(
                $array,
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
}
