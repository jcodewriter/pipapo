<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>PiPaPo Marktrestaurant &#8211; Pizza, Pasta, Pomodoro</title>
    <meta content="Admin Dashboard" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->
    <link rel="shortcut icon" href="<?= $this->Url->build('/',true) ?>home/content/favicon.png">
    <!-- Basic Css files -->
    <link href="<?= $this->Url->build('/',true) ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/',true) ?>css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/',true) ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->Url->build('/',true) ?>css/style.css" rel="stylesheet" type="text/css">
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
    <div class="home-btn d-none d-sm-block">
        <!-- <a href="index.html" class="text-white"><i class="mdi mdi-home h1"></i></a> -->
    </div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <div class="p-3">
                    <div class="float-right text-right">
                        <h4 class="font-18 mt-3 m-b-5">Welcome Back !</h4>
                        <p class="text-muted">Sign in to continue to Pipapo Admin</p>
                    </div>

                    <a href="<?= $this->Url->build('/',true) ?>" class="logo-admin"><img src="<?= $this->Url->build('/',true) ?>home/content/logo.png" height="50" alt="logo"></a>
                </div>
                <div class="p-3">
                    <?= $this->element('Pipapoadmin/message')?>
                    <?= $this->Form->create() ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                        </div>
                        <div class="form-group row m-t-30">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-t-30 mb-0 row">
                           <!--  <div class="col-12 text-center"><a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a></div> -->
                        </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center text-white-50">
            <!-- <p>Don't have an account ? <a href="pages-register.html" class="font-600 text-white">Signup Now</a></p> -->
            <p class="p">© <?= date('Y') ?> <?php if(!empty($SettingBusiness->name)){ echo $SettingBusiness->name; } ?></p>
        </div>
    </div>
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="<?= $this->Url->build('/',true) ?>js/jquery.min.js"></script>
    <script src="<?= $this->Url->build('/',true) ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->Url->build('/',true) ?>js/modernizr.min.js"></script>
    <script src="<?= $this->Url->build('/',true) ?>js/metisMenu.min.js"></script>
    <script src="<?= $this->Url->build('/',true) ?>js/jquery.slimscroll.js"></script>
    <script src="<?= $this->Url->build('/',true) ?>js/waves.js"></script>
    <!-- App js -->
    <script src="<?= $this->Url->build('/',true) ?>js/app.js"></script>
</body>

</html>