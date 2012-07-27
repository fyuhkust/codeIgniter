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
	<?php if ($query->num_rows() > 0) :?>
		<?php foreach($query->result() as $rows):?>
		<p><?=$rows->body?></p>
		<p><?=$rows->author?></p>
	
		<p><?=anchor('blog','Back to Blog');?></p>
		<hr>
		<?php endforeach; ?>
	<?php endif; ?>
	
	<?=form_open('blog/comment_insert');?>
	<?=form_hidden('entry_id',$this->uri->segment(3));?>
	
	<p><textarea name='body'rows='10'></textarea></p>
	<p><input type='text' name='author'/></p>
	<p><input type='submit' value='Submit Comments' /></p>

</form>

</body>
</html>
