<html>
<head>
<title>AGE CALCULATION PROGRAM</title>
</head>
<body bgcolor="sky blue">
<h1><center>AGE CALCULATION PROGRAM</h1>
<p align="center">
<?php
$odate="11/01/2000";
$odate=date("m/d/y",strtotime($odate));
$then=new DateTime($odate);
$now=new DateTime();
$sinceThen=$then->diff($now);
echo"Date of Birth:".$odate.'<br></br>';
echo"Current
Date:".date("m/d/y").'<br></br>';echo
$sinceThen->y.'Years have passed.
<br></br>';
echo $sinceThen->m.'Months have passed.
<br></br>';
echo $sinceThen->d.'Days have passed.
<br></br>';
?></p>
</body></html>
