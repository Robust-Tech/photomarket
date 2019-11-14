<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="shortcut icon" href="<?=base_url()?>assets/images/<?=config_item('company_logo')?>">
  

  <title><?php echo $template['title'];?></title>
  <meta name="description" content="<?=config_item('site_desc')?>" />
  <meta name="keywords" content="<?=config_item('site_keywords')?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta property="og:title" content="<?=$template['title'];?>" />
    <meta property="og:site_name" content="<?=config_item('company_name')?>" />
    <meta property="og:url" content="<?=config_item('company_domain')?>" />
    <meta property="og:description" content="<?=config_item('site_desc')?>" />
    <meta property="og:type" content="article" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="Big Bite Consulting" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
    </script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?=base_url()?>themes/<?=config_item('theme')?>/assets/css/extra.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>themes/<?=config_item('theme')?>/assets/css/style.css" rel="stylesheet" type="text/css" />
    
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header class="m-grid__item		m-header "  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="<?=base_url()?>" class="m-brand__logo-wrapper">
											<img alt="" src="<?=base_url('assets/images')?>/<?=config_item('company_logo')?>" class=""/>
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										
										<!-- BEGIN: Responsive Aside Left Menu Toggler -->
										<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- END -->
										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
										<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>
										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>
							<!-- end::Brand -->
							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
                                            
                                        <li class="m-nav__item"  aria-haspopup="true">
											<a  href="<?=base_url('packages')?>" class="m-nav__link ">
												<span class="m-nav__link-text">
													Pricing
												</span>
											</a>
										</li>
                                        <li class="m-nav__item"  aria-haspopup="true">
											<a  href="<?=base_url('news')?>" class="m-nav__link ">
												<span class="m-nav__link-text">
													Blog
												</span>
											</a>
										</li>
										
										
										<li class="m-nav__item m-dropdown m-dropdown--small m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
											<a  href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-text">
													Categories
												</span>
											</a>
											
													<?php if(!empty($categories)){
                            $i = 1;
    
                            ?>
                    <div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
				<div class="m-dropdown__content">
                            <ul class="m-nav m-nav--skin-light">
                                <?php foreach($categories as $category){
                                $slug = $category->slug;
                                                      ?>
                                    <li class="m-nav__item"  aria-haspopup="true">
                                        <a href="<?=base_url()?>category/<?=$category->slug?>" class="m-nav__link ">
                                            <span class="m-nav__link-text"> <?=$category->name?></span>
                                        </a>
                                    </li>
                                    
                                <?php
                            $i++;
                            }
                                ?>
                        
                                <li class="m-nav__item"  aria-haspopup="true">
											<a  href="<?=base_url('categories')?>" class="m-nav__link ">
												<span class="m-nav__link-text">
													View All <i class="fa fa-long-arrow-right"></i>
												</span>
											</a>
										</li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                                <?php }
                                ?>
												
										</li>
                                            <li class="m-nav__item"  aria-haspopup="true">
											<a  href="#" class="m-nav__link ">
												<span class="m-nav__link-text">
													
												</span>
											</a>
										</li>
                                            <li class="
	m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" 
	data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
											<a href="#" class="m-nav__link">
												<span class="m-nav__search-box">
													<form  class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
																</span>
															</div>
														</form>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
															<div class="m-dropdown__content"></div>
														</div>
													</div>
												</div>
											</div>
										</li>
                                            <li class="m-nav__item"  aria-haspopup="true">
											<a  href="#" class="m-nav__link ">
												<span class="m-nav__link-text">
													
												</span>
											</a>
										</li>
                                           
                                            <?php if($this->tank_auth->is_logged_in()){
                
                $user = User::get_id();
						$user_email = User::login_info($user)->email;
                ?>
											<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="<?php echo User::avatar_url($user);?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
													</span>
													<span class="m-topbar__welcome  m--hide">
														Hello,&nbsp;
													</span>
													<span class="m-topbar__username  m--hide">
														<?php echo User::displayName($user);?>
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url(<?=base_url()?>assets/images/user_profile_bg.jpg); background-size: cover;">
															<div class="m-card-user m-card-user--skin-dark">
																<div class="m-card-user__pic">
																	<img src="<?php echo User::avatar_url($user);?>" class="m--img-rounded m--marginless" alt=""/>
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		<?php echo User::displayName($user)?>
																	</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
																		<?=$user_email?>
																	</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section">
																		<span class="m-nav__section-text">
																			
																		</span>
																</li>
            <?php	                                                                      if(User::is_admin() or User::is_superadmin())
        {?>

	          		 				          		 			<li class="m-nav__item">
																		<a href="<?=base_url()?>admin" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-dashboard"></i>
																			<span class="m-nav__link-text">
																				Admin Panel
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
	          		 	<?php }
    
                              if(User::is_contributor())
        {?>
	          		 			<li class="m-nav__item">
																		<a href="<?=base_url()?>dashboard" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-dashboard"></i>
																			<span class="m-nav__link-text">
																				My Dashboard
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
	          		 	<?php }
                                                                    
                        if(!User::is_admin()){?>
																	<li class="m-nav__item">
																		<a href="<?=base_url()?>profile/<?=User::displayName($user)?>" class="m-nav__link">
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
                                                                    <?php
                                             }
                                                                    ?>
																	<li class="m-nav__item">
																		<a href="<?=base_url()?>account_settings" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">
																					Account settings
																			</span>
																		</a>
                                                                        
																	</li>
                                                                    
																	<li class="m-nav__item">
																		<a href="<?=base_url()?>billing" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">
																				Billing
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="<?=base_url()?>logout" class="btn m-btn--pill btn-focus m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																			Logout
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
                                            <?php }else{?>
        	
                                            <li  class="m-nav__item">
												<a href="<?=base_url()?>register" class="m-nav__link ">
													<span class="m-nav__link-text btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
														Sign up
													</span>
												</a>
											</li>
                                            <li  class="m-nav__item">
												<a href="<?=base_url()?>login" class="m-nav__link">
													<span class="m-nav__link-text btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
														Login
													</span>
												</a>
											</li>
        	  <?php }?>
										</ul>
									</div>
								</div>
							</div>
							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				
			</header>
			<!-- end::Header -->
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
                <?php  echo $template['body'];?>

			</div>
			<!-- end::Body -->
			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <footer class="footer-main">
    	
    		
    		<div class="row">
    			<div class="col-md-4">
    				<a href="<?=base_url()?>">
          	<img src="<?=base_url('assets/images')?>/<?=config_item('company_logo')?>" class="img-responsive" />
          	</a>
    			   <p class="margin-tp-xs"><?=config_item('description')?></p>
    			</div><!-- ./End col-md-* -->		
    			
    			<div class="col-md-3 margin-tp-xs">
    				<h4>Categories</h4>
    
        				                            <?php if(!empty($categories)){
                            $i = 1;
    
                            ?>
                            <ul class="list-unstyled">
                                <?php foreach($categories as $category){
                                $slug = $category->slug;
                                                      ?>
                                    <li>
                                        <a href="<?=base_url()?>category/<?=$category->slug?>" class="link-footer">
                                            <span class="title"> <?=$category->name?></span>
                                        </a>
                                    </li>
                                    
                                <?php
                            $i++;
                            }
                                ?>
                              <li><a href="categories">
        			<strong>View All <i class="fa fa-long-arrow-right"></i></strong>
        		</a></li>  
                    </ul>
                                <?php }
                                ?>
    			</div><!-- ./End col-md-* -->
    			
    			<div class="col-md-2 margin-tp-xs">
    				<h4 >Account</h4>
    				<ul class="list-unstyled">
        			
        		<?php if($this->tank_auth->is_logged_in()){
                
                $user = User::get_id();
						$user_email = User::login_info($user)->email;
              if(User::is_admin() or User::is_superadmin())
        {?>
	          		 	<li>
	          		 		<a href="admin"  class="link-footer">
	          		 			Dashboard</a>
	          		 			</li>
	          		 			<li role="separator" class="divider"></li>
	          		 	<?php }
    
                              if(User::is_contributor())
        {?>
	          		 	<li>
	          		 		<a href="<?=base_url()?>dashboard"  class="link-footer">
	          		 			My Dashboard</a>
	          		 			</li>
	          		 			<li role="separator" class="divider"></li>
	          		 	<?php }?>

	          		 		<li>
	          		 			<a href="<?=base_url()?>collections" class="link-footer">
	          		 			Collections
	          		 		</a></li>

	          		 		<li>
	          		 			<a href="<?=base_url()?>likes"  class="link-footer">
	          		 				Likes
	          		 				</a>
	          		 		</li>

	          		 		<li>
	          		 			<a href="account"  class="link-footer">
	          		 				Account settings
	          		 				</a>
	          		 		</li>
	          		 		<li>
	          		 			<a href="<?=base_url()?>logout"  class="link-footer">
	          		 				Logout
	          		 			</a>
	          		 		</li>


        		<?php }else{?>
        			<li>
        				<a class="link-footer" href="<?=base_url()?>register">
        					Sign up
        					</a>
        			</li>
        			<li>
        				<a class="link-footer" href="<?=base_url()?>login">
        					Login
        					</a>
        			</li>
                        <li>
        				<a class="link-footer" href="<?=base_url()?>join-now">
        					Become a Contributor
        					</a>
        			</li>
        	  <?php }?>
    				</ul>
    			</div><!-- ./End col-md-* -->
    		</div><!-- ./End Row -->
    </footer><!-- ***** Footer ***** -->
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
                                    &copy; <a href="<?=base_url()?>"  class="m-link">
    					 <?=config_item('website_name')?>
    				</a> - <?php echo date('Y'); ?>
								</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												About
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#"  class="m-nav__link">
											<span class="m-nav__link-text">
												Privacy
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												T&C
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Purchase
											</span>
										</a>
									</li>
									<li class="m-nav__item m-nav__item--last">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
		<!-- begin::Quick Sidebar -->
		
		<!-- end::Quick Sidebar -->
		<!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
				<!--begin::Base Scripts -->
		<script src="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/extra.js"></script>
    <script src="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/scripts.js"></script>

        <link href="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/jquery.tagsinput.min.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>themes/<?=config_item('theme')?>/assets/js/jquery.tagsinput.min.js"></script>
	</body>
	<!-- end::Body -->
</html>
