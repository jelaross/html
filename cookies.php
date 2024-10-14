<html>
<head>
<title>Last visited page</title>
</head>
<body bgcolor="pink">
<p>Web programming</p>
<h1> Welcome to web programming lab</h1>
<hr>
<p align="center" style="font-style:italic">
<?php
date_default_timezone_set('Asia/Calcutta');
$today=60*60*24*1+time();
setcookie('lastVisit',date("G:i m/d/y"),$today);
if(isset($_COOKIE['lastVisit']))
{
$visit=$_COOKIE['lastVisit'];
echo "Last Visited on:".$visit;
}
else
echo "You've got some old cookies!";
?>
</p>
</body>
</html>
