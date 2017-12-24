<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "sql301.byethost32.com";
$database= "b32_21081456_guest";
$username= "b32_21081456";
$password= "0hxpn82y";
$Byet_MySQL = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("set names 'utf8'");
?>