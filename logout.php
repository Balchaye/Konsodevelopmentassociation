<?php
include("conf.php");
session_start();
if(!isset($_SESSION['log']['username'])){

header("location: php_home_out.php");
}

?>

<?php
include("conf.php");
$username = $_SESSION['log']['username'];
session_start();
session_destroy();
 header('location:php_home_out.php');
?>