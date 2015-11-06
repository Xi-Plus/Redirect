<html>
<head>
	<title>xiplus redirect</title>
	<meta charset="UTF-8">
</head>
<body>
<center>
<?php
if(!isset($_GET["q"])){
	echo "<h2>Not Given Web</h2>";
}
else if(!isset($redirect_list[$_GET["q"]])){
	echo "<h2>Not Found</h2>";
}else {
	echo "<script>document.location='".$redirect_list[$_GET["q"]].$_GET["id"]."'</script>";
}
?>
<hr>
<?php
include("../function/developer.php");
?>
</center>
</body>
</html>