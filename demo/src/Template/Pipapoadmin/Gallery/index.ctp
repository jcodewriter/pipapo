<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title mb-0">Gallery</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>">Pipapo</a></li>
                                            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/pipapoadmin',true) ?>/<?= $this->request->getParam('controller') ?>">Gallery</a></li>
                                            <!-- <li class="breadcrumb-item active" aria-current="page">Kontakt Tab</li> -->
                                        </ol>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="float-right d-none d-md-block">
                                             <div class="dropdown">
                                                <button class="btn btn-primary btn-rounded" type="button" data-toggle="modal" data-target="#add_filles"><i class="ti-plus mr-1"></i> Upload</button>
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
                                    <div class="row" id="all_gallery">
<!-- --------------------------------------------------------------------- -->
<?php 
    if(!empty($gallery))
    {
        foreach ($gallery as $photo) { ?>                 
        <div class="col-md-2" row-id="<?= $photo->id ?>">
                <div class="img-thumbnail-wrapper">
                    <img class="img-thumbnail" src="<?= $this->Url->build('/Gallery/',true) ?><?= $photo->thumb ?>" width="200" />
                    <button type="button" class="btn btn-primary waves-effect waves-light delete" delete-button-id="<?= $photo->id ?>" title="Delete">
                       <i class="ti-trash"></i> <i delete-fa-id="<?= $photo->id ?>" class="fa fa-spinner fa-spin" style="display: none; "></i>
                    </button>
                </div>
        </div>                   
       <?php  }
    } ?>
<!-- --------------------------------------------------------------------- -->
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
<!-- Add a new Modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true" id="add_filles">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Upload Images</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="mt-0 header-title">Gallery </h4>
                                    <p class="text-muted m-b-30 font-14">Supportet file type : jpg/png</p>
                                     
                                    <div class="m-b-30">
                                        <!-- <form action="#" class="dropzone"> -->
                                    <?= $this->Form->create('',[
                                        'class'=>'dropzone',
                                        'enctype'=>'multipart/form-data',
                                        'id'=>'file_upload'
                                    ]) ?>
                                            <div class="fallback">
                                                <input name="file" type="file" >
                                            </div>
                                            <?= $this->Form->end() ?>
                                        <!-- </form> -->
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END of add modal  -->


<!-- ============================SCRIPT---------------------  -->
<script type="text/javascript">
    $(document).on('click','#upload_files',function(){
        $('#file_upload').submit();
    });

    $(document).on('click','.delete',function(){
        var id=$(this).attr('delete-button-id');
        // console.log(id);
        $("[delete-fa-id='"+id+"']").show();
        $.ajax({
            type:'post',
            data:{id:id},
            url:"<?php echo $this->Url->build('/pipapoadmin/Gallery/delete', true); ?>",
            success: function(data) {
                result=JSON.parse(data);
                if(result.code==1)
                {
                    $("[row-id='"+id+"']").html('');
                     $("[row-id='"+id+"']").hide('');
                    swal('Success',"Successfully deleted",'success');
                }else{
                    swal('Error!',"Unable to delete",'error');
                }
            }
        });
    });

    $('#add_filles').on("hidden.bs.modal", function () {
        $.ajax({
            type:'post',
            // data:{id:id},
            url:"<?php echo $this->Url->build('/pipapoadmin/Gallery/ajax', true); ?>",
            success: function(data) {
                result=JSON.parse(data);
                if(result.count>0)
                {
                    $('#all_gallery').html('');
                    $.each(result.data,function(key,value){
                        var html=`<div class="col-md-2" row-id="`+value.id+`">
                <div class="img-thumbnail-wrapper">
                    <img class="img-thumbnail" src="<?= $this->Url->build('/Gallery/',true) ?>`+value.thumb+`" width="200" />
                    <button type="button" class="btn btn-primary waves-effect waves-light delete" delete-button-id="`+value.id+`" title="Delete">
                       <i class="ti-trash"></i> <i delete-fa-id="`+value.id+`" class="fa fa-spinner fa-spin" style="display: none; "></i>
                    </button>
                </div>
        </div> `;
         $('#all_gallery').append(html);
         html='';
        // console.log(result.data);
                    });
                }else{
                    $('#all_gallery').html('');
                }
            }
        });
    });
</script>`+value.id+`