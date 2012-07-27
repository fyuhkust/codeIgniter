<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>My Home</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="feiyu">
	<!-- Date: 2012-05-20 -->
</head>
<body>
	<div id="content">
		<p>My View has been Loaded</p>
		
		<?php foreach($rows as $r): ?>
			
		<h1><?=$r->title?></h1>
		<div><?=$r->comments?></div>

		
		
		<?php endforeach; ?>
	</div>

</body>
</html>
