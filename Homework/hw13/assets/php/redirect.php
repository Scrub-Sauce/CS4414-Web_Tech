<?php
	function redirect($uri){
		echo '<script type="text/javascript">';
		echo '<!--';
		echo 'document.location.href="<?php echo $uri; ?>"';
		echo '-->';
		echo '</script>';
		die;
	}
?>