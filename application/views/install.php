<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/admin/images/logo.png">

    <title> Portfalion CMS Installer</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?=base_url()?>assets/install/css/app.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/install/js/fuelux/fuelux.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js" cache="false">
    </script>
    <script src="js/ie/respond.min.js" cache="false">
    </script>
    <script src="js/ie/excanvas.js" cache="false">
    </script> <![endif]-->
</head>
<body>

<!--main content start-->
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">

    <div class="container" style="width:50%">
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>You're Installing Portfalion CMS</strong>
            </header>

            <div class = "panel-body wrapper-lg">

                <?php
                $step1 = $step2 = $step3 = $step4 =  '';
                $badge1 = $badge2 = $badge3 = $badge4 ='badge';
                if(isset($_GET['step'])){
                    switch ($_GET['step']) {
                        case '2':
                            $step2 = 'active'; $badge2='badge badge-success';
                            break;
                        case '3':
                            $step3 = 'active'; $badge3='badge badge-success';
                            break;
                        case '4':
                            $step4 = 'active'; $badge4='badge badge-success';
                            break;


                        default:
                            $step1 = 'active'; $badge1='badge badge-success';
                            break;
                    }
                }else $step1 = 'active'; $badge1='badge';
                ?>


                <div class="panel panel-default wizard">
                    <div class="wizard-steps clearfix" id="form-wizard">
                        <ul class="steps">
                            <li class="<?=$step1?>"><span class="<?=$badge1?>">1</span>System Check</li>
                            <li class="<?=$step2?>"><span class="<?=$badge2?>">2</span>Database Setup</li>
                            <li class="<?=$step3?>"><span class="<?=$badge3?>">3</span>Portfalio Setup</li>
                            <li class="<?=$step4?>"><span class="<?=$badge4?>">4</span>Admin Setup</li>
                        </ul>
                    </div>
                    <div class="step-content clearfix">

                        <?php
                        if($this->session->flashdata('message')){ ?>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-info-sign"></i><?=$this->session->flashdata('message')?>
                            </div>
                        <?php } ?>

                        <div class="step-pane <?=$step1?>" id="step1">


                            <?php
                            $config_file = "./app/config/config.php";
                            $database_file = "./app/config/database.php";
                            $autoload_file = "./app/config/autoload.php";
                            $route_file = "./app/config/routes.php";
                            $htaccess_file = ".htaccess";
                            $error = FALSE;
                            if(phpversion() < "5.3"){ $error = TRUE;
                                echo "<div class='alert alert-danger'>Your PHP version is ".phpversion()."! PHP 5.3 or higher required!</div>"; }else{
                                echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> You are running PHP ".phpversion()."</div>";
                            }


                            if(!extension_loaded('mysqli')){$error = TRUE; echo "<div class='alert alert-danger'>Mysqli PHP extension missing!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Mysqli PHP extension loaded!</div>";}
                            if(!is_writeable($database_file)){$error = TRUE; echo "<div class='alert alert-danger'>Database File (app/config/database.php) is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Database file is writeable!</div>";}
                            if(!is_writeable($config_file)){$error = TRUE; echo "<div class='alert alert-danger'>Config File (app/config/config.php) is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Config file is writeable!</div>";}
                            if(!is_writeable($route_file)){$error = TRUE; echo "<div class='alert alert-danger'>Route File (app/config/routes.php) is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Routes file is writeable!</div>";}
                            if(!is_writeable($autoload_file)){$error = TRUE; echo "<div class='alert alert-danger'>Autoload File (app/config/autoload.php) is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Autoload file is writeable!</div>";}
                            if(!is_writeable($htaccess_file)){$error = TRUE; echo "<div class='alert alert-danger'>HTACCESS File (.htaccess) is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> HTACCESS file is writeable!</div>";}

                            if(!is_writeable("./assets/tmp")){echo "<div class='alert alert-danger'><i class='fa fa-times'></i> /assets/tmp folder is not writeable!</div>";}else{echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> /assets/tmp folder is writeable!</div>";}

                            
                            ?>

                            <div class="actions pull-left">
                                <a href="<?php echo base_url()?><?=config_item('index_page')?>/installer/start" class="btn btn-success btn-sm">Next</a>
                            </div>

                        </div>

                        <div class="step-pane <?=$step2?>" id="step2">
        <?php
             $attributes = array('class' => 'm-b-sm form-horizontal','id' => 'database','novalidate' => 'novalidate');
          echo form_open(base_url().config_item('index_page').'/installer/db_setup',$attributes); ?>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Database Host</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control"  placeholder="localhost" name="hostname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Database Name</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control"  placeholder="Database Name" name="database">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Database Username</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="username" name="username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Database Password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" placeholder="Passowrd" name="password">
                                    </div>
                                </div>






                                <div class="actions pull-left">
                                    <a href="<?php echo base_url()?><?=config_item('index_page')?>/installer" class="btn btn-success btn-sm">Previous</a>
                                    <button type="submit" class="btn btn-success btn-sm">Next</button>
                                </div>

                            <?=form_close()?>
                        </div>
<div class="step-pane <?=$step3?>" id="step3">

        <?php
             $attributes = array('class' => 'm-b-sm form-horizontal','id' => 'school_settings','novalidate'=>'novalidate');
          echo form_open_multipart(base_url().config_item('index_page').'/installer/portfalio_setup',$attributes); ?>

                                <?php
                                $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
                                $base_url .= "://".$_SERVER['HTTP_HOST'];
                                $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

                                ?>
    

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Portfalio Name</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="Portfalio Name" name="website_name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Domain URL</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" value="<?=$base_url?>" name="base_url">
                                    </div>
                                </div>
    <div class="form-group">
                                    <label class="col-lg-3 control-label">Logo</label>
                                    <div class="col-lg-7">
                                        <input type="file" class="form-control" value="" name="logo">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-7">
                                        <input type="email" class="form-control" placeholder="General Email" name="email">
                                    </div>
                                </div>
                                <div class="actions pull-left">
                                    <a href="<?php echo base_url()?><?=config_item('index_page')?>/installer" class="btn btn-success btn-sm">Previous</a>
                                    <button type="submit" class="btn btn-success btn-sm">Next</button>
                                </div>

                            <?=form_close()?>

                        </div>
                        <div class="step-pane <?=$step4?>" id="step4">

        <?php
             $attributes = array('class' => 'm-b-sm form-horizontal','id' => 'complete','novalidate'=>'novalidate');
          echo form_open(base_url().config_item('index_page').'/installer/complete',$attributes); ?>

                            

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First Name</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="John" name="firstname">
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-lg-3 control-label">Surname</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="Doe" name="lastname">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="johndoe" name="username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" placeholder="password" name="password">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Email</label>
                                    <div class="col-lg-7">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="actions pull-left">
                                    <button type="submit" class="btn btn-success btn-sm">Complete</button>
                                </div>

                            <?=form_close()?>

                        </div>





                    </div>
                </div>

            </div>
        </section>
    </div>
</section>
<!--main content end-->
<script src="<?=base_url()?>assets/install/js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url()?>assets/install/js/app.js"></script>
<script src="<?=base_url()?>assets/install/js/jquery.validate.min.js"></script>

<script>
    $(function() {
        $("#database").validate({
            rules: {
                hostname: "required",
                database: "required",
                db_user: "required"
            },

            // Specify the validation error messages
            messages: {
                hostname: "Please enter your hostname usually localhost",
                database: "Please specify your database name",
                db_user: "Please specify your database username"
            },

            submitHandler: function(form) {
                form.submit();
            }
        }); 
        $("#sschool_settings").validate({
            rules: {
                website_name: "required",
                logo: "required",
                email: {
                        required: true,  
                    email: true}
            },

            // Specify the validation error messages
            messages: {
                website_name: "Set your portfalion name",
                logo: "Set your School logo",
                email: "Set admin email address",
            },

            submitHandler: function(form) {
                form.submit();
            }
             
        });

        $("#complete").validate({
            rules: {
                username: "required",
                firstname: "required",
                lastname: "required",
                password: "required",
                email: {
                    required: true,
                    email: true
                },
                website_name: "required",
                
            },

            // Specify the validation error messages
            messages: {
                username: "Please enter admin username",
                firstname: "Set your admin first name",
                lastname: "Set your admin last name",
                password: "Set your admin password",
                email: "Set admin email address",
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

    });

</script>




<!-- Bootstrap -->
<!-- App -->
</body>
</html>