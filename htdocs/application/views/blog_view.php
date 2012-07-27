<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$title?></title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="feiyu">
	<!-- Date: 2012-05-18 -->
</head>
<body>
	<h1><?=$heading?></h1>
	
		<?php foreach($query->result() as $rows):?>
		<h3><?=$rows->title?></h3>
		<p><?=$rows->body?></p>
		<p><?=anchor('blog/comments/'.$rows->id,'Comments');?></p>
		<hr>

		<?php endforeach; ?>
	

</body>
</html>