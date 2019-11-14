<div class="jumbotron md index-header">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">Login</h1>
        <p class="subtitle-site"><strong></strong></p>
      </div>
    </div>



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


<div class="m-login m-login--singin  m-login--5" id="m_login" style="">
				<div class="m-login__wrapper-1 m-portlet-full-height">
					<div class="m-login__wrapper-1-1">
						<div class="m-login__contanier">
							<div class="m-login__content">
								<div class="m-login__logo">
									
								</div>
								<div class="m-login__title">
									<h3>
										JOIN OUR GREAT PLATFORM
									</h3>
								</div>
								<div class="m-login__desc">
									<?=config_item('welcome_subtitle')?>
								</div>
								<div class="m-login__form-action">
                                    <a href="<?=base_url()?>register" class="btn btn-outline-focus m-btn--pill">Create An Account Now!!</a>
								</div>
							</div>
						</div>
						<div class="m-login__border">
							<div></div>
						</div>
					</div>
				</div>
				<div class="m-login__wrapper-2 m-portlet-full-height" >
					<div class="m-login__contanier">
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Login into your APS  account:
								</h3>
							</div>
							<?php		$attributes = array('class' => 'm-login__form m-form');
		echo form_open_multipart('',$attributes);  ?>
<div class="col-sm-12">
                <?php if ($this->session->flashdata('success') != null) {  ?>
                <div class="alert alert-success alert-dismissible" role="alert"> 
                    <?php echo $this->session->flashdata('success'); ?>
                </div> 
                <?php } ?>
                
                <?php if ($this->session->flashdata('exception') != null) {  ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $this->session->flashdata('exception'); ?>
                </div>
                <?php } ?> 
            </div>

 
<div class="form-group m-form__group">
<?php echo form_input($login); ?>
<span class="error"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
      </div>   
     <div class="form-group m-form__group">			                               
<?php echo form_password($password); ?>
         <span class="error"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
								</div>
								
<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<a href="<?php echo base_url("forgot_password") ?>" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div>
<div class="m-login__form-action">
									<?php echo form_submit('submit', 'Sign In','class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn"'); ?>
								</div>

<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>