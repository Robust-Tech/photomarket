<div class="jumbotron md index-header">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm"><?=$title?></h1>
          <p class="subtitle-site"><strong><div class="d-flex align-items-center">
								<div class="mr-auto">
									<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
										<li class="m-nav__item m-nav__item--home">
											<a href="<?=base_url()?>" class="m-nav__link m-nav__link--icon">
												<i class="m-nav__link-icon la la-home"></i>
											</a>
										</li>
										<li class="m-nav__separator">
											-
										</li>
										<li class="m-nav__item">
											<a href="<?=base_url('news')?>" class="m-nav__link">
												<span class="m-nav__link-text">
													News
												</span>
											</a>
										</li>
										<li class="m-nav__separator">
											-
										</li>
										<li class="m-nav__item">
											<a href="<?=base_url($post->slug)?>" class="m-nav__link">
												<span class="m-nav__link-text">
													<?=$title?>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div></strong></p>
      </div>
    </div>
<div class="m-container m-container--responsive m-container--xxl m-page__container">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
<div class="m-content">
<div class="row">
    <div class="col-xl-2">	
    <div class="m-portlet">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Advance Search
													</h3>
												</div>
											</div>
											
										</div>
										<div class="m-portlet__body">
											
										</div>
									</div>
        <div class="m-portlet">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Related Post
													</h3>
												</div>
											</div>
											
										</div>
										<div class="m-portlet__body">
											
										</div>
									</div>
    
        				                            
 </div>
							<div class="col-xl-7">	


									<!--begin:: Widgets/Blog-->
									<div class="m-portlet m-portlet--bordered-semi">
										<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="la la-thumb-tack m--font-success"></i>
												</span>
												<h3 class="m-portlet__head-text m--font-success">
													<?=$title?>
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item">
													<span class="m-portlet__nav-link btn  m-btn m-btn--icon m-btn--pill">
														<i class="flaticon-time-2"></i> <?php echo date("D - F j, Y", strtotime($post->created_at));?>
													</span>
                                                </li>
				
											</ul>
										</div>
									</div>
										<div class="m-portlet__body">
											
													<img src="<?=base_url('assets/posts/')?>/<?=$post->post_img?>" alt="">
												
													
													<div>
														<?=$post->post_content?>
													</div>
												</div>
											</div>
										</div>
<div class="col-xl-3 margin-top-20 margin-bottom-20 blog_area">	
    <div class="m-portlet">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Categories
													</h3>
												</div>
											</div>
											
										</div>
										<div class="m-portlet__body">
											<?php if(!empty($post_categories)){
                            $i = 1;
    
                            ?>
                            <div class="m-list-timeline">
                            <div class="m-list-timeline__items">
                                <?php foreach($post_categories as $category){
                                $slug = $category->slug;
                                                      ?>
                               
                                    <div class="m-list-timeline__item">
                                         <span class="m-list-timeline__badge"></span>
                                        <a href="<?=base_url()?>news/category/<?=$category->slug?>">
                                            <span class="m-list-timeline__text"> <?=$category->name?></span>
                                        </a>
                                    </div>
                                    
                                <?php
                            $i++;
                            }
                                ?>
                    </div>
                    </div>
                                <?php }
                                ?>
										</div>
									</div>
      
    
        				                            
 </div>
						</div>
						</div>

 
 </div><!-- container wrap-ui -->
 </div>