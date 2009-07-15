<?php
	include_once('db.php');
	include_once('mooshulib.php');
	$id = stripslashes($_GET['id']);
	$url = expandUrl($id);
?>
<?php
	if ($url == "0") {
		print "<html>";
		print "<head>";
		print "<title>URl not found!</title>\n";
		print "</head>";
	} else {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $url");
		print "<html>";
		print "<head>";
		print "<title>Redirecting to $url</title>";
		print "</head>";
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
