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
										
									</div>
										<div class="m-portlet__body">
											
													<div class="row">
       <?php
    
                                                if(!empty($data)){
                                                    $slog = 1;

                                                    
                                                ?>
    
	                <?php
                                                     
                                                     foreach($data as $tag){
                                                         $date = $tag->created_at;
                                                ?>
            

                <div class="col-xl-4">
									<!--begin:: Widgets/Blog-->
									<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
										<div class="m-portlet__head m-portlet__head--fit">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-action">
													<button type="button" class="btn btn-sm m-btn--pill  btn-brand">
														<?php echo date("D - F j, Y", strtotime($date));?>
													</button>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div class="m-widget19">
												<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style1="height: 280px">
													<img src="<?=base_url('assets/posts/')?>/<?=$tag->post_img?>" alt="">
													<h3 class="m-widget19__title m--font-light">
														<?=$tag->title?>
													</h3>
													<div class="m-widget19__shadow"></div>
												</div>
												<div class="m-widget19__content">
													<div class="m-widget19__header">
														<div class="m-widget19__info">
															<span class="m-widget19__username">
																
															</span>
															
															
														</div>
													</div>
													<div class="m-widget19__body">
														<?=$tag->post_content?>
													</div>
												</div>
												<div class="m-widget19__action">
													<a href="<?=base_url('news')?>/<?=$tag->slug?>" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
														Read More
													</a>
												</div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Blog-->
								</div>
            <?php
                                                    $slog++; }
            ?>               
	  <?php    
                                                } else{ ?>
	  <div class="btn-block text-centre">
	    			<i class="flaticon-circle ico-no-result"></i>
	    		</div>
	    		
	    		<h3 class="margin-top-none text-centre no-result no-result-mg">
	    		No results found yet!
	    	</h3>
	  <?php
        }
    ?>	
   	</div>
												</div>
											</div>
										</div>
<div class="col-xl-3 margin-top-20 margin-bottom-20 blog_area">	
    <div class="m-portlet  m-portlet--full-height">
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