
<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm"><?=$title?></h1>
          <p class="subtitle-site"><strong><?=config_item('welcome_subtitle')?></strong></p>
      </div>
    </div>
<div class="container margin-bottom-40">
	
<!-- Col MD -->
<div class="col-md-12 margin-top-20 margin-bottom-20">	
    
       <?php
    
                     $images = App::get_images_by_cat_id($category->id);                           if(!empty($images)){
                                                    $slog = 1;
                                                    
                                                ?>
    
	                <?php
                                                     
                                                     foreach($images as $tag){
                                                ?>
            
            				

            
            
            <?php
                                                    $slog++; }
            ?>               
	  <?php    
                                                } else{ ?>
	  <div class="btn-block text-center">
	    			<i class="icon icon-Picture ico-no-result"></i>
	    		</div>
	    		
	    		<h3 class="margin-top-none text-center no-result no-result-mg">
	    		No results found yet!
	    	</h3>
	  <?php
        }
    ?>	
   	
 </div><!-- /COL MD -->
 
 </div><!-- container wrap-ui -->