<?php
echo '<nav class="navbar navbar-inverse">';
	echo '<div class="container-fluid">';
		echo '<div class="navbar-header">';
			echo '<a class="navbar-brand" href="..//index.php">Kyle Andeson</a>';
		echo '</div>';
		echo '<ul class="nav navbar-nav navbar-right">';
switch($_GET['page']){
	case "school":
		echo '<li><a href="../index.php">Home</a></li>';
		echo '<li class="active"><a href="../index.php?page=school">School</a></li>';
		echo '<li><a href="../index.php?page=work">Work</a></li>';
		echo '<li><a href="../index.php?page=contact">Contact</a></li>';
		break;
	case "work":
		echo '<li><a href="../index.php">Home</a></li>';
		echo '<li><a href="../index.php?page=school">School</a></li>';
		echo '<li class="active"><a href="../index.php?page=work">Work</a></li>';
		echo '<li><a href="../index.php?page=contact">Contact</a></li>';
		break;
	case "contact":
		echo '<li><a href="../index.php">Home</a></li>';
		echo '<li><a href="../index.php?page=school">School</a></li>';
		echo '<li><a href="../index.php?page=work">Work</a></li>';
		echo '<li class="active"><a href="../index.php?page=contact">Contact</a></li>';
		break;
	default:
		echo '<li class="active"><a href="../index.php">Home</a></li>';
		echo '<li><a href="../index.php?page=school">School</a></li>';
		echo '<li><a href="../index.php?page=work">Work</a></li>';
		echo '<li><a href="../index.php?page=contact">Contact</a></li>';
		break;
}
		echo '</ul>';
	echo '</div>';
echo '</nav>';
?>
