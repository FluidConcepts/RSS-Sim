<?php

function sql_error() {
    die("SQL Error:<br/><textarea rows=\"12\" cols=\"50\">".mysql_error()."</textarea>");
}

// make sure links have a trailing slash

if ($_SERVER["HTTP_HOST"] == 'localhost') {
$host = "http://localhost/rss-sim/";
$partial_link = "localhost/rss-sim/";
$mysql_username = "root";
}else{
$host = "https://php.radford.edu/~softeng02/rss-sim/";
$partial_link = "php.radford.edu/~softeng02/rss-sim/";
$mysql_username = "softeng02";
}

$link = mysql_connect("localhost", $mysql_username, "fluiddynamics") or 
sql_error();
mysql_select_db("softeng02") or sql_error();
?>
