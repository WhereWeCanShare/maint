<html>
<head>
<meta http-equiv="Refresh" content="300,  URL=https://chookiat.com">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<Title> ...  Upgrade Website in Progress ... </title>
</head>

<body>
<font color=red>
<div align=center valign=center><img src="https://chookiat.com/images/PC.gif"> </div>
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
<!-- Malwarebytes ads -->
  <a href="https://buy.malwarebytes.com/cart/?s=44948&c=cart&k=purl-endpoint-security">Malwarebytes Endpoint Security is an advanced endpoint protection platform that protects your endpoints against unknown and known threats</a>
  <br>
  <a href="https://buy.malwarebytes.com/?c=cb&s=44948&aid=44948&k=728x90b"><img src="http://static.cb-content.com/mycontent/342/MBPremium728x90b.jpg" width="728" height="90"/></a>
  <br>
  <a href="https://buy.malwarebytes.com/?c=cb&s=44948&aid=44948&k=728x90c"><img src="http://static.cb-content.com/mycontent/342/MBPremium728x90c.jpg" width="728" height="90"/></a>
  <br>
  <a href="https://buy.malwarebytes.com/cart/?s=44948&c=cart&k=purl-endpoint-security">Malwarebytes Endpoint Security is an advanced endpoint protection platform that protects your endpoints against unknown and known threats</a><br>
  <br><br>
<!-- Panda Security -->
  <a href=”https://store.pandasecurity.com/300/cookie?affiliate=44948&x-track=187557&redirectto=https%3A%2F%2Fstore.pandasecurity.com%2F300%2Fpurl-cart%3Fcart%3D175045%26coupon%3DRTGTG50%26x-track%3D187557%26utm_medium%3Daffiliate%26utm_source%3DCLEVERBRIDGE&utm_medium=affiliate&utm_source=CLEVERBRIDGE”></a><br>
  <a href="https://store.pandasecurity.com/300/cookie?affiliate=44948&redirectto="><img src="http://static.cb-content.com/mycontent/300/IS_icon.png" width="412" height="412"/></a><br>
  <a href=”https://store.pandasecurity.com/300/cookie?affiliate=44948&redirectto=http%3A%2F%2Fwww.pandasecurity.com%2Fsecurity-promotion%2FDefault.asp%3Fcampaign%3Drenewal%26track%3D187557%26utm_medium%3Daffiliate%26utm_source%3DCLEVERBRIDGE%26utm_campaign%3DRenewals”></a><br>
  <br><br>
<!-- Kaspersky -->
  <a href="http://www.tkqlhce.com/click-8303790-10575716" target="_top"><img src="http://www.awltovhc.com/image-8303790-10575716" width="468" height="60" alt="Kaspersky Internet Security" border="0"/></a><br>
  <br><br>

<!-- <?php echo $server_admin; ?> -->
</div>
</body>
</html>
