<?php

session_start();

if (!empty($_SESSION['user'])) {
    session_destroy();
    header("Location: /");
} else {
    header("Location: /auth/login?error=204");
}
