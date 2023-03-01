<?php
echo '<nav class="navbar navbar-inverse">';
	echo '<div class="container-fluid">';
		echo '<div class="navbar-header">';
			echo '<a class="navbar-brand" onclick="updateContent(\'home\')">Kyle Andeson</a>';
		echo '</div>';
		echo '<ul class="nav navbar-nav navbar-right">';
		echo '<li role="presentation" id="home" class="active"><a onclick="updateContent(\'home\')">Home</a></li>';
		echo '<li role="presentation" id="school"><a onclick="updateContent(\'school\')">Schoool</a></li>';
		echo '<li role="presentation" id="work"><a onclick="updateContent(\'work\')">Work</a></li>';
		echo '<li role="presentation" id="contact"><a onclick="updateContent(\'contact\')">Contact</a></li>';
		echo '</ul>';
	echo '</div>';
echo '</nav>';
?>
