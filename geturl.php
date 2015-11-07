<?php
require(__DIR__."/function.php");
$url=urldecode($_GET["url"]);
echo json_encode(get_redirect_url($url));
?>