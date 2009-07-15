<?php
	include_once('db.php');
	include_once('mooshulib.php');
	$id = stripslashes($_GET['id']);
	$url = expandUrl($id);
?>
<html>
<head>
<?php
	if ($url == "0") {
		print "<title>URl not found!</title>\n";
	} else {
		print "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=$url\">";
		print "<title>Redirecting to $url</title>";
	}
?>
</head>
<body>
<?php
	if ($url == "0") {
		print "The entered URL was not found!\n";
	} else {
		print "You should have been redirected <a href=\"$url\">here</a>.";
	}
?>
</body>
</html>
