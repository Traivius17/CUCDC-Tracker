<php  
include ("config.php");  
$checkbox1 = $_POST['chkl'] ;  
$timezone = date_default_timezone_get();

if ($_POST["Submit" ]=="Submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO Attendance (ChildID) VALUES ('".$checkboxl[$i]. "')";  
mysql_query($query) or die(mysql_error());  
} 

for ($i=0; $i<sizeof ($checkbox1);$i++) {  

$query1="INSERT INTO Attendance (Date) VALUES ('". $timezone. "')";  
mysql_query($query1) or die(mysql_error());  
}  

echo "Attendance has been Submitted";  
}  
?>  