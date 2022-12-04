<?php

class StringUtils
{

    function guidv4($data = null)
    {
        $data = $data ?? random_bytes(16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s-%s-%s-%s', str_split(bin2hex($data), 4));
    }

    function skuGen($data = null)
    {
        $data = $data ?? random_bytes(16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s', str_split(bin2hex($data), 4));
    }

    public function translateContent($id)
    {
        return ($id != 0 ? "Yes" : "No");
    }


    // $icon = error, warning, info, success
    public function setMessage($icon, $message)
    {
        echo '
        <script>
            $(document).ready(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showCloseButton: true,
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true
                });

                Toast.fire({
                    icon: "' . $icon . '",
                    title: "' . $message . '"
                });

            });
        </script>
        ';
    }

    public function translateTask($int)
    {
        return $int == 0 ? "NO" : ($int == 1 ? "YES" : null);
    }

    public function coloredTask($int)
    {
        return $int == 0 ? "danger" : ($int == 1 ? "success" : null);
    }

    public function getRequestMethod()
    {
        if (isset($_GET['field']) && isset($_GET['content'])) {
            return true;
        }
    }

    public function getActiveMenu($field)
    {
        if (!isset($_GET['field'])) {
            return "";
        } else {
            if ($field == 1) {
                return "menu-open";
            } elseif ($field == 2) {
                return "menu-open";
            }
        }
    }

    public function getActiveLink($field, $content)
    {
        if (!isset($_GET['field']) && !isset($_GET['content'])) {
            return "";
        } else {
            if ($field == "1" && $content == "syslogs") {
                return "active";
            } elseif ($field == "2" && $content == "advertisements") {
                return "active";
            } elseif ($field == "2" && $content == "features") {
                return "active";
            }
        }
    }
}
