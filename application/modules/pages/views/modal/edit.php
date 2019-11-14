<?php
$port = App::get_id($id, $table);
//$priority_list = App::priority_list();
$title = array('name' => 'title','class' => 'form-control  m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Title', 'value' => $port->title );
$slug = array('name' => 'slug','class' => 'form-control m-input','maxlength' => 80,'size' => 30, 'placeholder' => 'Slug', 'value' => $port->slug );
$desc = array('name' => 'content','class' => 'form-control m-input summernote', 'placeholder' => 'Content', 'value' => $port->content );
 ?>


<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Pages.
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?=base_url()?>admin" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>pages" class="m-nav__link">
											<span class="m-nav__link-text">
												Pages
											</span>
										</a>
									</li>
                                    <li class="m-nav__separator">
										-
									</li>
                                    <li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Edit Page
											</span>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
<div class="m-content">
    <div class="row">
        <div class="col-md-8"> <div class="m-portlet">
                                    <?=form_open_multipart('','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"')?>
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
                                   <input type="hidden" name="id" value="<?=$id?>">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Title:
													</label>
													<?php echo form_input($title); ?>
													
												</div>
												<div class="col-lg-6">
													<label class="">
														Slug:
													</label>
													<?php echo form_input($slug); ?>
													
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
                             <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="submit" class="btn btn-primary">
															Save
														</button>
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
