<?php
                
                $user = User::get_id();
						$user_email = User::login_info($user)->email;
$assets = App::get_portfolio_by_user($user);
                ?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<div class="m-content">
							<div class="row">
								<div class="col-lg-4">
									<div class="m-portlet">
										<div class="m-portlet__body">
											<div class="m-card-profile">
												<div class="m-card-profile__title m--hide">
													Your Profile
												</div>
												<div class="m-card-profile__pic">
													<div class="m-card-profile__pic-wrapper">
														<img src="<?php echo User::avatar_url($user);?>" alt=""/>
													</div>
												</div>
												<div class="m-card-profile__details">
													<span class="m-card-profile__name">
														<?=User::displayName($user)?>
													</span>
													<a href="mailto:<?=$user_email?>" class="m-card-profile__email m-link">
														<?=$user_email?>
													</a>
												</div>
											</div>
											<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
												<li class="m-nav__separator m-nav__separator--fit"></li>
												<li class="m-nav__section m--hide">
													<span class="m-nav__section-text">
														Section
													</span>
												</li>
												<li class="m-nav__item">
													<a href="header/profile&amp;demo=default.html" class="m-nav__link">
														<i class="m-nav__link-icon flaticon-profile-1"></i>
														<span class="m-nav__link-title">
															<span class="m-nav__link-wrap">
																<span class="m-nav__link-text">
																	Account Setting
																</span>
															</span>
														</span>
													</a>
												</li>
                                                <?php 
    
                              if(User::is_client())
        {?>
	          		 			<li class="m-nav__item">
																		<a href="<?=base_url()?>Billing" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-dashboard"></i>
																			<span class="m-nav__link-text">
																				Billing
																			</span>
																		</a>
																	</li>
                                                <li class="m-nav__item">
																					<a href="<?=base_url('mypackges')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																						<span class="m-nav__link-text">
																							My Packages
																						</span>
																					</a>
																				</li>
																	
	          		 	<?php }?>
<?php 
    
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
                                                <li class="m-nav__item">
																					<a href="<?=base_url('upload')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																						<span class="m-nav__link-text">
																							Upload Asset
																						</span>
																					</a>
																				</li>
																	
	          		 	<?php }?>
												<li class="m-nav__item">
																					<a href="<?=base_url('collection')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-share"></i>
																						<span class="m-nav__link-text">
																							Create Collection
																						</span>
																					</a>
																				</li>												<li class="m-nav__item">
																					<a href="<?=base_url('downloads')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-share"></i>
																						<span class="m-nav__link-text">
																							Downloads
																						</span>
																					</a>
																				</li>
											</ul>
											<div class="m-portlet__body-separator"></div>
											<div class="m-widget1 m-widget1--paddingless">
                                                <?php 
    
                              if(User::is_contributor())
        {?>
<div class="m-widget1__item">
													<div class="row m-row--no-padding align-items-center">
														<div class="col">
															<h3 class="m-widget1__title">
																Profit
															</h3>
															<span class="m-widget1__desc">
																Awerage Weekly Profit
															</span>
														</div>
														<div class="col m--align-right">
															<span class="m-widget1__number m--font-brand">
																+$17,800
															</span>
														</div>
													</div>
												</div>
												<div class="m-widget1__item">
													<div class="row m-row--no-padding align-items-center">
														<div class="col">
															<h3 class="m-widget1__title">
																Stock Images
															</h3>
															<span class="m-widget1__desc">
																Number of images uploaded
															</span>
														</div>
														<div class="col m--align-right">
															<span class="m-widget1__number m--font-danger">
																+1,800
															</span>
														</div>
													</div>
												</div>
																	
	          		 	<?php }?>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8">
               <?php                         
                              if(User::is_contributor())
        {?>
									<div class="m-portlet m-portlet--unair m-portlet--tabs ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-tools">
												<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#my_assets" role="tab">
															<i class="flaticon-share m--hide"></i>
															My Assets
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#collects" role="tab">
															Collections
														</a>
													</li>
												</ul>
											</div>
											<div class="m-portlet__head-tools">
												<ul class="m-portlet__nav">
													<li class="m-portlet__nav-item">
														<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
															<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
																<i class="la la-plus"></i>
															</a>
															<div class="m-dropdown__wrapper">
																<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																<div class="m-dropdown__inner">
																	<div class="m-dropdown__body">
																		<div class="m-dropdown__content">
																			<ul class="m-nav">
																				<li class="m-nav__item">
																					<a href="<?=base_url('collection')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-share"></i>
																						<span class="m-nav__link-text">
																							Create Collection
																						</span>
																					</a>
																				</li>
																				<li class="m-nav__item">
																					<a href="<?=base_url('upload')?>" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																						<span class="m-nav__link-text">
																							Upload Asset
																						</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="my_assets">
												
    
		

            <?php
                                                if(!empty($assets)){
                                                    $slog = 1;
                                                    
                                                ?>
		
		<div class="iso-content">
            
             <?php                                      
            foreach($assets as $pro){  
            ?>
            
            				<div class="single-project iso-item">
				<div class="iso-overflow"></div>
				<img src="<?= base_url().'assets/stock/'.$pro->post_img ?> " alt="">
				<div class="project-lightbox">
					<div class="project-lightbox-middile">
						<h4><?=$pro->title?></h4>
						<a href="<?= base_url().'front/view/'.$pro->slug ?> "  data-toggle="Modal" >
							<i class="fa fa-expand" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

            
            
            <?php
                                                    $slog++; }
            ?>
            
			</div>
    <?php    
                                                } else{ ?>
                                                <h3>Coming soon</h3>
                                                <?php
                                                }
                                                ?>
    

											</div>
											<div class="tab-pane active" id="collections"></div>
										</div>
									</div>
								</div>
                                <?php 
                                }
                                ?>
							</div>
						</div>
					</div>
				</div>
    
			</div>