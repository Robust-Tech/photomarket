<?php
if ($use_username) {
  $username = array('name' => 'username',  'class' => 'form-control m-input',  'value' =>set_value('username'),  'maxlength' => $this->config->item('username_max_length','tank_auth'), 'size' => 30, 'placeholder' => 'Username');
}
$email = array('name' => 'email','class' => 'form-control m-input','value' => set_value('email'),'maxlength' => 80,'size' => 30, 'placeholder' => 'Email Address');
$password = array('name'	=> 'password','class'	=> 'form-control m-input','type' => 'password','maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),'size'	=> 30, 'placeholder' => 'Password');
$confirm_password = array('name'	=> 'confirm_password','class'	=> 'form-control m-input','type' => 'password','maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),'size'	=> 30, 'placeholder' => 'Confirm Password');
$captcha = array('name'	=> 'captcha','id'	=> 'captcha','class'	=> 'form-control m-input','maxlength'	=> 8);

 ?>


<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">Create Your African Photostock Account</h1>
        <p class="subtitle-site"><strong><p class="subtitle-site"><strong><?=config_item('welcome_subtitle')?></strong></p></strong></p>
      </div>
    </div>
<div class="m-login m-login--singin  m-login--5" id="m_login" style="">
				
				<div class="m-login__wrapper-2 m-portlet-full-height" >
					<div class="m-login__wrapper-2-2">
					<div class="m-login__contanier">
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Enter your details to create your account:
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
                
                <?php if ($this->session->flashdata('error') != null) {  ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php } ?> 
            </div>
<div class="form-group m-form__group">
									<?php echo form_input($username); ?>
                                            <span class="hidden-xs form-control-feedback"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
								</div>
								<div class="form-group m-form__group">
									<?php echo form_input($email); ?>
                                            <span class="hidden-xs form-control-feedback "><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
								</div>
								<div class="form-group m-form__group">
									<?php echo form_input($password); ?>
                                            <span class="hidden-xs form-control-feedback"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
								</div>
								<div class="form-group m-form__group">
									<?php echo form_input($confirm_password); ?>
                                            <span class="hidden-xs form-control-feedback"><?php echo form_error($confirm_password['name']); ?><?php echo isset($errors[$confirm_password['name']])?$errors[$confirm_password['name']]:''; ?></span>
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											Once you click to Sign up you agree with our Terms and Conditions
										</label>
									</div>
								</div>
								<div class="m-login__form-action">
									<?php echo form_submit('submit', 'CREATE ACCOUNT','class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" id="m_login_signup_submit"'); ?>
								</div>


<?php echo form_close(); ?>
						</div>
					</div>
                    <div class="m-login__border">
							<div></div>
						</div>
				</div>
				</div>
    <div class="m-login__wrapper-1 m-portlet-full-height">
					<div class="m-login__wrapper-1-1">
						<div class="m-login__contanier">
							<div class="m-login__content">
								<div class="m-login__logo">
									
								</div>
								<div class="m-login__title">
									<h3>
										Share your work and start earning.
									</h3>
								</div>
								<div class="m-login__desc">
								Join African Photostock community of contributors and earn money doing what you love.
								</div>
								<div class="m-login__form-action">
                                    <a href="<?=base_url()?>join-now" class="btn btn-outline-focus m-btn--pill">Get Started</a>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>

<script>
//== Class Definition
var SnippetLogin = function() {
    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
			<span></span>\
		</div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        alert.animateClass('fadeIn animated');
        alert.find('span').html(msg);
    }


 
    var handleSignUpFormSubmit = function() {
        $('#m_login_signup_submit').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');

            form.validate({
                rules: {
                    username: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
                    confirm_password: {
                        required: true
                    }
                },
                messages: {
                username: "Oops! Field is empty",
                email: "Oops! Field is empty",
                password: "Oops! Field is empty",
                confirm_password: "Oops! Field is empty",
            }
            });
        });
    }

    //== Public Functions
    return {
        // public functions
        init: function() {
            handleSignUpFormSubmit();
        }
    };
}();


</script>