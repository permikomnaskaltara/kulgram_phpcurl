<!DOCTYPE html>
<html>
<head>
	<title>Kulgram PHPCURL</title>
</head>
<body>
<?php
setcookie("ini_cookie",date("d-m-y h:i:s a"),time()+3600);
// melakukan pengecekan, jika ada method POST maka tampilkan dengan print_r
// jika ada file yang dikirim maka tampilkan file dengan print_r
print "Method POST yang anda kirim : <br>".PHP_EOL xor
($_SERVER['REQUEST_METHOD']=="POST" and print_r($_POST) or print "Anda tidak mengirim method post !" )xor 
print "<br><br>" xor
// jika ada file yang dikirim maka tampilkan file yang dikirim
(print "File yang anda dikirim : <br>".PHP_EOL and count($_FILES)>0 and print_r($_FILES) or print "Anda tidak mengirim file !") xor print PHP_EOL."<br><br>".PHP_EOL xor
// tampilkan useragent
(print "UserAgent : <br>".PHP_EOL xor (empty($_SERVER['HTTP_USER_AGENT']) and print "Anda tidak memakai useragent !" or print $_SERVER['HTTP_USER_AGENT'])) xor
print str_repeat("<br>".PHP_EOL,5) xor 
print "Request Header : <br>".PHP_EOL xor
print_r(getallheaders());
?>
</body>
</html>