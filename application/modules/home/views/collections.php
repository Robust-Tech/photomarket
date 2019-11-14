<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">Collections</h1>
          <p class="subtitle-site"><strong><?=config_item('welcome_subtitle')?></strong></p>
      </div>
    </div>
<div class="container margin-bottom-40">
	
<!-- Col MD -->
<div class="col-md-12 margin-top-20 margin-bottom-20">	
    
       <?php
                                                if(!empty($collections)){
                                                    $slog = 1;
                                                    
                                                ?>
    <div id="imagesFlex" class="flex-images btn-block margin-bottom-40 dataResult">
	                <?php
                                                     
                                                     foreach($collections as $col){  $user = $col->user_id;
                                                ?>
            
            				<a href="<?=base_url('collection')?>/<?=$col->id?>" class="item hovercard">
	<!-- hover-content -->
	<span class="hover-content">
			<h5 class="text-overflow title-hover-content" title="{{$collection->title}}">
			 <?php if( $col->type == 'private' ) {?><span class="label label-default">Private</span>	 <?php 
                                                    } ?> <?=$col->title?>
				</h5>
			
			<h5 class="text-overflow author-label mg-bottom-xs" title="<?php echo User::displayName($user);?>">
				<img src="<?php echo User::avatar_url($user);?>" alt="User" class="img-circle" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;"> 
				<em><?php echo User::displayName($user);?></em>
				</h5>
				<span class="timeAgo btn-block date-color text-overflow" data="<?= date('c', strtotime( $col->created_at )) ?>"></span>
	</span><!-- hover-content -->
		
		<img src="{{ url('public/uploads/thumbnail',$imageCollection) }}" />
</a>

            
            
            <?php
                                                    $slog++; }
            ?>
			    	
	  </div><!-- Image Flex -->
	                    
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