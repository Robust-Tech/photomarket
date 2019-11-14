
<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm"><?=$title?></h1>
          <p class="subtitle-site"><strong><?=config_item('welcome_subtitle')?></strong></p>
      </div>
    </div>
<div class="container">
	
<!-- Col MD -->
<div class="row">	
<div class="col-md-8">	
<div class="m-portlet m-portlet--bordered m-portlet--unair">
                                    <div class="m-portlet__body">
<img src="<?= base_url().'assets/stock/'.$stock->post_img?> " alt="<?=$title?>">
</div>
									</div>
</div>
   	<div class="col-md-4">	
    <div class="m-portlet  m-portlet--full-height">
        <div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													#<?=$stock->token_id?>
													<small>
														Unique ID
													</small>
												</h3>
											</div>
										</div>
									</div>
										<div class="m-portlet__body">
										    <blockquote>
										        <?=$stock->description?>
										    </blockquote>
										    <p>
												<a class="btn bs-placeholder btn-default" href="<?=base_url()?>category/<?=slugger($stock->name)?>"><?=$stock->name?></a>
													
												</p>
						<p>
												by: <a href="<?=base_url()?>user/<?=$stock->username?>"><?=$stock->username?></a>
													
												</p>
												<?php if(!$this->tank_auth->is_logged_in()){?>
												Already have an account?<br/>
												<a href="<?=base_url()?>login" class="btn btn-outline-focus m-btn--pill">Sign In</a>
												<?php
												} elseif(!User::is_admin() OR !User::is_constributor()) {
												?>
												
												<?php
												}
												?>
										</div>
									</div>
   	
 </div>
 </div><!-- /COL MD -->
 
 </div><!-- container wrap-ui -->