<?php include 'assets/php/header.php';?>
<?php session_start();
	function redirect($uri){?>
		<script type="text/javascript">
		<!--
		document.location.href="<?php echo $uri; ?>";
		-->
		</script>
		<?php die;}
?>

<?php
echo '<!doctype html>';
echo '<!-- ec2-44-201-196-59.compute-1.amazonaws.com/hw12/contact.html -->';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Kyle Anderson | Contact</title>';
		echo '<link href="assets/css/bootstrap.css" rel="stylesheet">';
		echo '<script type="text/javascript" src="assets/js/contactValidate.js"></script>';
	echo '</head>';
	echo '<body>';
		echo '<div id="container" class="container">';
			echo '<div class="panel panel-primary">';
				echo '<div class="panel-heading">Contact</div>';
				echo '<div class="panel-body">';
					echo '<form method="post" action="">';	
							if(isset($_GET['err']) && strstr($_GET['err'],"fnameNull")){
								echo '<div class="form-group has-error">';
									echo '<label>First Name:</label>';
									echo '<input class="form-control " name="fname" type="text" id="fname" onBlur="valfName();" >';
									echo '<p class="help-block" id="fnameHelp">This field is required.</p>';
								echo '</div>';
							}else{
								echo '<div class="form-group">';
									echo '<label>First Name:</label>';
									if(isset($_SESSION['fName']) && $_SESSION['fName']!=""){
										echo '<input class="form-control " name="fname" type="text" id="fname" onBlur="valfName();" value="'.$_SESSION['fName'].'">';
									}else
										echo '<input class="form-control " name="fname" type="text" id="fname" onBlur="valfName();">';
									echo '<p class="help-block" id="fnameHelp"></p>';
								echo '</div>';
							}
							if(isset($_GET['err']) && strstr($_GET['err'],"lnameNull")){
								echo '<div class="form-group has-error">';
									echo '<label>Last Name:</label>';
									echo '<input class="form-control" name="lname" type="text" id="lname" onBlur="vallName();">';
									echo '<p class="help-block" id="lnameHelp">This field is required.</p>';
								echo '</div>';
							}else{
								echo '<div class="form-group">';
									echo '<label>First Name:</label>';
									if(isset($_SESSION['lName']) && $_SESSION['lName']!=""){
										echo '<input class="form-control" name="lname" type="text" id="lname" onBlur="vallName();" value="'.$_SESSION['lName'].'">';
									}else
										echo '<input class="form-control" name="lname" type="text" id="lname" onBlur="vallName();">';
									echo '<p class="help-block" id="lnameHelp"></p>';
								echo '</div>';
							}
							if(isset($_GET['err']) && strstr($_GET['err'],"emailNull")){
								echo '<div class="form-group has-error">';
									echo '<label>Email:</label>';
									echo '<input class="form-control" name="email" type="text" id="email" onBlur="valEmail();">';
									echo '<p class="help-block" id="emailHelp">This field is required.</p>';
								echo '</div>';
							}else{
								echo '<div class="form-group">';
									echo '<label>Email:</label>';
									if(isset($_SESSION['email']) && $_SESSION['email']!=""){
										echo '<input class="form-control" name="email" type="text" id="email" onBlur="valEmail();" value="'.$_SESSION['email'].'">';
									}else
										echo '<input class="form-control" name="email" type="text" id="email" onBlur="valEmail();">';
									echo '<p class="help-block" id="emailHelp"></p>';
								echo '</div>';
							}
							if(isset($_GET['err']) && strstr($_GET['err'],"phoneNull")){
								echo '<div class="form-group has-error">';
									echo '<label>Phone Number:</label>';
									echo '<input class="form-control" type="text" name="phone" id="phone" onBlur="valPhone();">';
									echo '<p class="help-block" id="phoneHelp">This field is required.</p>';
								echo '</div>';
							}else{
								echo '<div class="form-group">';
									echo '<label>Phone Number:</label>';
									if(isset($_SESSION['phone']) && $_SESSION['phone']!=""){
										echo '<input class="form-control" type="text" name="phone" id="phone" onBlur="valPhone();" value="'.$_SESSION['phone'].'">';
									}else
										echo '<input class="form-control" type="text" name="phone" id="phone" onBlur="valPhone();">';
									echo '<p class="help-block" id="phoneHelp"></p>';
								echo '</div>';
							}
							if(isset($_GET['err']) && strstr($_GET['err'],"dobNull")){
								echo '<div class="form-group has-error">';
									echo '<label>Date of Birth:</label>';
									echo '<input class="form-control" type="text" name="dob" id="dob" onBlur="valDOB();">';
									echo '<p class="help-block" id="dobHelp">This field is required.</p>';
								echo '</div>';
							}else{
								echo '<div class="form-group">';
									echo '<label>Date of Birth:</label>';
									if(isset($_SESSION['dob']) && $_SESSION['dob']!=""){
										echo '<input class="form-control" type="text" name="dob" id="dob" onBlur="valDOB();" value="'.$_SESSION['dob'].'">';
									}else
										echo '<input class="form-control" type="text" name="dob" id="dob" onBlur="valDOB();">';
									echo '<p class="help-block" id="dobHelp"></p>';
								echo '</div>';
							}
							echo '<div class="form-group">';
								echo '<label>Prefered Contact Method:</label>';
								echo '<input type="radio" id="prefPhone" name="prefMethod" value="Phone" onBlur="valPrefMethod();">';
								echo '<label>Phone</label>';
								echo '<input type="radio" id="prefEmail" name="prefMethod" value="Email" onBlur="valPrefMethod();">';
								echo '<label>Email</label>';
								echo '<p class="help-block" id="prefHelp"></p>';
							echo '</div>';
						echo '<div class="form-group">';
							echo '<label>Comment:</label>';
							echo '<textarea class="form-control" name="comment" type="text" id="comment" rows="10" cols="30" maxlength="500" onBlur="valComment();"></textarea>';
						echo '</div>';
						echo '<div class="form-group">';
							echo '<p class="help-block" id="commentHelp"></p>';
							echo '<button name="submit" id="submit" class="form-control btn btn-block btn-success" type="submit" onclick="validateAll();">Submit</button>';
						echo '</div>';
					echo '</form>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="row">';
			echo '<div class="col-sm-12">';
				echo '<p>Footer</p>';
			echo '</div>';
		echo '</div>';
	echo '</body>';
