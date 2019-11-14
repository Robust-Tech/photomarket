<?php

$seo_title = array('name' => 'welcome_text','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'welcome_text', 'value'=> config_item('welcome_text'));
 $title= array('name' => 'welcome_subtitle','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'welcome_subtitle', 'value'=> config_item('welcome_subtitle'));
$city = array('name' => 'tags_limit','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'tags_limit', 'value'=> config_item('tags_limit'));
$country = array('name' => 'file_size_allowed','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'file_size_allowed', 'value'=> config_item('file_size_allowed'));
$address = array('name' => 'upload_limit','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'upload_limit', 'value'=> config_item('upload_limit'));
$desc = array('name' => 'google_analytics','class' => 'form-control', 'placeholder' => 'google analytics','rows'=>3);
$key = array('name' => 'description','class' => 'form-control', 'placeholder' => 'description','rows'=>3,'value'=> config_item('description'));
 ?>
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h4 class="m-subheader__title ">
									<a href="<?=base_url('dashboard')?>"><?=('Dashboard')?></a> <small> / Settings </small>
								</h4>
							</div>
							
						</div>
					</div> 
<div class="m-content">

<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="m-portlet m-portlet--mobile">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Website Settings
													</h3>
												</div>
											</div>
                                        	<div class="m-portlet__head-tools">
											</div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="col-sm-12">
                <?php if ($this->session->flashdata('success') != null) {  ?>
                <div class="alert alert-success alert-dismissible" role="alert"> 
                    <?php echo $this->session->flashdata('success'); ?>
                </div> 
                <?php } ?>
                
                <?php if ($this->session->flashdata('exception') != null) {  ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $this->session->flashdata('exception'); ?>
                </div>
                <?php } ?> 
            </div>
                                        <?=form_open_multipart('','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"')?>
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Welcome Text:
													</label>
													<?php echo form_input($seo_title); ?>
													
												</div><div class="col-lg-4">
													<label>
														Welcome Subtitle:
													</label>
													<?php echo form_input($title); ?>
													
												</div>
											</div>
                                            <div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Upload Limit:
													</label>
													<?php echo form_input($address); ?>
													
												</div><div class="col-lg-4">
													<label>
												Tags Limit:
													</label>
													<?php echo form_input($city); ?>
													
												</div><div class="col-lg-4">
													<label>
														File Size Allowed:
													</label>
													<?php echo form_input($country); ?>
													
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Google Analytics
													</label>
													<?php echo form_textarea($desc); ?>
												</div><div class="col-lg-6">
													<label>
														Descriptions:
													</label>
													<?php echo form_textarea($key); ?>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
                                                        <?php echo form_submit('submit', 'Save','class="btn btn-primary"'); ?>
													</div>
													<div class="col-lg-6 m--align-right">
														<button type="reset" class="btn btn-secondary">
															Cancel
														</button>
													</div>
												</div>
											</div>
										</div>
									<?=form_close()?>
                                    </div>
                                </div>
    </div>
</div>
</div>