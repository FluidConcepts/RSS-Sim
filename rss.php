<?php
include("config.php");

//$link = mysql_connect($config['db_host'],$config['db_user'],$config['db_pass']) or die();
//mysql_select_db($config['db_name']) or die();

$news_headlines    = mysql_query("SELECT * FROM rss_alerts ORDER BY aid DESC");
$items_output    = null;
if(mysql_num_rows($news_headlines))
{
    while($headline = mysql_fetch_assoc($news_headlines))
    {
		$rfc_date = date('r', strtotime($headline['timestamp']));
        $items_output .= <<<EOF

        <item>
			<title>{$headline['title']}</title>
			<link>http://php.radford.edu/softeng02/rss-sim/view.php?aid={$headline['aid']}</link>
            <description>{$headline['descript']}</description>
			<pubDate>{$rfc_date}</pubDate>
			<category>{$headline['level']}</category>
			<guid>http://php.radford.edu/softeng02/rss-sim/view.php?aid={$headline['aid']}</guid>
        </item>
EOF;
    }
}

$config['encoding']    = empty($config['encoding']) ? 'ISO-8859-1' : $config['encoding'];
$pubdate            = $config['show_feed_pubdate'] ? "<pubDate>" . gmdate('r') ."</pubDate>" : null;
$language            = empty($config['language']) ? null : "<language>{$config['language']}</language>";

$output = <<<EOF
<rss version="2.0">
    <channel>
        <title>{$config['feed_title']}</title>
        <link>{$config['link']}</link>
        <description>{$config['description']}</description>{$pubdate}{$language}{$items_output}		
    </channel>
</rss>

EOF;

header("Content-type: application/xml; charset={$config['encoding']}");
echo $output;
?>