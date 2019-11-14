<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
      <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">Share </h1>
      </div>
</div>
<?php
$cat_list = App::category_list();
$cat = array('name' => 'cat','class' => 'form-control m-input');
?>
<?php
                
                $user = User::get_id();
						$user_email = User::login_info($user)->email;
                ?>

				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<div class="m-content">
							<div class="row">
								<div class="col-lg-4">
									
								</div>
								<div class="col-lg-6">
    
									<div class="m-portlet m-portlet--unair">
										
										<div class="m-portlet__body">
                                            <?=form_open_multipart('','class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="formUpload"') ?>
						<div class="m-portlet m-portlet--mobile">
								<div class="m-portlet__body">
								<div class="news-feed-form">
								<div class="form-group with-icon label-floating is-empty">
									
									<div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 50%;"> </div>
                                                        <div class="add-options-message">
                                                            <span class="btn btn-block btn-focus fileinput-button">
                                                                <span class="fileinput-new"> <i class="fa fa-image"></i> Add Image</span>
                                                                <span class=" fileinput-exists"> Change </span>
                                                                <input type="file" name="picture" class="form-input"> </span>
                                                            <a href="javascript:;" class="btn btn-block btn-focus fileinput-button fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
								</div>
								</div>
								</div>			
								</div>			

			<div class="panel panel-default">

				<div class="panel-body">
                 <!-- Start Form Group -->
                    <div class="form-group">
                      <label>Title</label>
                        <input type="text" value="" name="title" id="title" class="form-control" placeholder="Title">
                    </div><!-- /.form-group-->

                   <!-- Start Form Group -->
                    <div class="form-group">
                      <label>Tags</label>
                        <input type="text" value="" id="tagInput"  name="tags" class="form-control" placeholder="Tags">
                      	<p class="help-block">* </p>
                  </div><!-- /.form-group-->

                  <!-- Start Form Group -->
                    <div class="form-group">
                      <label>Category</label>
                      	<?php echo form_dropdown($cat,$cat_list); ?>
                  </div><!-- /.form-group-->

            



                  <div class="form-group">
                      <label>Description(optional)</label>
                      	<textarea name="description" rows="4" id="description" class="form-control" placeholder="Description(optional)"></textarea>
                    </div>

                    <!-- Alert -->
                    <div class="alert alert-danger display-none" id="dangerAlert">
							<ul class="list-unstyled" id="showErrors"></ul>
						</div><!-- Alert -->

                  <div class="box-footer">
                  	<hr />
                    <button type="submit" id="upload" class="btn btn-lg btn-focus pull-right"><i class="fa fa-cloud-upload myicon-right"></i> Upload</button>
                  </div><!-- /.box-footer -->
                            <?=form_close();?>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				</div>

