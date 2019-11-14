
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Pricing
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
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Pricing Packages
											</span>
										</a>
									</li>
									
									
								</ul>
							</div>
							
						</div>
					</div>
<div class="m-content">
    <div class="row">
    <div class="col-md-7">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="m-portlet m-portlet--mobile">
                                    <div class="m-portlet__body">
                                        <div class="m_datatable" id="sliders"></div>
                        </div>
                        </div>
                        </div>
        <div class="col-md-5">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="m-portlet">
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
												Description:
													</label>
													 <textarea class="form-control m-input summernote" name="content"></textarea>
												</div>
											</div>  
                                   <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
														Price:
													</label>
                                                
								<input type="text" class="form-control m-input"  name="price" placeholder="Price">
												</div>
											</div>   
                                        <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
														Plan Type:
													</label>
                                                
								<select class="form-control m-input" name="planType">
									<option value="Monthly">
										Monthly
									</option>
									<option value="Yearly">
										Yearly
									</option>
								</select>
												</div>
											</div> 
                                        <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
														Number Of Images:
													</label>
                                                
								<input type="text" class="form-control m-input"  name="num_imgs" placeholder="Number Of Images">
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
<script type="text/javascript">
      <?php
            
            $posts = App::pricing();
            $post = json_encode($posts);
            ?>
var Datatable = function () {
	//== Private functions

	// initializer
	var cities = function () {

		var dataJSONArray = JSON.parse('<?=$post?>');
		var datatable = $('.m_datatable').mDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataJSONArray,
				pageSize: 6
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 450, // datatable's body's fixed height
				footer: false // display/hide footer
			},

			// column sorting(refer to Kendo UI)
			sortable: true,

			// column based filtering(refer to Kendo UI)
			filterable: true,

			pagination: true,

			// inline and bactch editing(cooming soon)
			// editable: false,

			// columns definition
			columns: [{
				field: "id",
				title: "#",
				sortable: false, // disable sort for this column
				width: 40,
				textAlign: 'center',
				selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			},{
				field: "name",
				title: "Title",
                width: 100
			},{
				field: "content",
				title: "Description",
                width: 100
			},{
				field: "price",
				title: "Price",
                width: 100
			},{
				field: "num_of_pictures",
				title: "No. of Pictures",
                width: 100
			},{
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					return '\<a href="<?=base_url()?>slideshow/edit/'+ row.id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="modal" data-target="#Modal" title="Edit '+ row.title +' ">\
                            <i class="la la-edit"></i>\
                        </a>\
                        <a href="<?=base_url()?>slideshow/delete/'+ row.id +'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"  data-toggle="modal" data-target="#Modal" title="Delete '+ row.title +'">\
                            <i class="la la-trash"></i>\
                        </a>\
					';
				}
            }]
		});


	};

	return {
		//== Public functions
		init: function () {
			// init dmeo
			cities();
		}
	};
}();
    </script>