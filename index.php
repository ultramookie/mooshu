<?php
	include_once("header.php");
?>

<?php
	$cookie = $_COOKIE['mooshu'];
	$storedcookie = getCookie();

        if(checkCookie()) {
		showUpdateForm();
        }

        if( (checkCookie()) && ((stripslashes($_POST['checksubmit']))) ) {
		$url = strip_tags($_POST['url']);
		$id = addEntry($url);
		print "<hr />\n";
		print "mooshu'd link:  <a href=\"$siteurl/$id\">$siteurl/$id</a><hr />";
		print "original link: <a href=\"$url\">$url</a>";
        }
?>

<?php
	include_once("footer.php");
?>

