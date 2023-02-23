<?php  
/* Database Connection */  
$sDbHost = 'localhost' ;  
$sDbName = 'Daycare' ;  
$sDbUser = 'root';  
$sDbPud = 'mysql';  
$ Conn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd);  
mysql_select_db ($sDbName, $Conn);  
?>  