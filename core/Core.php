<?php

session_set_cookie_params(3600, '/', 'localhost');
session_start();

// Config
$BASE_URL = 'localhost';
$ROOT_URL = '/public/';

// Database
require_once dirname(__DIR__) . '/core/database/Database.php';

// Controllers
require_once dirname(__DIR__) . '/app/controller/UserController.php';

// Models
require_once dirname(__DIR__) . '/app/model/UserModel.php';

// Utils
require_once dirname(__DIR__) . '/core/utils/FileUtils.php';
require_once dirname(__DIR__) . '/core/utils/RedirectUtils.php';
require_once dirname(__DIR__) . '/core/utils/StringUtils.php';
require_once dirname(__DIR__) . '/core/utils/UserUtils.php';

// Objects
$User = new UserController();

// Utility
$redirectUtils = new RedirectUtils();
$fileUtils = new FileUtils();
$stringUtils = new StringUtils();
$userUtils = new UserUtils();
