<?php 
require_once('config.php'); 
if(empty($_POST['token'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$token = "logintoken";
} else {
	$token = $_POST['token'];
	$t = $_POST['title'];
	$d = $_POST['descript'];
	$l = $_POST['level'];
}




?>
<html><head><title>Administration</title></head><body>

<font face="verdana,arial" size=-1>
<center><table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
<tr><td bgcolor="blue"><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td bgcolor="blue" align=center style="padding:2;padding-bottom:4"><b><font size=-1 color="white" face="verdana,arial"><b>Current Alerts</b></font></th></tr>
<tr><td bgcolor="white" style="padding:5">
<center><table cellpadding='2' cellspacing='5' border='1'>
<th>Title</th><th>Description</th><th>Timestamp</th><th>Level</th>
<font face="verdana,arial" size=-1>
<?php 
if(!(empty($_POST['token']))){
	$sql = "INSERT INTO `softeng02`.`rss_alerts` (`aid`, `title`, `descript`, `timestamp`, `level`) VALUES (NULL, '".$t."', '".$d."', CURRENT_TIMESTAMP, '".$l."');";
	mysql_query($sql) or die(mysql_error());
}
$sql = mysql_query("SELECT * FROM `rss_alerts` ORDER BY `aid` DESC") or die(mysql_error());
while($row = mysql_fetch_array( $sql )){
	echo "<tr><td>".$row['title']."</td><td>".$row['descript']."</td><td>".$row['timestamp']."</td><td>".$row['level']."</td><td><a href='".$host."delete.php?aid=".$row['aid']."'>Delete</a></tr>";
}
?>
</font></table>
<?php echo "<a href='".$host."delete.php?aid=all'>Delete All</a>"; ?>
</center>
</td></tr></table></td></tr></table>
<br/><br/><br/>
<font face="verdana,arial" size=-1>
<center><table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
<tr><td bgcolor="blue"><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td bgcolor="blue" align=center style="padding:2;padding-bottom:4"><b><font size=-1 color="white" face="verdana,arial"><b>Add New Alert</b></font></th></tr>
<tr><td bgcolor="white" style="padding:5"><br>
<center>
<?php echo '<form method="post" action="'.$host.'login.php" name="aform" target="_top">'; ?>
<input type="hidden" name="action" value="add">
<?php echo '<input type="hidden" name="token" value="'.$token.'">'; ?>
<center><table>
<tr><td><font face="verdana,arial" size=-1>Title:</td><td><input type="text" name="title"></td></tr>
<tr><td><font face="verdana,arial" size=-1>Description:</td><td><textarea name="descript"></textarea></td></tr>
<tr><td><font face="verdana,arial" size=-1>Alert Level:</td><td>
		<select name="level">
		  <option selected value=0>Low</option>
		  <option value=1>Medium</option>
		  <option value=2>High</option>
		  <option value=3>Life-Threatening</option>
		</select></td></tr>
<tr><td><font face="verdana,arial" size=-1>&nbsp;</td><td><font face="verdana,arial" size=-1><input type="submit" value="Add"></td></tr>
</table></center>
</form>
</td></tr></table></td></tr></table>
</body></html>