<script src="assets/js/jquery-3.5.1.js"></script>
<?php
include("assets/php/functions.php");
echo '<!doctype html>';
echo '<!--ec2-44-201-196-59.compute-1.amazonaws.com/hw16/index.php-->';
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
			echo '<div id="mainContent">';
			echo '</div>'; // mainContent
		echo '</div>'; // page-inner
	echo '</body>';
echo '</html>';
?>

<script>
function updateContent(page){
	$.ajax({
		type:'post',
		url:'https://ec2-44-201-196-59.compute-1.amazonaws.com/hw16/'+page+'.php',
		success:function(data){
			switch (page){
				case "home":
					document.getElementById("school").classList.remove("active");
					document.getElementById("work").classList.remove("active");
					document.getElementById("contact").classList.remove("active");
					document.getElementById("home").classList.add("active");
					break;
				case "school":
					document.getElementById("home").classList.remove("active");
					document.getElementById("work").classList.remove("active");
					document.getElementById("contact").classList.remove("active");
					document.getElementById("school").classList.add("active");
					break;
				case "work":
					document.getElementById("home").classList.remove("active");
					document.getElementById("school").classList.remove("active");
					document.getElementById("contact").classList.remove("active");
					document.getElementById("work").classList.add("active");
					break;
				case "contact":
					document.getElementById("home").classList.remove("active");
					document.getElementById("school").classList.remove("active");
					document.getElementById("work").classList.remove("active");
					document.getElementById("contact").classList.add("active");
					break;
				default:
					document.getElementById("school").classList.remove("active");
					document.getElementById("work").classList.remove("active");
					document.getElementById("contact").classList.remove("active");
					document.getElementById("home").classList.add("active");
					break;
			};
			$('#mainContent').html(data); // Show fetched data
		}
	});
};
</script>