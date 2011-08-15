<opml version="1.0">
    <head>
        <title>
            Symfony Bloggers
        </title>
    </head>
    <body>
<?php
    $fh = fopen('feed_list', 'r');
    $i = 0;
    while( ($feed = fgets($fh)) !== false ){
        if(strlen($feed) > 5){
            echo '<outline title="feed_'.$i++.'" text="feed_'.$i.'" type="rss" version="RSS" xmlUrl="'.trim($feed).'" />'."\n";
        }
    }
?>
    </body>
</opml>