<?php
	session_start();

	include("lib/koneksi.php");
	define("INDEX", true);

?>

<html>
	<head>
		<title>Anandela</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="container">
			<div id="header"></div>
			<div id="menu">
				<?php include("menu.php"); ?>
			</div>
			<div id="content">
				<div id="kiri">
					<?php include("konten.php"); ?>
				</div>
				<div id="kanan">
					<?php include("sidebar.php"); ?>
				</div>
			</div>
			<div id="footer">
				<p>Copyright &copy; Anandela </p>
			</div>
			
		</div>
	</body>
</html>