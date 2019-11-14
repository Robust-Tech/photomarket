
<div class="jumbotron index-header jumbotron_set jumbotron-cover <?php if($this->tank_auth->is_logged_in()){?> session-active-cover <?php }?>
">
      <div class="m-container wrap-jumbotron position-relative">
        <h1 class="title-site" id="titleSite"><img src="<?=base_url('assets/images')?>/<?=config_item('company_logobig')?>"/></h1>
        <p class="subtitle-site"><strong><?=config_item('welcome_text')?></strong></p>


        	<form role="search" autocomplete="on" action="<?=base_url('search')?>" method="get">
			  <div class="input-group input-group-lg searchBar">
                    <input type="text" class="form-control" name="q" id="btnItems" placeholder="Find photos: eg. 'black businesswoman'">
                    <span class="input-group-btn">
                      <button class="btn btn-main btn-flat" type="submit" id="btnSearch">
                      	<i class="flaticon-search-1"></i>
                      </button>
                    </span>
                  </div>
                  </form>
      </div><!-- container wrap-jumbotron -->
</div><!-- jumbotron -->
<section class="portfolio-area section-padding light-version-bg-one" id="portfolio">
		<div class="portfolio-overflow"></div>
		

            <?php
                                                if(!empty($stock)){
                                                    $slog = 1;
                                                    
                                                ?>
		
		<div class="iso-content">
            
             <?php                                      
            foreach($stock as $pro){  
            ?>
            <a href="<?= base_url().'stock/'.$pro->slug ?> ">
            				<div class="single-project iso-item">
				<div class="iso-overflow"></div>
				<img src="<?= base_url().'assets/stock/'.$pro->post_img ?> " alt="">
				<div class="project-lightbox">
					<div class="project-lightbox-middile">
						<h4><?=$pro->title?></h4>
						
							<i class="fa fa-expand" aria-hidden="true"></i>
					
					</div>
				</div>
			</div>
	</a>
            
            
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
    
	</section>


