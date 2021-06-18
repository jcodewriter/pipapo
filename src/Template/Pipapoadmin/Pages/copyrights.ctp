    <link href="<?= $this->Url->build('/js/') ?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/js/') ?>plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/js/') ?>plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/jszip.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/vfs_fonts.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/buttons.colVis.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= $this->Url->build('/js/') ?>plugins/datatables/responsive.bootstrap4.min.js"></script>
   <!-- <script src="<?= $this->Url->build('/js/') ?>pages/datatables.init.js"></script> -->


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
                                        <div class="float-right d-none d-md-block">
                                            <div class="dropdown">
                                                <a class="btn btn-primary btn-rounded" href="<?= $this->Url->build('/pipapoadmin/pages/savecopyrights',true) ?>"><i class="ti-plus mr-1"></i> Add</a>
                                            </div>
                                        </div>
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
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>sl.</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Line1</th>
                                                <th>Line2</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=0; foreach ($Copyrights as $key => $copyright) { ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><img src="<?= $this->Url->build('/home/content/copyrights/') ?><?= $copyright->image ?>" height="80" /></td>
                                                <td><?= $copyright->title ?></td>
                                                <td><?= $copyright->line1 ?></td>
                                                <td><?= $copyright->line2 ?></td>
                                                <td><a href="<?= $copyright->url ?>"><?= $copyright->link ?></a></td>
                                                <td><a href="<?= $this->Url->build('/pipapoadmin/pages/savecopyrights/'.$copyright->id,true) ?>"><i class="fa fa-edit" style="color: #fd7e14;"></i></a> <a href="<?= $this->Url->build('/pipapoadmin/pages/deletecopyrights/'.$copyright->id,true) ?>"><i class="fa fa-trash" style="color: #e85151;"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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