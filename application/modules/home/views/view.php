<?php
$project = App::get_project_by_slug($slug);
$slug = $project->cat;
$user = $project->created_by;
$designer = User::profile_info($user);
$cat = App::get_category_by_slug($slug);
 ?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header portlet-title">
            <div class="media">
	      		<img src="<?=base_url()?>assets/portfolio/<?=$project->picture?>" class="img-responsive" />
	      	</div><button type="button" class="close" data-dismiss="modal"> hide</button>
        <h3 class="modal-title caption-subject bold uppercase"><?=$project->title?><br/>
            <small><?=$cat->name?>
            </small>
        </h3> 
        </div>                                
        <div class=" modal-body"> 
             <div class="row">
   <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
    <div class="margin-t-10 sm-margin-t-0">
     <p><?=$project->description?></p>
      <p><?=$project->tags?></p>
    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Client:</strong><?=$project->client?></p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> <?=$designer->firstname?></p>
                                                        <?php if(!empty($project->url)){
                                                        ?>
                                                        <p class="margin-b-5"><strong>Wesbite:</strong> <a href="
<?=$project->url?>"><?=$project->url?></a></p>
                                                        <?php 
}
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
        </div>
        <div class="modal-footer form-actions"> 
        
        </div>
</div>
</div>
