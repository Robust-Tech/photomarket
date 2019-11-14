
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
 <link rel="shortcut icon" href="./assets/admin/images/logo.png">
  

  <title>Database Error</title>
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
	<link rel="stylesheet" href="./assets/admin/css/extra.css">
	<link rel="stylesheet" href="./assets/admin/css/style.css">
	<!-- ======= Modernizr js ======= -->
</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" >

<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid  m-error-5" style="background-image: url(./assets/admin/images/404_bg.jpg);">
	<div class="m-error_container">
		<span class="m-error_title">
			<h1>Oops!</h1>		 
		</span> 		
		
			<?php echo $message; ?>
			
		<p class="m-error_description">
            
			We're working on it and it'll fixed<br>
			as soon possible.<br>
			<a href="./">Back to Homepage</a>
		</p>	 
	</div>	 
</div>				
		

</div>         
     
             
	<script type="text/javascript" src="./assets/admin/js/extra.js"></script>
	<!-- ====== active js ======= -->
	<script type="text/javascript" src="./assets/admin/js/scripts.js"></script>


</body>
</html>