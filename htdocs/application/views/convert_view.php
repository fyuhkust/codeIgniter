<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Converting Page</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="feiyu">
	<style type="text/css" media="screen">
	
		#header{
			height:40px;
			background:#aa2828;
			margin:none;
		}
		
		#content{
			background:#aa2828;
		}
		
		#twist{
			float:left;
			width:30%;
			height:100%;
			padding:50px;
			background:#e3e3e3;
		}
		.error{
			padding-left:40px;
			font-family: arial;
			color:#373737; 
			font-style : italic;
		}
		p.frontLogo{
			padding:0.7em;
			color:#FFFFFF;
		}
		#dhpara{
			float:right;
			width:30%;
			height:100%;
			padding:50px;
			background:#e3e3e3;
		}
		.subButton{
			float:left;
		}
		label{
			display:block;
			margin-right: 0.5em;
		}
		
		input[type=submit] {
		border: 1px solid #c62828;
		background: #aa2828;
		color: #e3e3e3;
		padding: 0.5em;
		margin:auto 0;
		cursor: pointer;
		}
		input[type=submit]:hover {
		background: #9a2222;
		}
		h3{
			color: #aa2828;
			font-family: arial;
		}
		h4{
			color: #aa2828;
			font-family: arial;
		}
	</style>
	<!-- Date: 2012-05-20 -->
</head>
<body>
	<div id="header">
		<p class = 'frontLogo'>This is a simple Converter between se(3) and DH Parameters</p>
		
	</div>
	
	<div id="content">
		<div id = "twist">
			<h3>Sample input Twist: 0 0 0 0 0 1 </h3>
			<h4>(first three are v and last there are w)</h4>
			
			<?php
				if(empty($from)){
					$from = NULL;
				}
				$twist_name = array(
					'Twist1','Twist2','Twist3'
				);
			?>
			
			<?php
				echo form_open('convert/twisttodh');
				$i = 0;
				foreach($twist_name as $cur_twist){ ?>
				<p>
				<label form= <?=$cur_twist?> ><span><?=$cur_twist?> : </span></label>
				<input type = 'text' name = "<?=$cur_twist?>" 
					id = "<?=$cur_twist?>" value = "<? if (empty($TOK)) {echo set_value($twist_name[$i]);} else {echo $twist[$i];}?>"> 
				</p>
			<?php 
				$i=$i+1;}
			?>
			<p>
			<label form= "Endpoint" ><span>Endpoint : </span></label>
			<input type = 'text' name = "endpoint" 
				id = "endpoint" value = "<? if (empty($TOK)) {echo set_value('endpoint');} else {echo $endpoint;}?>"> 
			</p>
			
			
		
			<p><?php echo form_submit('TtD','Convert From Twist to DH'); ?></p>
			
			<?php echo form_close(); ?>
			<p><?php if($from =='twist'){ echo validation_errors('<p class="error">', '</p>');} ?></p>
			
		</div>	
		<div id = "dhpara">
			<h3>Sample input DH: 0 0 0 </h3>
			<h4>( 1. d  2. alpha 3. r)</h4>
			
			
			<?php
				$DH_name = array(
					'1st_Set','2nd_Set','3rd_Set'
				);
			?>
			<?php
				echo form_open('convert/dhtotwist');
				$i = 0;
				foreach($DH_name as $cur_twist){ ?>
				<p>
				<label form= <?=$cur_twist?> ><span><?=$cur_twist?> : </span></label>
				<input type = 'text' name = "<?=$cur_twist?>" 
					id = "<?=$cur_twist?>" value = "<? if (empty($DOK)) {echo set_value($DH_name[$i]);} else {echo $DH[$i];}?>">
				</p>
			<?php 
				$i=$i+1;}
			?>
			
			
			<p><?php echo form_submit('DtT','Convert From DH to Twist'); ?></p>
			<?php echo form_close(); ?>
			
			<p><?php if($from =='dh'){ echo validation_errors('<p class="error">', '</p>');} ?></p>
			
		</div>
	</div>
	
	<div id = 'footer'>
		
	</div>

</body>
</html>
