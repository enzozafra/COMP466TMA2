<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register for Bookmark Manager</title>
	<link href="../shared/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="../shared/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav class="pink lighten-1" role="navigation">
	<div class="container"><a href="welcome.php" class="brand-logo">Bookmark Manager</a></div>
</nav>
<body class="cyan">
  <div class="row">
	<div class="register-form z-depth-4 card-panel col s6 offset-s3">
	  <form method="post" action="server/register.php">
		<div class="row">
		  <div class="input-field col s12 center">
			<h4>Register</h4>
		  </div>
		</div>
		<div class="row margin">
		  <div class="input-field col s12">
			<i class="material-icons prefix">perm_identity</i>
			<input name="username" type="text">
			<label for="username" class="center-align">Username</label>
		  </div>
		</div>
		<div class="row margin">
		  <div class="input-field col s12">
			<i class="material-icons prefix">lock_outline</i>
			<input name="password" type="password">
			<label for="password">Password</label>
		  </div>
		</div>
		<div class="row">
			<p class="red-text center">
			<?php
				if(isset($_GET['taken']) && $_GET['taken']) {
					echo 'Username is already taken';
				};
			?>
			</p>
		</div>
		<div class="row">
		  <div class="input-field col s12">
			<button action="submit" class="btn waves-effect waves-light col s12">Register Now</button>
		  </div>
		  <div class="input-field col s12">
			<p class="margin center medium-small">Already have an account? <a href="welcome.php">Login</a></p>
		  </div>
		</div>
	  </form>
	</div>
  </div>


	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../shared/js/materialize.min.js"></script>

</body>

</html>
