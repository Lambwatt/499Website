<?php include "templates/top.php";?>

<!--
	For some reason, the Flash content isn't expanding to fill its window on Linux/Chromium.
	Linux/Firefox seems to work as expected.
	Right click -> Show All expands the content as desired.
	Haven't found a fix yet.
-->
<object type="application/x-shockwave-flash" data="seng499.swf" width="800" height="600" id="game">
	<param name="movie" value="seng499.swf"/>
	<param name="quality" value="high"/>
	<param name="scale" value="exactfit"/>
	<embed src="seng499.swf" width="800" height="600" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="exactfit"></embed>
</object>

<?php include "templates/bottom.php";?>
