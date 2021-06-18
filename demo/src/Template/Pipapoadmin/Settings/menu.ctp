<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title mb-0">Menu Tab settings</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>">Pipapo</a></li>
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>/<?= $this->request->getParam('controller') ?>">Settings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Menu Tab</li>
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
                                            <input class="form-control" type="text" name="title" value="<?php if(!empty($settingMenu->title))
                                            { echo $settingMenu->title; } ?>" id="site_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="site_subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="subtitle" value="<?php if(!empty($settingMenu->subtitle))
                                            { echo $settingMenu->subtitle; } ?>" id="site_subtitle">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="download_button_title" class="col-sm-2 col-form-label">Download Button Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="download_button_title" value="<?php if(!empty($settingMenu->download_button_title))
                                            { echo $settingMenu->download_button_title; } ?>" id="download_button_title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="menu_file" class="col-sm-2 col-form-label">Menu file</label>
                                        <div class="col-sm-5"> 
                                            <input class="form-control" type="file" value="" id="menu_file" name="menu_file">
                                        </div>
                                         <label for="menu_file" class="col-sm-5 col-form-label">
                                            <i class="fa fa-file-pdf-o fa-2x" style="color:#e2001a;"> </i>
                                            <a target="_blank" href="<?= $this->Url->build('/home/content/') ?><?= $settingMenu->menu_file ?>" class="fa fa-1x"> <?= $settingMenu->menu_file ?></a>
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="background_content" class="col-sm-2 col-form-label">Background Video</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="file" value="" id="background_content" name="background_content">
                                        </div>
                                         <label for="menu_file" class="col-sm-5 col-form-label">
                                            <i class="fa fa-file-pdf-o fa-2x" style="color:#e2001a;"> </i>
                                            <a target="_blank" href="<?= $this->Url->build('/home/content/') ?><?= $settingMenu->background_content ?>" class="fa fa-1x"> <?= $settingMenu->background_content ?></a>
                                        </label>
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