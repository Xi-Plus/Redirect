<?php
function get_redirect_url($url){
	require(__DIR__."/config.php");
	$rurl="";

	if(preg_match("/(\w+).tnfsh.tn.edu.tw\/files\/(\d+)-(\d+)-(\d+)-(\d+).php/",$url,$match))$rurl=$config["redirect_url"]."?w=tnfsh&q=".$match[1].".".$match[2].".".$match[3].".".$match[4].".".$match[5];
	else if(preg_match("/www.tngs.tn.edu.tw\/tngs\/board\/index.asp\?numid=(\d+)/",$url,$match))$rurl=$config["redirect_url"]."?w=tngs&q=".$match[1];

	$res=new stdClass;
	if($rurl!=""){
		$res->success=true;
		$res->url=$rurl;
	}else {
		$res->success=false;
		$res->url=$url;
	}
	return $res;
}
?>