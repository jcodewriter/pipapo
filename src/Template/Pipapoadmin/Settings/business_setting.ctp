<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title mb-0">Business settings</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>">Pipapo</a></li>
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>/<?= $this->request->getParam('controller') ?>">Settings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Business</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-4">
                                       <!--  <div class="float-right d-none d-md-block">
                                            <div class="dropdown">
                                                <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings mr-1"></i> Settings</button>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a></div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?=$this->element('Pipapoadmin/message')?>
                                    <!-- <h4 class="mt-0 header-title">Title and Icons</h4> -->

                                 <!--    <p class="text-muted m-b-30 font-14">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p> -->
                                 <?= $this->Form->create('',['id'=>'title_form','enctype'=>'multipart/form-data']) ?>
                                    <div class="form-group row">
                                        <label for="site_title" class="col-sm-2 col-form-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name" value="<?php if(!empty($SettingBusiness->name))
                                            { echo $SettingBusiness->name; } ?>" id="site_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address_line_1" class="col-sm-2 col-form-label">Address line 1</label>
                                        <div class="col-sm-10">
                                            <input rows=8 id="address_line_1" class="form-control" name="address_line_1" value="<?php if(!empty($SettingBusiness->address_line_1))
                                            { echo $SettingBusiness->address_line_1; } ?> " >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address_line_2" class="col-sm-2 col-form-label">Address line 2</label>
                                        <div class="col-sm-10">
                                            <input rows=8 id="address_line_2" class="form-control" name="address_line_2" value="<?php if(!empty($SettingBusiness->address_line_2))
                                            { echo $SettingBusiness->address_line_2; } ?> " >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address_line_3" class="col-sm-2 col-form-label">Address line 3</label>
                                        <div class="col-sm-10">
                                            <input rows=8 id="address_line_3" class="form-control" name="address_line_3" value="<?php if(!empty($SettingBusiness->address_line_3))
                                            { echo $SettingBusiness->address_line_3; } ?> " >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input rows=8 id="phone" class="form-control" name="phone" value="<?php if(!empty($SettingBusiness->phone))
                                            { echo $SettingBusiness->phone; } ?> " >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input rows=8 id="email" type="email" class="form-control" name="email" value="<?php if(!empty($SettingBusiness->email))
                                            { echo $SettingBusiness->email; } ?> " >
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="site_title" class="col-sm-2 col-form-label">UID-Nr.</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="uid_nr" value="<?php if(!empty($SettingBusiness->uid_nr))
                                            { echo $SettingBusiness->uid_nr; } ?>" id="uid_nr">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="site_title" class="col-sm-2 col-form-label">Firmenbuch-Nr.</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="register_no" value="<?php if(!empty($SettingBusiness->register_no))
                                            { echo $SettingBusiness->register_no; } ?>" id="register_no">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="site_title" class="col-sm-2 col-form-label">Gerichtsstand</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="jurisdiction" value="<?php if(!empty($SettingBusiness->jurisdiction))
                                            { echo $SettingBusiness->jurisdiction; } ?>" id="jurisdiction">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Opening days</label>
                                        <div class="col-sm-5">
                                            <select rows=8 id="start_d" type="start_d" class="form-control" name="start_d">
                                            <option value="Sonntag">Sonntag</option>
                                            <option value="Montag">Montag</option>
                                            <option value="Dienstag">Dienstag</option>
                                            <option value="Mittwoch">Mittwoch</option>
                                            <option value="Donnerstag">Donnerstag</option>
                                            <option value="Freitag">Freitag</option>
                                            <option value="Samstag">Samstag</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-5">
                                            <select rows=8 id="end_d" type="end_d" class="form-control" name="end_d">
                                            <option value="Sonntag">Sonntag</option>
                                            <option value="Montag">Montag</option>
                                            <option value="Dienstag">Dienstag</option>
                                            <option value="Mittwoch">Mittwoch</option>
                                            <option value="Donnerstag">Donnerstag</option>
                                            <option value="Freitag">Freitag</option>
                                            <option value="Samstag">Samstag</option>
                                            </select>
                                        </div>
<script>
$(document).ready(function(){
$('#start_d').val('<?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->start_d;} ?>');
$('#end_d').val('<?php if(!empty($SettingBusiness->end_d)){echo $SettingBusiness->end_d;}?>');
                                            
});

</script>
                                    </div>
                                    <div class="form-group row">
                                        <label for="open_hour" class="col-sm-2 col-form-label">Opening Hours</label>
                                        <div class="col-sm-10">
                                            <input  id="open_hour" class="form-control" name="open_hour" value="<?php if(!empty($SettingBusiness->open_hour))
                                            { echo $SettingBusiness->open_hour; } ?> " >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	 <label for="site_logo" class="col-sm-2 col-form-label"></label>
                                    	 <div class="col-sm-10">
                                            <Button class="btn btn-primary btn-lg waves-effect waves-light" type="submit" id="site_logo">Save</Button>
                                            <input class="btn btn-warning btn-lg " type="reset" value="Reset">
                                        </div>
                                    </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>