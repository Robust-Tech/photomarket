<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			
			<a href="<?=base_url()?>">
				 <img src="<?=base_url()?>assets/admin/img/logo-admin.png" alt="logo" class="logo-default" /> </a>
			  <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
		</div>
         <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
        <div class="top-menu">
            
        		<ul class="nav navbar-nav pull-right">
			
			<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<?php
						$user = $this->User->get_id();
						$user_email = $this->User->login_info($user)->email;
						?>
                         <img alt="" class="img-circle" src="<?php echo User::avatar_url($user);?>" />
                                    <span class="username username-hide-on-mobile"> <?php echo User::displayName($user);?> </span>
                                    <i class="fa fa-angle-down"></i> 
				</a>
				                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?=base_url()?>profile">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>timetable">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>messages">
                                            <i class="icon-envelope-open"></i> Inbox
                                           
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                                    <li><a href="<?=base_url()?>profile/settings"><i class="icon-equalizer"></i> Settings</a></li>
                <li> <a href="<?=base_url()?>logout" > <i class="icon-logout"></i> Logout</a> </li>
                                </ul>
			</li>

		</ul>
        </div>

	</div>
</div>
