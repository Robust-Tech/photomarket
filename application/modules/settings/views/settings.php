<?php

$seo_title = array('name' => 'website_name','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'SEO Title', 'value'=> config_item('website_name'));
$address = array('name' => 'company_address','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'SEO Title', 'value'=> config_item('company_address'));
$city = array('name' => 'company_city','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Company City', 'value'=> config_item('company_city'));
$country = array('name' => 'company_country','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Company Country', 'value'=> config_item('company_country'));
$title = array('name' => 'company_name','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Company Name', 'value'=> config_item('company_name'));
$email = array('name' => 'company_email','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Company Email', 'value'=> config_item('company_email'));
$url = array('name' => 'company_domain','class' => 'form-control m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'domain Url ','value'=>config_item('company_domain'));
$desc = array('name' => 'site_desc','class' => 'form-control', 'placeholder' => 'Description (Optional)','rows'=>3);
$key = array('name' => 'keywords','class' => 'form-control', 'placeholder' => 'Keywords (Optional)','rows'=>3);
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
														System Setting
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
                                        <?=form_open_multipart(base_url().'settings/update','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"')?>
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														SEO Title:
													</label>
													<?php echo form_input($seo_title); ?>
													
												</div><div class="col-lg-4">
													<label>
														System Name:
													</label>
													<?php echo form_input($title); ?>
													
												</div><div class="col-lg-4">
													<label>
														System Email:
													</label>
													<?php echo form_input($email); ?>
													
												</div>
											</div>
                                            <div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Address:
													</label>
													<?php echo form_input($address); ?>
													
												</div><div class="col-lg-4">
													<label>
														City:
													</label>
													<?php echo form_input($city); ?>
													
												</div><div class="col-lg-4">
													<label>
														Country:
													</label>
													<?php echo form_input($country); ?>
													
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Domain Url
													</label>
													<?php echo form_input($url); ?>
												</div>
												<div class="col-lg-6">
													<label class="">
														logo
													</label>
													<div class="m-input-icon m-input-icon--right">
														<label class="custom-file">
									<input type="file" id="picture" class="custom-file-input" name="logo">
									<span class="custom-file-control"></span>
								</label>
														
													</div>
													
												</div>
                                                
											</div>
								
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Meta Description:
													</label>
													<?php echo form_textarea($desc); ?>
												</div><div class="col-lg-6">
													<label>
														Meta Keywords:
													</label>
													<?php echo form_textarea($key); ?>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="submit" class="btn btn-primary">
															Save
														</button>
														
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