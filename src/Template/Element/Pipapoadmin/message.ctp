

<?php //pr($status); ?>
<?php if(isset($status)  && !empty($status)) {
	if($status['code']==1){ ?>
	<div class="alert alert-success" role="alert"><strong>Well done!</strong> Save Changes successsfully.</div>
<?php }
if(!empty($status['extra'])){
	foreach($status['extra'] as $val)
	{ ?>
		<div class="alert alert-warning" role="alert"><strong>Warning!</strong> <?= $val ?></div>
	<?php }
}
} ?>