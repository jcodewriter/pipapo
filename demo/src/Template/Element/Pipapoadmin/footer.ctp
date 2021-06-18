
<footer class="footer">© <?= date('Y') ?> <?php if(!empty($SettingBusiness->name)){ echo $SettingBusiness->name; } ?></footer>

<!-- <script src="<?= $this->Url->build('/') ?>/js/jquery.min.js"></script> -->

    <script src="<?= $this->Url->build('/') ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>/js/modernizr.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>/js/metisMenu.min.js"></script>
    <script src="<?= $this->Url->build('/') ?>/js/jquery.slimscroll.js"></script>
    <script src="<?= $this->Url->build('/') ?>/js/waves.js"></script>
    <script src="<?= $this->Url->build('/js/plugins/') ?>dropzone/dist/dropzone.js"></script>


    <script src="<?= $this->Url->build('/js/plugins/',true) ?>jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= $this->Url->build('/js/plugins/',true) ?>moment/moment.js"></script>

    <script src="<?= $this->Url->build('/js/plugins/',true) ?>peity-chart/jquery.peity.min.js"></script>
    <!--Morris Chart-->
    <script src="<?= $this->Url->build('/js/plugins/',true) ?>morris/morris.min.js"></script>
    <script src="<?= $this->Url->build('/js/plugins/',true) ?>raphael/raphael-min.js"></script>
   
    <!-- App js -->
    
    
     <script src="<?= $this->Url->build('/js/plugins/',true) ?>fullcalendar/js/fullcalendar.min.js"></script>
 <script src="<?= $this->Url->build('/js/',true) ?>pages/calendar-init.js"></script>


 <script src="<?= $this->Url->build('/') ?>/js/app.js"></script>
 
  <!-- <script src="<?= $this->Url->build('/js/') ?>pages/dashboard.js"></script> -->

</body>
</html>