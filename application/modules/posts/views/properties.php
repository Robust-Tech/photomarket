<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Photo Stock
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
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Photo Stock
											</span>
										</a>
									</li>
									
									
								</ul>
							</div>
							
						</div>
					</div>
<div class="m-content">
    <div class="row">
    <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="m-portlet m-portlet--mobile">
                                    <div class="m-portlet__body">
                                        <div class="m_datatable" id="properties"></div>
                        </div>
                        </div>
                        </div>
    </div>
</div>
<script type="text/javascript">
      <?php
            //$tasks = Applib::retrieve(Applib::$tasks_table, array('project' => $project_id));
            $posts = App::posts();
            $post = json_encode($posts);
            ?>
var Datatable = function () {
	//== Private functions

	// demo initializer
	var properties = function () {

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
				field: "unique_id",
				title: "#",
				sortable: false, // disable sort for this column
				width: 100,
				textAlign: 'center',
				textAlign: 'center'
			},{
				field: "featured_img",
				title: "Thumbnail",
                width: 100,
                template: function (row) {
					return '<img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/properties/' + row.picture + '">';
				}
			}, {
				field: "price",
				title: "Price",
                width: 100
			}, {
				field: "status",
				title: "Status",
				width: 100
			}, {
				field: "created_by",
				title: "Photographer",
				width: 100
			}, {
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					return '\<a href="<?=base_url()?>posts/edit/'+ row.slug +'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="modal" data-target="#Modal" title="Edit '+ row.title +' ">\
                            <i class="la la-edit"></i>\
                        </a>\
                        <a href="<?=base_url()?>posts/delete_port/'+ row.slug +'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"  data-toggle="modal" data-target="#Modal" title="Delete '+ row.title +'">\
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
			properties();
		}
	};
}();
    </script>