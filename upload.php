<html>
<head>
<title>upload file script</title>
</head>
<body>
<h1><center>upload an image</h1>
<form method="POST" enctype="multipart/form-data" name="frm">
browse for image(jpg):<input type="file" name="image_file" size="35">
<br><br>
<input type="submit" value="upload" name="action">
</form>
<?php
$result=0;
if(isset($_POST['action'])=="upload")
{
$imagename=basename($_FILES['image_file']['name']);
$result=move_uploaded_file($_FILES['image_file']['tmp_name'],$imagename);
if($result==1)
echo("successfully uploaded:<b>".$imagename."</b>");
}
?>
<br>
<center>
<?php
if($result==1)
echo("<img src='".$imagename."'height=300 width=300>");
?>
</body>
</html>

