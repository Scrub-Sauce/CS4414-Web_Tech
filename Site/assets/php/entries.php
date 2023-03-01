<script src="../js/jquery-3.5.1.js"></script>
<?php
	echo '<link href="../css/bootstrap.css" rel="stylesheet">';
	echo '<div class="container" id="container">';
	echo '<div class="panel panel-primary">';
	echo '<div class="panel-heading">Contact Form Entries</div>';
	echo '<div class="panel-body">';
	echo '<table>';
	echo '<table border="1">';
	echo '<tr>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Date of Birth</th>';
	echo '<th>Comment</th>';
	echo '</tr>';
	echo '<tbody id="content">';
?>
	<script>
		function refresh_div(){
			$.ajax({
				type: 'get',
				url: 'https://kyleandersontx.com/assets/php/query_entries.php',
				success: function(data){
					$('#content').html(data);
				}
			});
		};
		setInterval(function(){refresh_div();}, 500);
	//refresh_div();
	</script>
<?php
	echo '</tbody>';
	echo '</table>';
	echo '</div>'; // end panel-body
	echo '</div>'; // end panel-primary
	echo '</div>'; // end container
?>
