<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title mb-0">About Tab settings</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>">Pipapo</a></li>
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>/<?= $this->request->getParam('controller') ?>">Settings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">About Tab</li>
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
                                        <label for="site_title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="title" value="<?php if(!empty($settingAbout->title))
                                            { echo $settingAbout->title; } ?>" id="site_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="site_content" class="col-sm-2 col-form-label">Content Text</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control"  name="content" id="site_content" rows=5><?php if(!empty($settingAbout->content))
                                            { echo $settingAbout->content; } ?></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="content2" class="col-sm-2 col-form-label">Second Content</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="content2" value="<?php if(!empty($settingAbout->content2))
                                            { echo $settingAbout->content2; } ?>" id="content2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="motto" class="col-sm-2 col-form-label">Author</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="motto" value="<?php if(!empty($settingAbout->motto))
                                            { echo $settingAbout->motto; } ?>" id="motto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="reservation_contact" class="col-sm-2 col-form-label">Reservation</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="reservation_contact" value="<?php if(!empty($settingAbout->reservation_contact))
                                            { echo $settingAbout->reservation_contact; } ?>" id="reservation_contact">
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