<!--
        Written by ghouly gangrif
        Always open, and available at https://github.com/gangrif/61gh0sts-login
-->
<html>
	<head>
		<title>s00per seekr3t DC61gh0sts adm1n page!</title>
	</head>
	<body bgcolor='#000000' text='#449977'>
		<center><a href='/index.html'><-</a></a>-[<a href='about.html'>About DC61gh0sts</a>]-[<a href='https://crawl.defcon610.org'>Pubcrawl</a>]-</center>
		<br>
		<center>
<?php
if ($_POST && ($_POST['user'] == '61gh0sts' && base64_encode($_POST['passwd']) == 'Z2hvc3RzIGFyZSBwZW9wbGUgdG9v')) {
	$flag = file_get_contents('/tmp/f');
	echo "Welcome<br>$flag";
} else {
		echo "
		<form action=admin.php method=post>
			Username: <input type=text name=user><br>
			Password: <input type=password name=passwd><br>
			<input type=submit>
		</form>
		<br>";
}
?>
		</center>
	</body>
</html>
