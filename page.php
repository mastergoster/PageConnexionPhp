<?php
session_start();
if(isset($_GET["deconnect"]) && $_GET["deconnect"]){
	unset($_SESSION["connect"]);
} 
$connect = $_SESSION["connect"];
if (empty($connect)){
	header("Location: http://localhost.demo/testconnection/");	
}
$username = $_SESSION['username'];


echo "bonjour {$username}<br />";
echo "super site";
?>
<a href="http://localhost.demo/testconnection/page.php?deconnect=true">déconnexion</a>