<?php require_once('core.php');?>
<html>
<head>
<title>Image Slideshow</title>
</head>
<body>

<? if(!$isLast){?><a href='?page=<?=$page+1?>'><? }?>

<img src='<?=$image;?>' />

<? if(!$isLast){?></a><? }?>

<h1><?= $caption; ?></h1>

</body>
</html>
