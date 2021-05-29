<html>
 <head>
 	<meta charset="utf-8" />
 </head>
 	<frameset rows="80,*,50">
 	<frame name="t1" scrolling="no" target="contents" src="Views/top.php">
    <frameset cols="200,*">

    <frame name="t2" target="t3" src="Views/left.php">
    <frame name="t3" target="_self" src="Views/center.php">
    </frameset>
    <frame name="t5" scrolling="no" noresize target="contents" src="Views/bot.php">

</html>