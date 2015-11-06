<html>
<head>
	<title>xiplus redirect</title>
	<meta charset="UTF-8">
</head>
<body>
<center>
<?php
include("config.php");
if(!isset($_GET["q"])){
	echo "<h2>Not Given Web</h2>";
}else if(!isset($redirect_list[$_GET["q"]])){
	echo "<h2>Not Found</h2>";
}else {
	$url=$redirect_list[$_GET["q"]].$_GET["id"];
	echo "<h2>Rredirect to ".$url."</h2>";
	echo "<script>setTimeout(function(){document.location='".$url."';},3000)</script>";
}
?>
<hr>
<?php
include("../function/developer.php");
?>
</center>
</body>
</html>