<?php
require_once "../config/dev.php";
require_once "../config/Autoloader.php";
use App\src\Controller\HomeController;
use App\config\Autoloader;
Autoloader::register();

if(isset($_GET['route'])) {
    if ($_GET['route'] === 'single') {
        $appController = new HomeController();
        $appController->single();
    }
}else{
    $appController = new HomeController();
    $appController->home();
}
