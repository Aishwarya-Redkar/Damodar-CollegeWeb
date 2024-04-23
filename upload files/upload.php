<?php

$uploaddir="Uploads/";
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
echo "<pre style=font-size:20px>";
if(move_uploaded_file($_FILES['uploaded_file']['name'],$uploadfile))
{
echo "<pre style=font-size:20px>";
}
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$uploadfile))
{
echo "<br>File is vaild, and was successfully uploaded!!!</b>.\n";
}
else
{
echo "<b>File upload failed!!!</b>.\n";
}
echo '<br/>Here is some more debugging info:'."<br/>";
echo "Upload:".$_FILES["uploaded_file"]["name"]."<br>";
echo "Type:".$_FILES["uploaded_file"]["type"]."<br>";
echo "Size:".($_FILES["uploaded_file"]["size"]/1024)."Kb<br>";
echo "Temp file:".$_FILES["uploaded_file"]["tmp_name"]."<br>";
echo "</pre>";

?>