<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

switch ($_SERVER['REQUEST_METHOD']) {
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
