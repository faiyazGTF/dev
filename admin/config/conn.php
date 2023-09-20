


<?php
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

define('BASE_URL','http://localhost/dev/');
define('ADMIN_URL','http://localhost/dev/admin/');

define('ADMIN_ASSETS','http://localhost/dev/admin/uploads/');
define('LOGO','http://localhost/dev/assets/images/logo-white.png');
define('LOGO_FAV','http://localhost/dev/favicon.ico');


define('WEBSITE_URL',$actual_link);
define('PROJECT_NAME','DEV');


// $servername = "sg2nlmysql1plsk.secureserver.net:3306";
// $username = "dev_chaahathomes";
// $password = "Data2020##";
// $database = "admin_dev_chaahathomes";



$servername = "localhost";
$username = "root";
$password = "";
$database = "dev_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?>