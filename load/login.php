<?php

if(!isset($_POST['usn'],$_POST['psw'])){
	echo '1Invalid input, please try again.';
	exit;
}

require_once('../includes/user/login.class.php');
require_once('../includes/conn/conn.php');
require_once('../includes/conn/site.php');

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_ip = $_SERVER["REMOTE_ADDR"];

$username = $_POST['usn'];
$password = $_POST['psw'];

$login = new Login($username,$password,$mm_db,$mm_site['salt'],$user_ip,$user_agent);

?>