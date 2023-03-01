<?php
function redirect($uri){?>
	<script type="text/javascript">
	<!--
	document.location.href="<?php echo $uri; ?>";
	-->
	</script>
<?php die;}

function db_iconnect($db){
	$user_name="webuser";
	$password="bsk6ZPrk0aSihjuv";
	$hostname="localhost";
	$dblink=new mysqli($hostname, $user_name, $password, $db);
	return $dblink;
}
?>