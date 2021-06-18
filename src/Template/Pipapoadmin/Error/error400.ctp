<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>PiPaPo Marktrestaurant – Pizza, Pasta, Pomodoro</title>
    <meta content="Admin Dashboard" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->
    <link rel="shortcut icon" href="<?= $this->Url->build('/') ?>home/content/favicon.png">

    <!-- Basic Css files -->
    <link href="<?= $this->Url->build('/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/') ?>css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/') ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/') ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-block">
                <div class="ex-page-content text-center">
                    <h1 class="">4<i class="mdi mdi-emoticon-sad text-primary error-icon"></i>4!</h1>
                    <h4 class="">Sorry, page not found</h4>
                    <br><a class="btn btn-info mb-5 waves-effect waves-light" href="<?= $this->Url->build('/pipapoadmin') ?>"><i class="mdi mdi-home"></i> Back to Dashboard</a></div>
            </div>
        </div>
        <div class="m-t-40 text-center text-white-50">
            <p class="p">© <?= date('Y') ?> <?php if(!empty($SettingBusiness->name)){ echo $SettingBusiness->name; } ?></p>
        </div>
    </div>
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="<?= $this->Url->build('/') ?>js/jquery.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>js/modernizr.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>js/metisMenu.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>js/jquery.slimscroll.js"></script>
    <script src="<?= $this->Url->build('/') ?>js/waves.js"></script>
    <!-- App js -->
    <script src="<?= $this->Url->build('/') ?>js/app.js"></script>
</body>
</html>