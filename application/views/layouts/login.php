<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
 <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png">
  

  <title><?php echo $template['title'];?></title>
  <meta name="description" content="<?=config_item('site_desc')?>" />
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
	<link href="<?=base_url()?>themes/<?=config_item('theme')?>/assets/css/extra.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>themes/<?=config_item('theme')?>/assets/css/style.css" rel="stylesheet" type="text/css" />
	<!-- ======= Modernizr js ======= -->
</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
    <div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="<?=base_url('')?>">
								<img src="<?=base_url()?>assets/images/logo.png">
							</a>
						</div>
<div class="m-login__signin">
	<!--main content start-->
      <?php  echo $template['body'];?>
      <!--main content end-->
                    </div>
                        
                        <div class="m-login__account">
							<span class="m-login__account-msg">
								&copy; Copyright <a href="<?=config_item('company_domain')?>" target="_blank"><?=config_item('website_name')?> </a>| All Right Reserved <?= date('Y')?>
							</span>
                            <span class="m-login__account-msg">
								<p><a href="<?=base_url('')?>" >Back Home </a></p>
							</span>
						
							
						</div>
                    </div>
                </div></div></div>
<!--begin::Base Scripts -->
		<script src="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/extra.js"></script>
    <script src="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/scripts.js"></script>


</body>
</html>
