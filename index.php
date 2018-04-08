<html>
<head>
	<title>Redirect</title>
	<meta charset="UTF-8">
</head>
<body>
<center>
<h1>Redirect</h1>
<?php
include(__DIR__."/../function/sql/sql.php");
if(!isset($_GET["w"])){
	$query=new query;
	$query->dbname = "xiplus";
	$query->table = "redirect";
	$query->where = array(
		array("text",$_GET["q"])
	);
	$row=fetchone(SELECT($query));
	if(!$row)echo "<h2>找不到</h2>";
	else{
		echo "<h2>3秒後前往 <a href='".$row["url"]."'>".$row["url"]."</a></h2>";
		echo "<script>setTimeout(function(){document.location='".$row["url"]."';},3000)</script>";
	}
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