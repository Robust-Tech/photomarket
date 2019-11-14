<?php
$port = App::get_project_by_slug($slug);
$cat_list = App::category_list();
//$priority_list = App::priority_list();
$title = array('name' => 'title','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Project Name', 'value' => $port->title );
$client = array('name' => 'client','class' => 'form-control m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Client', 'value' => $port->client );
$url = array('name' => 'url','class' => 'form-control m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Website Url ', 'value' => $port->url );
$tags = array('name' => 'tags','class' => 'form-control m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Tags', 'value' => $port->tags );

$type = array('name' => 'type','class' => 'custom-select');
$cat = array('name' => 'cat','class' => 'form-control m-input');
$desc = array('name' => 'desc','class' => 'wysihtml5 form-control', 'placeholder' => 'Description (Optional)', 'value' => $port->description );

$type_options = array('' => 'Select Type','website' => 'Web site','app' => 'App','branding' => 'Branding',);
 ?>


<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">
											Edit <?=$port->title?>
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
										</button>
									</div>
                                    <?=form_open_multipart(base_url().'portfolio/create','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"')?>
									<div class="modal-body">
										
                                    <input type="hidden" name="slug" value="<?=$slug?>">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Project Name:
													</label>
													<?php echo form_input($title); ?>
													
												</div>
												<div class="col-lg-6">
													<label class="">
														Client:
													</label>
													<?php echo form_input($client); ?>
													
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Website Url
													</label>
													<?php echo form_input($url); ?>
												</div>
												<div class="col-lg-4">
													<label class="">
														Attachement Image
													</label>
													<div class="m-input-icon m-input-icon--right">
														<label class="custom-file">
									<input type="file" id="picture" class="custom-file-input" name="picture">
									<span class="custom-file-control"></span>
								</label>
														
													</div>
													
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Tags
													</label>
													<?php echo form_input($tags); ?>
												</div>
												<div class="col-lg-6">
													<label class="">
														Category
													</label>
													<div class="m-input-icon m-input-icon--right">
														<?php echo form_dropdown($cat,$cat_list,$port->cat); ?>
														
													</div>
													
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
														Description:
													</label>
													<?php echo form_textarea($desc); ?>
												</div>
											</div>
										
										
									
                                    
                                
    </div>

									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">
											Close
										</button>
										<button type="submit" class="btn btn-primary">
											Save changes
										</button>
									</div>
<?=form_close()?>
								</div>
</div>