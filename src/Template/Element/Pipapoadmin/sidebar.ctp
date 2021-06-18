<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>

                <li><a href="<?= $this->Url->build('/pipapoadmin',true) ?>" class="waves-effect"><i class="dripicons-meter"></i>
                    <!-- <span class="badge badge-info badge-pill float-right">2</span> -->
                    <span>Dashboard</span></a></li>

            <li><a href="<?= $this->Url->build('/pipapoadmin/gallery',true) ?>" class="waves-effect"><i class="fa fa-image"></i> <span>Gallery</span></a></li>

               <!--  <li><a href="<?= $this->Url->build('/pipapoadmin/sample/calender',true) ?>" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar</span></a></li> -->


               <br>
                <li class="menu-title"> <i class="ti-settings mr-1"></i> Site Settings</li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/titleAndIcon',true) ?>" class="waves-effect"><i class="fa fa-etsy"></i><span>Title and Icon</span></a></li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/home',true) ?>" class="waves-effect"><i class="fa fa-home"></i><span>Home</span></a></li>

                 <li><a href="<?= $this->Url->build('/pipapoadmin/settings/about',true) ?>" class="waves-effect"><i class="fa fa-tag"></i><span>About</span></a></li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/menu',true) ?>" class="waves-effect"><i class="fa fa-th"></i><span>Menu</span></a></li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/gallery',true) ?>" class="waves-effect"><i class="fa fa-file-image-o"></i><span>Gallery Settings</span></a></li>
                
                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/kontakt',true) ?>" class="waves-effect"><i class="fa fa-mobile-phone"></i><span>Kontakt</span></a></li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/businessSetting',true) ?>" class="waves-effect"><i class="fa fa-address-card-o"></i><span>Business Setting</span></a></li>

                <li><a href="<?= $this->Url->build('/pipapoadmin/settings/socialicon',true) ?>" class="waves-effect"><i class="ion-android-social"></i><span>Social Links</span></a></li>                

                <li class="menu-title">Pages</li>

                <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-duplicate"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li><a href="<?= $this->Url->build('/pipapoadmin/pages/teilnahmebedingungen') ?>">Teilnahmebedingungen</a></li>
                        <li><a href="<?= $this->Url->build('/pipapoadmin/pages/datenschutz') ?>">Datenschutz</a></li>
                        <li><a href="<?= $this->Url->build('/pipapoadmin/pages/impressum') ?>">Impressum</a></li>
                        <li><a href="<?= $this->Url->build('/pipapoadmin/pages/copyrights') ?>">Copyrights</a></li>
                    </ul>
                </li>
                <li style="cursor: pointer;" class="menu-title visit-website" onclick="window.open('<?= $this->Url->build('/') ?>')"> <i class="dripicons-preview mr-1"></i> <span> Visit Website</span></li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>