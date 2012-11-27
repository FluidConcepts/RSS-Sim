<?php 
require("inc/db.php");
//mysql_close($link);

$config = array( 'db_host'            => "localhost", 'db_user'            
=> $mysql_username, 'db_pass'            => "fluiddynamics", 'db_name'            
=> "softeng02",  'language'            => "en-us", 'feed_title'        
=> "RU Alerts", 'link'                => $host, 'description'        => 
"An RSS Feed for the Office of Emergency Preparedness", 'copyright'            
=> "{year}", 
'show_feed_pubdate'    => 
false, 'headlines'            => 9, 'show_author_info'    => true, 'encoding'            => "ISO-8859-1", ); ?>
