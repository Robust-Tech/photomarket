<?php
$cat_list = App::category_list();
$cat = array('name' => 'cat','class' => 'form-control m-input');
?>
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Posts.
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
										<a href="<?=base_url()?>blog" class="m-nav__link">
											<span class="m-nav__link-text">
												Posts
											</span>
										</a>
									</li>
                                    <li class="m-nav__separator">
										-
									</li>
                                    <li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Add New Post
											</span>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
<div class="m-content">
    <?=form_open_multipart('','class="m-form m-form--fit m-form--group-seperator-dashed"')?>
    <div class="row">
        <div class="col-md-8">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                
                                    
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
                                   <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
												Title:
													</label>
				<input type="text" class="form-control m-input"  name="title" placeholder="Title">
												</div>
											</div> 
                                   <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
												Content:
													</label>
													 <textarea class="form-control m-input summernote" name="content"></textarea>
												</div>
											</div>
                                            
                        </div>       
                        
                        </div>
         <div class="col-md-4">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="m-portlet">
                                    
                                    <div class="m-portlet__body">

                                   <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
												Category:
													</label>
				<?php echo form_dropdown($cat,$cat_list); ?>
												</div>
											</div> 
                                        <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="">
														Attachement Image
													</label>
													<div class="m-input-icon m-input-icon--right">
														<label class="custom-file">
									<input type="file" id="picture" class="custom-file-input" name="picture">
									<span class="custom-file-control"></span>
								</label></div>
											</div> 
											</div>
                                        <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
														Status:
													</label>
                                                
								<select class="form-control m-input" name="post_status">
									<option value="1">
										Published
									</option>
									<option value="0">
										Draft
									</option>
								</select>
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
												</div>
											</div>
										</div>       
                                    
                        </div>
                        </div>
                        </div>
    </div>

<?=form_close()?>
    </div>