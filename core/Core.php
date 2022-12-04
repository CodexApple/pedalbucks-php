<?php

session_set_cookie_params(3600, '/', 'localhost');
session_start();

// Config
$BASE_URL = 'localhost';
$ROOT_URL = '/public/';

// Database
require_once dirname(__DIR__) . '/core/database/Database.php';

// Controllers
require_once dirname(__DIR__) . '/app/controller/system/AuthController.php';
require_once dirname(__DIR__) . '/app/controller/system/LogController.php';
require_once dirname(__DIR__) . '/app/controller/AcceptTaskController.php';
require_once dirname(__DIR__) . '/app/controller/EconomyController.php';
require_once dirname(__DIR__) . '/app/controller/ProductController.php';
require_once dirname(__DIR__) . '/app/controller/ProfileController.php';
require_once dirname(__DIR__) . '/app/controller/RedeemController.php';
require_once dirname(__DIR__) . '/app/controller/TaskController.php';
require_once dirname(__DIR__) . '/app/controller/UserController.php';
require_once dirname(__DIR__) . '/app/controller/UserStatsController.php';

// Models
require_once dirname(__DIR__) . '/app/model/system/LogModel.php';
require_once dirname(__DIR__) . '/app/model/AcceptTaskModel.php';
require_once dirname(__DIR__) . '/app/model/EconomyModel.php';
require_once dirname(__DIR__) . '/app/model/ProductModel.php';
require_once dirname(__DIR__) . '/app/model/ProfileModel.php';
require_once dirname(__DIR__) . '/app/model/RedeemModel.php';
require_once dirname(__DIR__) . '/app/model/UserModel.php';
require_once dirname(__DIR__) . '/app/model/UserStatsModel.php';
require_once dirname(__DIR__) . '/app/model/TaskModel.php';

// Utils
require_once dirname(__DIR__) . '/core/utils/FileUtils.php';
require_once dirname(__DIR__) . '/core/utils/RedirectUtils.php';
require_once dirname(__DIR__) . '/core/utils/StringUtils.php';
require_once dirname(__DIR__) . '/core/utils/UserUtils.php';

// Objects
$auth = new AuthController();
$log = new LogController();
$wallet = new EconomyController();
$user = new UserController();
$userTask = new AcceptTaskController();
$product = new ProductController();
$profile = new ProfileController();
$redeem = new RedeemController();
$stat = new UserStatsController();
$task = new TaskController();

// Utility
$redirectUtils = new RedirectUtils();
$fileUtils = new FileUtils();
$stringUtils = new StringUtils();
$userUtils = new UserUtils();
