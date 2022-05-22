<?php
// directory we use - FIX THIS USING __DIR__??
$dir="./images";
// Initialize filecount variable
$filecount=0;
// count the files
$files=glob($dir."/*.JPG");
// randomize
// $bgi=array_rand($files,5);
shuffle($files);
// individual file names
// needs a safety check to make sure the # of files exists
$bgi_1=$files[0];
$bgi_2=$files[1];
$bgi_3=$files[2];
$bgi_4=$files[3];
$bgi_5=$files[4];
?>
