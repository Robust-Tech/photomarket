<?php

$seo_title = array('name' => 'paypal_id','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Paypal Email', 'value'=> config_item('paypal_email'));
 $title= array('name' => 'currency','class' => 'form-control  m-input');
$address = array('name' => 'sandbox','class' => 'form-control  m-input');
$carrencies = App::currencies_list();
$enabled = array('' => 'Paypal Enabled','enabled' => 'Enabled', 'disabled' => 'Disabled');
 ?>
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h4 class="m-subheader__title ">
									<a href="<?=base_url('dashboard')?>"><?=('Dashboard')?></a> <small> / Payment Settings </small>
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
														Paypal Email:
													</label>
													<?php echo form_input($seo_title); ?>
													
												</div><div class="col-lg-4">
													<label>
														Currency:
													</label>
													<?php echo form_dropdown($title,$carrencies,config_item('paypal_currency')); ?>
													
												</div>
												<div class="col-lg-4">
													<label>
														Enable Paypal:
													</label>
													<?php echo form_dropdown($address,$enabled,config_item('paypal_enabled')); ?>
													
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