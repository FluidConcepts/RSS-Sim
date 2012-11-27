<?php require_once('config.php'); ?>
<html><head><title>RSS Simulator</title></head><body>
<font face="verdana,arial" size=-1>
<center><table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
<tr><td bgcolor="blue"><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td bgcolor="blue" align=center style="padding:2;padding-bottom:4"><b><font size=-1 color="white" face="verdana,arial"><b>Enter your login and password</b></font></th></tr>
<tr><td bgcolor="white" style="padding:5"><br>
<?php echo '<form method="post" action="'.$host.'login.php">'; ?>
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<center><table>
<tr><td><font face="verdana,arial" size=-1>Login:</td><td><input type="text" name="username"></td></tr>
<tr><td><font face="verdana,arial" size=-1>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td><font face="verdana,arial" size=-1>&nbsp;</td><td><font face="verdana,arial" size=-1><input type="submit" value="Enter"></td></tr>
<tr><td colspan=2><font face="verdana,arial" size=-1>&nbsp;</td></tr>
<tr><td colspan=2><font face="verdana,arial" size=-1>Lost your username or password? Find it <a href="https://webapps.radford.edu/accounts/">here</a>!</td></tr>
</table></center>
</form>
</td></tr></table></td></tr></table>
<?php echo '<a href="'.$host.'rss.php">RSS Feed</a>'; ?>
</body></html>