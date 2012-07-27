<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Model Practice</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="feiyu">
	<style type="text/css" media="screen">
		label{
			display:block;
		}
	</style>
	<!-- Date: 2012-05-31 -->
</head>
<body>
	<div id="content">
		<h2>Created</h2>
		<?php echo form_open('site/create'); ?>
		
		<p>
			<label form='Title'>Title :</label>
			<input type = 'text', name = 'title', id = 'title' />
		</p>
		
		<p>
			<label form='comments'>Content :</label>
			<input type = 'text', name = 'comments', id = 'comments' />
		</p>
		
		<?php echo form_submit('submit', 'Submit'); ?>
		
		<?php echo form_close(); ?>
		
		<hr/>
		
		<?php if(isset($records)) : foreach($records as $row): ?>
			
			<h2><?php echo anchor("site/delete/$row->id",$row->title); ?></h2>
			<div><?=$row->comments?></div>
		<?php endforeach; ?>	
		<?php else: ?>
			
			<h2>No Record is returned</h2>
		<?php endif; ?>
		
		<hr/>
		<h2>Delete</h2>
		
		<p>To delete the record, just click on the title of the list.</p>
		
		
		
		
	</div>

</body>
</html>
