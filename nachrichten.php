<?php include "inc/header.php"; ?>
<?php
echo "<h2>$radioname Nachrichten</h2>";echo "<center >";
echo '<table width="auto" align="center" border="0"><tr><td>';
#
$i = 0;
foreach ($rssfeed->channel->item as $item) {
if ($i > 2)
    {
        break;
    }
   echo '<b><a href="'. $item->link .'">' . $item->title . "</a><b><br/>";
   echo "<p><small>" . $item->pubDate . "</small></p>";
   echo "<p>" . $item->description . "</p>";echo "<br />";
 $i++;
}
echo "<br />";
echo '<h4>'. $rssfeed->channel->title . '</h4>';

?></center>
<?php include "inc/footer.php"; ?>