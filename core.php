<?php
$file = 'images.txt';
$f = fopen($file,'r');
$data = fread($f,filesize($file));
fclose($f);

$page = 1;
if ($_GET['page']) $page = $_GET['page'];

$data = explode("\n",$data);
$pagedata = explode('|',$data[$page-1]);
$image = $pagedata[0];
$caption = $pagedata[1];

$isLast = FALSE;
if (count($data)-1 == $page) $isLast = TRUE;
?>
