<?php
include("assets/php/functions.php");
echo '<!doctype html>';
echo '<!--ec2-44-201-196-59.compute-1.amazonaws.com/index.php-->';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
switch($_GET['page']){
	case "school":
		echo '<title>Kyle Anderson | School</title>';
		break;
	case "work":
		echo '<title>Kyle Anderson | Work</title>';
		break;
	case "contact":
		echo '<title>Kyle Anderson | Contact</title>';
		break;
	case "entries":
		echo '<title>Kyle Anderson | Contact Entries</title>';
		break;
	default:
		echo '<title>Kyle Anderson | Home</title>';
		break;
}
		echo '<link href="assets/css/bootstrap.css" rel="stylesheet">';
		echo '<script type="text/javascript" src="assets/js/contactValidate.js"></script>';
	echo '</head>';
	echo '<body>';
		echo '<div id="page-inner">';
			include("assets/php/navigation.php");
if(isset($_GET['page']) && $_GET['page']!=""){
	$page=$_GET['page'];
	switch($page){
		case "work":
			include("assets/php/work.php");
			break;
		case "school":
			include("assets/php/school.php");
			break;
		case "contact":
			include("assets/php/contact.php");
			break;
		case "entries":
			include("assets/php/entries.php");
			break;
		default:
			echo 'You\'re here';
			include("assets/php/home.php");
			break;
	}
}else{
	include("assets/php/home.php");
}
		echo '</div>';
	echo '</body>';
echo '</html>';
?>