echo '</html>';

if (isset($_POST['submit'])){
	$err="";
	$comment=$_POST['comment'];
	if (isset($_POST['fname']) && $_POST['fname']!="")
	{
		$firstName=$_POST['fname'];
		$_SESSION['fName']=$firstName;
	}else
		$err.="fnameNull";
	if (isset($_POST['lname']) && $_POST['lname']!="")
	{
		$lastName=$_POST['lname'];
		$_SESSION['lName']=$lastName;
	}else
		$err.="lnameNull";
	if (isset($_POST['email']) && $_POST['email']!="")
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
	}else
		$err.="emailNull";
	if (isset($_POST['phone']) && $_POST['phone']!="")
	{
		$phone=$_POST['phone'];
		$_SESSION['phone']=$email;
	}else
		$err.="phoneNull";
	if (isset($_POST['dob']) && $_POST['dob']!="")
	{
		$dob=$_POST['dob'];
		$_SESSION['dob']=$email;
	}else
		$err.="dobNull";
	if (isset($err) && $err!="")
	{
		redirect("contact.php?err=$err");
	}
	echo "<div>First Name: $firstName</div>";
	echo "<div>Last Name: $lastName</div>";
	echo "<div>Email: $email</div>";
	echo "<div>Date of Birth: $dob</div>";
	echo "<div>Phone: $phone</div>";
	echo "<div>Comment: $comment</div>";
	session_destroy();
}
?>							
