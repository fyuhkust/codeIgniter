<div id='login_form'>
	<h1> login, fool</h1>
	
	<?php
		echo form_open('login/validate_credentials');
		echo form_input('username' , 'username');
		echo form_password('password', 'password');
		echo form_submit('submit', 'Login');
		echo anchor('login/signup', 'Create Account');
		
	?>
	
	
</div>