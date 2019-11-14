<?php if (config_item('timezone')) { date_default_timezone_set(config_item('timezone')); } ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    	<?php
						$user = User::get_id();
						$user_email = User::login_info($user)->email;
						?>
  <meta charset="utf-8" />
 <link rel="shortcut icon" href="<?=base_url()?>assets/images/<?=config_item('company_logoicon')?>">
  <title><?php echo $template['title'];?></title>
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
	<!-- ======= Modernizr js ======= -->
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    <div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header class="m-grid__item    m-header "  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									 <a href="<?=base_url()?>admin" class="header-logo" title="<?=config_item('company_name')?>">
        
        <?php
        if(empty(config_item('company_logo')))
        {
        ?>
        <h4><?=config_item('company_name')?></h4>
        <?php  
        }else
        {
         ?>
        <img src="<?=base_url()?>assets/images/<?=config_item('company_logo')?>" class="logo">
        <?php   
        }
        ?>
        
        </a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
										<a  href="#" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-icon flaticon-add"></i>
											<span class="m-menu__link-text">
												New
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
                                              
												<li class="m-menu__item "  aria-haspopup="true">
													<a  href="<?=base_url()?>pricing" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-file"></i>
														<span class="m-menu__link-text">
															New Pricing Packages
														</span>
													</a>
												</li><li class="m-menu__item "  aria-haspopup="true">
													<a  href="<?=base_url()?>blog/create" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-file"></i>
														<span class="m-menu__link-text">
															New Post
														</span>
													</a>
												</li>
                                                
                                                  <?php
                                                if(User::is_superadmin() or User::is_admin())
                                                {
                                                    ?>
                                                <li class="m-menu__item "  aria-haspopup="true">
													<a  href="<?=base_url()?>pages/create" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-file"></i>
														<span class="m-menu__link-text">
															New Page
														</span>
													</a>
												</li>
                                               
                                                <?php
                                                }
                                                ?>
                                                <li class="m-menu__item "  aria-haspopup="true">
													<a  href="<?=base_url()?>posts/categories" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-file"></i>
														<span class="m-menu__link-text">
															New Category
														</span>
													</a>
												</li>
                                                  <?php
                                                if(User::is_superadmin() or User::is_admin())
                                                {
                                                    ?>
                                                
                                                <li class="m-menu__item "  aria-haspopup="true">
													<a  href="<?=base_url()?>accounts/create" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-file"></i>
														<span class="m-menu__link-text">
															New User
														</span>
													</a>
												</li>
                                                <?php
                                                }
                                                ?>
											</ul>
										</div>
									</li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
										<a  href="<?=base_url()?>" class="m-menu__link" target="_blank">
											<i class="m-menu__link-icon flaticon-share"></i>
											<span class="m-menu__link-text">
												View Website
											</span>
										</a>
									</li>
									</ul>
							</div>
							<!-- END: Horizontal Menu -->
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
											<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="<?php echo User::avatar_url($user);?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
													</span>
													<span class="m-topbar__username m--hide">
														<?php echo User::displayName($user);?>
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url(<?=base_url()?>assets/admin/images/user_profile_bg.jpg); background-size: cover;">
															<div class="m-card-user m-card-user--skin-dark">
																<div class="m-card-user__pic">
																	<img src="<?php echo User::avatar_url($user);?>" class="m--img-rounded m--marginless" alt=""/>
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		<?php echo User::displayName($user);?>
																	</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
																		<?php echo $user_email;?>
																	</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section m--hide">
																		<span class="m-nav__section-text">
																			Section
																		</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="<?=base_url()?>profile" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-profile-1"></i>
																			<span class="m-nav__link-title">
																				<span class="m-nav__link-wrap">
																					<span class="m-nav__link-text">
																						My Profile
																					</span>
																					
																				</span>
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="<?=base_url('logout')?>" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																			Logout
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<div  id="m_aside_left" class="m-grid__item	m-aside-left m-aside-left--skin-dark">
                    <div  id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark" 
		data-menu-vertical="true"
		 data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                    
              <?php

				if (User::is_superadmin()) {
					echo modules::run('sidebar/admin_menu');

				}elseif (User::is_admin()) {

					echo modules::run('sidebar/subadmin_menu');

				}elseif (User::is_staff()) {

					echo modules::run('sidebar/auth_menu');

				}else{
					redirect();
				}
				?>  
                    
                </div>
                </div>
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
						
							
		
							 <?php  echo $template['body'];?>
						
							
						
					
					</div>
				
			</div>
			<!-- end::Body -->
			<!-- begin::Footer -->
        
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									&copy; Copyright <a href="<?=config_item('company_domain')?>" target="_blank"><?=config_item('company_name')?></a> | All Right Reserved <?= date('Y')?>
								</span>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>   
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/extra.js"></script>
	<!-- ====== active js ======= -->
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/scripts.js"></script>
    <?php if(isset($datatable)){?>
    <script type="text/javascript">
    $(document).ready( function(){
        Datatable.init();
    });
        

    $(document).on('click', '[data-toggle="modal"]', function(e) {
            $('#Models').remove();
            e.preventDefault();
            var $this = $(this),
                $remote = $this.data('remote') || $this.attr('href'),
                $modal = $('<div class="modal fade" id="Models" tab=index="-1" role="dialog" aria-hidden="true"></div>');
            $('body').append($modal);
            $modal.modal();
            $modal.load($remote);
         //$('.datepicker').datepicker();
        
        });
 

        var SummerNote = function () {    
    //== Private functions
    var notes = function () {
        $('.summernote').summernote({
            height: 150, 
        });
    }

    return {
        // public functions
        init: function() {
            notes(); 
        }
    };
}();
 //== Initialization
jQuery(document).ready(function() {
    SummerNote.init();
});       //== Class definition

var BootstrapMarkdown = function () {    
    //== Private functions
    var bmarkdown = function () {
        
    }

    return {
        // public functions
        init: function() {
            bmarkdown(); 
        }
    };
}();

//== Initialization
jQuery(document).ready(function() {
    BootstrapMarkdown.init();
});
    </script>
    <?php }?>

</body>
</html>