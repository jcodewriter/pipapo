<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title mb-0">Copyrights</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>">Pipapo</a></li>
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>/<?= $this->request->getParam('controller') ?>">Pages</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Copyrights</li>
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
                                        <label for="title" class="col-sm-2 col-form-label">Title </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="title" value="<?php if(!empty($Copyrights->title))
                                            { echo $Copyrights->title; } ?>" id="title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="line7" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="file" name="file"  id="line7">
                                        </div>
                                        <div class="col-sm-5">
                                            <?php if(!empty($Copyrights->image)) { ?>
                                           <img src="<?= $this->Url->build('/home/content/Copyrights/'.$Copyrights->image) ?>" height="50"/>
                                       <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="line1" class="col-sm-2 col-form-label">Line 1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="line1" value="<?php if(!empty($Copyrights->line1))
                                            { echo $Copyrights->line1; } ?>" id="line1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="
                                        line2" class="col-sm-2 col-form-label">
                                    Line 2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="line2" value="<?php if(!empty($Copyrights->line2))
                                            { echo $Copyrights->line2; } ?>" id="
                                                line2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link" class="col-sm-2 col-form-label">Link Title </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="link" value="<?php if(!empty($Copyrights->link))
                                            { echo $Copyrights->link; } ?>" id="link">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-2 col-form-label">Link url</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="url" value="<?php if(!empty($Copyrights->url))
                                            { echo $Copyrights->url; } ?>" id="url">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                	 <div class="col-sm-12">
                                        <center>
                                        <Button class="btn btn-primary btn-lg waves-effect waves-light" type="submit" id="site_logo">Save</Button>
                                        <a href="<?= $this->Url->build('/pipapoadmin/pages/Copyrights') ?>" class="btn btn-success btn-lg waves-effect waves-light">BACK</a>
                                        </center>
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

<script type="text/javascript">

$(document).ready(function(){


    $('.summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true,                 // set focus to editable area after initializing summernote
        width: '100%',
    });
});
</script>