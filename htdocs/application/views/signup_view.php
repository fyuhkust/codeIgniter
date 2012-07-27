<h1>Create an Account</h1>

<fieldset>
	<legend>Personal Information</legend>
	
	<?php
	
	echo form_open ('login/create_member');
	echo form_input('first_name', set_value('first_name', 'First Name'));
	echo form_input('last_name', set_value('last_name', 'Last Name'));
	echo form_input('email_address', set_value('email_address', 'Email Address'));
	
	?>
</fieldset>

<fieldset>
	<legend>Login Information</Legend>
		
		
	<?php
	
	echo form_input('username', set_value('username', 'User Name'));
	echo form_input('password', set_value('password' , 'Password'));
	echo form_input('password_confirm', set_value('password_confirm' , 'Confirm Password'));
	echo form_submit('submit', 'Create Account');
	
	echo form_close();
	
	echo validation_errors('<p class="error">');
	
	?>
</fieldset>