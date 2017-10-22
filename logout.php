<!doctype html>
<html lang="en">
<?php include_once 'config.php' ?>

<?php session_destroy(); ?>

<head>
  <?php include_once 'head.php' ?>
</head>

<body>
	<div class="logout-page">
		<p>You are logged out, thank you for using this app. go <a href="index.php" class="underline">home</a></p>
	</div>
<?php include_once 'script.php' ?>
</body>
</html>