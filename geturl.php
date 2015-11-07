<?php
require(__DIR__."/function.php");
$url=urldecode($_GET["url"]);
$res=get_redirect_url($url);
$res->url=urlencode($res->url);
echo json_encode($res);
?>