<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">Blog</h1>
          <p class="subtitle-site"><strong><?=config_item('welcome_subtitle')?></strong></p>
      </div>
    </div>
<div class="m-container m-container--responsive m-container--xxl m-page__container row">
	
<!-- Col MD -->
<div class="col-xl-9">	
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
	  <div class="btn-block text-center">
	    			<i class="flaticon-circle ico-no-result"></i>
	    		</div>
	    		
	    		<h3 class="margin-top-none text-centre no-result no-result-mg">
	    		No results found yet!
	    	</h3>
	  <?php
        }
    ?>	
   	</div>
 </div><!-- /COL MD --><div class="col-xl-3 margin-top-20 margin-bottom-20 blog_area">	
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
 
 </div><!-- container wrap-ui -->