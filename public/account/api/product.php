<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);


switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "claimBtn":
                if (!empty($response->id)) {

                    $productDetails = $product->getData($response->id);
                    $userWallet = $wallet->getData($response->uuid);

                    if ($productDetails->current_claim >= $productDetails->max_claim) {
                        if (($userWallet->user_points >= $productDetails->price)) {
                            $newPoints = $userWallet->user_points - $productDetails->price;

                            $currentClaim = $productDetails->current_claim;
                            $newClaim = $currentClaim + 1;

                            $wallet->updateData($response->uuid, $newPoints);
                            $redeem->saveData($response->uuid, $response->id, $stringUtils->skuGen());
                            $product->updateData($response->uuid, $newClaim);

                            echo json_encode(
                                array(
                                    "status" => "success",
                                    "message" => "Product redeemed successfully"
                                ),
                                JSON_PRETTY_PRINT
                            );
                        } else {
                            echo json_encode(
                                array(
                                    "status" => "failed",
                                    "message" => "You do not have enough points to purchase this product"
                                ),
                                JSON_PRETTY_PRINT
                            );
                        }
                    } else {
                        echo json_encode(
                            array(
                                "status" => "failed",
                                "message" => "The product has already reached its max claim limit"
                            ),
                            JSON_PRETTY_PRINT
                        );
                    }
                }
        }
    case "GET":
        if ((!isset($_GET['prod_id']) || empty($_GET['prod_id'])) && $productData = $product->getAllData()) {
            echo json_encode(
                $productData,
                JSON_PRETTY_PRINT
            );
        }
        if (isset($_GET['prod_id']) && $productData = $product->getData($_GET['prod_id'])) {
            echo json_encode(
                $productData,
                JSON_PRETTY_PRINT
            );
            return;
        }
        if (isset($_GET['prod_id']) && isset($_GET['cat_id'])) {
            return;
        }

        if (isset($_GET['prod_id']) && isset($_GET['brand_id'])) {
            return;
        }

        if (isset($_GET['prod_id']) && isset($_GET['brand_id']) && isset($_GET['cat_id'])) {
            return;
        }
        break;
    default:
        break;
}
