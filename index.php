<html>
<head>
	<title>Redirect</title>
	<meta charset="UTF-8">
</head>
<body>
<center>
<h1>Redirect</h1>
<?php
if(!isset($_GET["w"])){
	echo "<h2>沒有給予網站</h2>";
}else if(!isset($_GET["q"])){
	echo "<h2>沒有給予參數</h2>";
}else {
	$url="";
	$q=explode(".",str_replace(array(",","-"),".",$_GET["q"]));
	switch($_GET["w"]){
		case "tnfsh":
			switch(count($q)){
				case 1:
					$url="http://".$q[0].".tnfsh.tn.edu.tw";
					break;
				case 5:
					$url="http://".$q[0].".tnfsh.tn.edu.tw/files/".$q[1]."-".$q[2]."-".$q[3]."-".$q[4].".php";
					break;
				default:
					echo "<h2>參數個數錯誤</h2>";
			}
			break;
		case "tngs":
			switch(count($q)){
				case 1:
					$url="http://www.tngs.tn.edu.tw/tngs/board/index.asp?numid=".$q[0];
					break;
				default:
					echo "<h2>參數個數錯誤</h2>";
			}
			break;
		default:
			echo "<h2>沒有找到網站</h2>";
	}
	if($url!=""){
		echo "<h2>3秒後前往 <a href='".$url."'>".$url."</a></h2>";
		if(!isset($_GET["stop"]))echo "<script>setTimeout(function(){document.location='".$url."';},3000)</script>";
	}
}
?>
<hr>
<?php
include("../function/developer.php");
?>
</center>
</body>
</html>