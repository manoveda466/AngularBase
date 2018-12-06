<!-- Navigation Menu-->
<ul class="navigation-menu">
    <li class="nav-menu">
        <a title="Dashboard" href="<?php echo base_url(); ?>"><i class="icon-home"></i> <?php echo $this->lang->line('menu_dashboard');?></a>
    </li>     
    <li class="has-submenu">
        <a href="#"><i class="icon-settings"></i> <?php echo $this->lang->line('menu_settings');?></a>
        <ul class="submenu">
            <li><a href="<?php echo base_url('modules/roles/add');?>"><?php echo $this->lang->line('submenu_role_management');?></a></li>
            <li><a href="<?php echo base_url('modules/users/add');?>"><?php echo $this->lang->line('submenu_user_management');?></a></li>
            <li><a href="<?php echo base_url('master/setting/add');?>"><?php echo $this->lang->line('submenu_company_settings');?></a></li>
        </ul>
    </li> 
    <li class="has-submenu">
        <a href="#"><i class="icon-grid"></i> <?php echo $this->lang->line('menu_master');?></a>
        <ul class="submenu">
            <li><a href="<?php echo base_url('master/Country/add');?>"><?php echo $this->lang->line('submenu_master_country');?></a></li>
            <li><a href="<?php echo base_url('master/State/add');?>"><?php echo $this->lang->line('submenu_master_state');?></a></li>
            <li><a href="<?php echo base_url('master/City/add');?>"><?php echo $this->lang->line('submenu_master_city');?></a></li>
        </ul>
    </li> 
</ul> 
<!-- End navigation menu -->