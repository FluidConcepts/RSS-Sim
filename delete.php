<?php
require_once('config.php');
$delete = $_GET['aid'];
if ($delete === "all") {
        $sql = "TRUNCATE TABLE `rss_alerts`;";
} else $sql = "DELETE FROM `rss_alerts` WHERE `rss_alerts`.`aid` = ".$delete." $
mysql_query($sql) or die(mysql_error());
echo "Success!<br/>";
echo "<a href='".$host."'login.php>Go back to Admin Panel</a>";
?>