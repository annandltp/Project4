<?php
	session_start();

	if(!empty($_SESSION['username']) and !empty($_SESSION['password'])){ 	//untuk keamanan jadi harus login terlebih dahulu

	include("../lib/koneksi.php");  //include untuk memanggil file php
	define("INDEX", true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>

	<link rel="stylesheet" href="../css/admin1.css">

</head>
<body>
	<div id="container">
		<div id="header"></div>

		<div id="menu">
			<?php include("menu.php"); ?>
		</div>

		<div id="content">
			<?php include("konten.php"); ?>
		</div>

		<div id="footer">
			<p>Copyright &copy; Anandela</p> <!--$ adalah variabel-->
		</div>
	</div>

</body>
</html>

<?php
	}else{
		echo"Dilarang membuka halaman ini!";
		echo"<meta http-equiv='refresh'
			content='1; url=index.php'>";
	}

?>