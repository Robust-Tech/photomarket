<?php
$login = array(
	'name'	=> 'login','placeholder' => 'Email or Username',
	'id'	=> 'login',
	'value' => set_value('login'),'class' => 'form-control m-input',
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or Username';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password','class' => 'form-control m-input','placeholder' => 'Password',
	'id'	=> 'password',
	'autocomplete'	=> 'off',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<?php		$attributes = array('class' => 'm-login__form m-form');
		echo form_open($this->uri->uri_string(),$attributes);  ?>


 
<div class="form-group m-form__group">
<?php echo form_input($login); ?>
<span class="error"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
      </div>   
     <div class="form-group m-form__group">			                               
<?php echo form_password($password); ?>
         <span class="error"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
								</div>
								
								
<div class="row m-login__form-sub">
                                <div class="m--align-left m-login__form-left">
                                    
                                        <label class="m-checkbox  m-checkbox--dark">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                   
                                </div>
                            </div>
<div class="m-login__form-action">
									<?php echo form_submit('submit', 'Login','class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn"'); ?>
								</div>

<?php echo form_close(); ?>
