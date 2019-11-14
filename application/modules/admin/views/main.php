<div class="m-subheader ">
						<div class="d-flex">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Hi there, <?php echo User::displayName(User::get_id()); ?>! <small><?='Welcome back'?></small>
								</h3>
							</div>
							
						</div>
					</div> 
<div class="m-content">
						<!--Begin::Main Portlet-->
						
                 <?php
			$user_id = User::get_id();
			$name = User::profile_info($user_id)->firstname;
			$post = App::counter('posts');
            $blog = App::counter('blog');
            $clients = App::counter('users',array('role_id'=>4));
            
    		
    
			?>     

    <div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">
										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Properties 
												</h4>
												<br>
												<span class="m-widget24__desc">
													Properties Entries
												</span>
												<span class="m-widget24__stats m--font-brand">
													<?=$post?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: <?=$post?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													<a href="<?=base_url()?>posts/">
                                   
                                       View All
                                    
                                </a>
												</span>
												
											</div>
										</div>
										<!--end::Total Profit-->
									</div>
									<div class="col-xl-4">
										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Posts
												</h4>
												<br>
												<span class="m-widget24__desc">
													Post Entries
												</span>
												<span class="m-widget24__stats m--font-info">
													<?=$blog?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width:<?=$blog?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													<a href="<?=base_url('/')?>"> View All</a>
												</span>
												
											</div>
										</div>
										<!--end::New Feedbacks-->
									</div>
                                    <div class="col-xl-4">
										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Clients
												</h4>
												<br>
												<span class="m-widget24__desc">
													Registered Clients
												</span>
												<span class="m-widget24__stats m--font-info">
													<?=$clients?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width:<?=$clients?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													<a href="<?=base_url('/')?>"> View All</a>
												</span>
												
											</div>
										</div>
										<!--end::New Feedbacks-->
									</div>
								</div>
							</div>
						</div>
    <div class="row">
    
    <div class="col-xl-7">
								<!--begin:: Widgets/Support Tickets -->
								<div class="m-portlet m-portlet--full-height">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Available Properties
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget5">
								</div>
									</div>
								</div>
								<!--end:: Widgets/Support Tickets -->
							</div>
            <div class="col-xl-5">
								<!--begin:: Widgets/Support Tickets -->
								<div class="m-portlet m-portlet--full-height">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Sliders
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget5">
								</div>
									</div>
								</div>
								<!--end:: Widgets/Support Tickets -->
							</div>
    </div>   
    <div class="row">
    
    <div class="col-xl-7">
								<!--begin:: Widgets/Support Tickets -->
								<div class="m-portlet m-portlet--full-height">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Messages
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget5">
								</div>
									</div>
								</div>
								<!--end:: Widgets/Support Tickets -->
							</div>
            <div class="col-xl-5">
								<!--begin:: Widgets/Support Tickets -->
								<div class="m-portlet m-portlet--full-height">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Sliders
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget5">
								</div>
									</div>
								</div>
								<!--end:: Widgets/Support Tickets -->
							</div>
    </div>


                            </div>