<!DOCTYPE html>
<html>
<head>
	<title>Thanks</title>
</head>
<body>
Thanks!
<a href="index.html">Click here to go homepage!</a>
<?php
	$file=fopen("advices.txt","a+");
	fprintf($file, "Name:\r\n%s\r\nContact:\r\n%s\r\nContant:\r\n%s\r\n\r\n",$_POST[advice_name],$_POST[advice_contact],$_POST[advice_content]);
	fclose($file);
?>
</body>
</html>