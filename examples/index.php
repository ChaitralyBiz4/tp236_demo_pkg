<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

use ChaitralyBiz4\tp236_demo_pkg\classHello;
use ChaitralyBiz4\tp236_demo_pkg\classWelcome;

$class_welcome_obj = new classWelcome("Pune");
$class_hello_obj = new classHello("Chaitraly");
//$city = $class_welcome_obj->getCity();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package example</title>
    <style>
      
    </style>
</head>
<body>
<?php
   echo $class_welcome_obj->getCity();
?>
</body>
</html>