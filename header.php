<?php 
include_once("db.php");
include_once("mooshulib.php");
?>
<html>
<head>
<title><? echo "$sitename"; ?> </title>
<link rel="stylesheet" type="text/css" href="yui/base-min.css" />
<link rel="stylesheet" type="text/css"  href="yui/reset-fonts.css" />
</head>
<body>
<h2><b><a href="<? echo "$siteurl"; ?>"><? echo "$sitename"; ?></a></b></h2>
<?php
	if(checkCookie()) {
		$username = getUserName();
		echo "<a href=\"usermod.php\">" . $username . "</a> | <a href=\"settings.php\">settings</a> | <a href=\"logout.php\">logout</a>";
	} else {
		echo "<a href=\"login.php\">login</a>";
	}
?>
<hr />
