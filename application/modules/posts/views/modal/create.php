<?php
$cat_list = App::category_list();
?>
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									New Property
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?=base_url()?>/admin" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>/posts" class="m-nav__link">
											<span class="m-nav__link-text">
												Properties
											</span>
										</a>
									</li><li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												New Property
											</span>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

<div class="m-content">
<div class="row">
							<div class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<?=form_open_multipart('','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"') ?>
										<div class="m-portlet__body">
										<div class="col-lg-11">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Property Name:
													</label>
													<input type="text" class="form-control m-input"  name="title" placeholder="Enter Property Name">
													
												</div>
                                                <div class="col-lg-6">
													<label>
														Keywords:
													</label>
													<input type="text" class="form-control m-input"  name="keywords" placeholder="Enter keywords">
													
												</div>
												
											</div><div class="form-group m-form__group row">
												
                                                
												<div class="col-lg-8">
													<label class="">
														Description:
													</label>
                                                    <textarea class="form-control m-input summernote" name="description"></textarea>
													
												</div>
                                            <div class="col-lg-4">
													<label>
														Featured Image:
													</label>
                                                
								<label class="custom-file">
													<input type="file" class="form-control m-input custom-file-input" name="picture">
									<span class="custom-file-control"></span>
                                                </label>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Sale Type:
													</label>
													<div class="m-input-icon m-input-icon--right">
														  <select class="form-control m-input custom-select" name="sale_type">
                                                              <option selected>
										Sale type
									</option>
                                                           <option value="sale">
										For Sale
									</option>
									<option value="rental">
										For Rental
									</option>  
                                                        </select>
														
													</div>
													
												</div>
												<div class="col-lg-4">
													<label class="">
														Property Type
													</label>
													<div class="m-input-icon m-input-icon--right">
                                                        <select class="form-control m-input custom-select" name="property_type">
                                                        <option selected>
										Property type
									</option>
									<option value="cottage">
										Cottage
									</option>
									<option value="flat_appartment">
										Flat Appartment
									</option>
									<option value="room">
										Room
									</option>
									<option value="house">
										House
									</option>
									<option value="office_space">
										Office Space
									</option>
                                                        </select>
														
													</div>
													
												</div>
                                                <div class="col-lg-4">
													<label class="">
														Price:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" name="price" class="form-control m-input" placeholder="Price">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-money"></i>
															</span>
														</span>
													</div>
													
												</div>
											</div>
                                            <div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Rooms
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="Rooms">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-bed"></i>
															</span>
														</span>
													</div>
													
												</div>
												<div class="col-lg-4">
													<label class="">
														Bathroom:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="Bathrooms">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="fa fa-shower"></i>
															</span>
														</span>
													</div>
													
												</div>
												<div class="col-lg-4">
													<label class="">
														Parking:
													</label>
													<div class="m-input-icon m-input-icon--right">
														  <select class="form-control m-input" name="parking">
                                                              <option selected>
										Parking
									</option>
                                                           <option value="yes">
										Yes
									</option>
									<option value="no">
										No
									</option>  
                                                        </select>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-automobile"></i>
															</span>
														</span>
													</div>
													
												</div>
											</div>
                                            <div class="form-group m-form__group row">
                                            <div class="col-lg-12">
												<div class="m-checkbox-inline">
																	<label class="m-checkbox">
																		<input type="checkbox" name="featured">
																		Featured
																		<span></span>
																	</label>
																	<label class="m-checkbox">
																		<input type="checkbox" name="activated">
																		Activated
																		<span></span>
																	</label>
																	<label class="m-checkbox">
																		<input type="checkbox" name="visible_public">
																		Visible Public 
																		<span></span>
																	</label>
																</div>
											</div>
											</div>
                                            <div class="form-group m-form__group row">
                                                <div class="col-lg-2">
                                                <label>
														<h3>Distance:</h3>
													</label>
                                                </div>
												<div class="col-lg-5">
													<label>
														Malls:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															
														</span>
													</div>
													<label>
														Schools:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															
														</span>
													</div>
													
												</div>
												<div class="col-lg-5">
													<label>
														Bus /Train / Taxis:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															
														</span>
													</div>
													<label>
														Pharmacies:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="number" class="form-control m-input" placeholder="">
														<span class="m-input-icon__icon m-input-icon__icon--right">
														</span>
													</div>
												</div>
											</div>
                                            <div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Address:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input" placeholder="Enter your address">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
													
												</div>
												<div class="col-lg-6">
													<label class="">
														City:
													</label>
													<div class="m-input-icon m-input-icon--right">
                                                        <select class="form-control m-input custom-select">
                                                        <option selected>
										City
									</option></select>
														
													</div>
													
												</div>
											</div>
											
										</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="reset" class="btn btn-primary">
															Save
														</button>
														<button type="reset" class="btn btn-secondary">
															Cancel
														</button>
													</div>
												</div>
											</div>
										</div>
									<?=form_close();?>
									<!--end::Form-->
								</div>
								</div>
								</div>
								</div>