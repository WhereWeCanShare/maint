<html>
<head>
<!-- <meta http-equiv="Refresh" content="300,  URL=http://demo.chookiat.tk"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<Title> ...  Upgrade Website in Progress ... </title>
</head>

<body>
<font color=red>
<div align=center valign=center><img src="http://chookiat.com/images/PC.gif"> </div>
<h1 align=center>Website is under maintenance</h1>

<?php
date_default_timezone_set('Asia/Bangkok');
$filestamp = filectime("maint.txt");
$startdt= date("j F Y\nH:i T", $filestamp);
$currt = date("H:i");
$currd = date("D j F Y");
$server_admin = apache_getenv("SERVER_ADMIN");
$content = "<h3 align=center>";


$content .= "The maintenance start from ".$startdt."<br>";

$content .= "and expected to finish within 8 hours.<br>";
$content .="It is at ".$currt." on ".$currd."</h3>";

echo $content;
?>

</font>

<h5 align=center>This page is reloading every 300 seconds.</h5>

<div align=center valign=center>
<?php echo $server_admin; ?>
</div>
</body>
</html>
