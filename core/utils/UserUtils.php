<?php

class UserUtils
{
    public function uploadImage($array)
    {
        $location = $_SERVER["DOCUMENT_ROOT"] . "/public/account/uploads/" . $_SESSION['user']->username;
        $fileName = $array["name"];
        $fileTemp = $array["tmp_name"];
        $fileSize = $array["size"];
        $newFileName = $_SESSION['user']->username . "_" . $fileName;

        if (!is_dir($location)) {
            mkdir($location);
            if (move_uploaded_file($fileTemp, $location . "/" . $newFileName)) {
                return "/account/uploads/" . $newFileName;
            }
        }

        if (move_uploaded_file($fileTemp, $location . "/" . $newFileName)) {
            return "/account/uploads/" . $newFileName;
        }
    }
}
