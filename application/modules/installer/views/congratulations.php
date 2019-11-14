<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/admin/images/logo.png">

    <title> iSkolo LMS/CMS Installer Success</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="lesley m mphahlele">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
    </script>
	<!-- ======= css ======= -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/extra.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">
</head>
<body>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
    <div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<?=base_url()?>assets/admin/images/bg.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="<?=base_url()?>/assets/images/<?=config_item('school_logo')?>">
							</a>
						</div>
<div class="m-login__signin">
<div class="m-login__head">
						 <h1 class="m-login__title">Congratulations!</h1>
                            <div class="m-login__desc">
									Thanks for installing iSkolo LMS
								</div>
            <a href="<?=base_url()?>" class="btn btn-dark btn-lg center">Web Dashboard</a>		
							</div>
                    </div>
                        
          <div class="m-login__account">
							<span class="m-login__account-msg">
                                 <a href="<?=config_item('school_domain')?>" target="_blank"><?=config_item('school_name')?></a> &copy; <?=date('Y')?> 
							</span>
						
							
						</div>
    </div>
                    </div>
                </div></div>

   <script src="<?=base_url()?>assets/install/js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url()?>assets/install/js/app.js"></script>


</body>

</html>
