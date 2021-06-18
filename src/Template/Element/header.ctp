<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(!empty($SettingTitle->title)){echo $SettingTitle->title; } ?></title>

    <?php if(!empty($SettingTitle->favicon)){ ?>

    <link rel="shortcut icon" href="<?= $this->Url->build('/home',true) ?>/content/<?= $SettingTitle->favicon ?>">
<?php  } ?>
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/rgs.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/font-awesome.min.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/style.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/prettyPhoto.css" type='text/css' media='all' />
    <!--[if lt IE 9]>
	<link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/ie8.css" type='text/css' media='all' />
	<![endif]-->
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/responsive.css" type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Amatic+SC%3A400%7CRoboto%3A400%2C300%7COswald%3A400%2C300&#038;ver=1559328687' type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/nectar-slider.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/portfolio.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/ascend.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/js_composer.min.css" type='text/css' media='all' />
    <link rel='stylesheet' href="<?= $this->Url->build('/home',true) ?>/css/custom.css" type='text/css' media='all' />