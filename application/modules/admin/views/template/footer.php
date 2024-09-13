</div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\modernizr\js\modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\chart.js\js\Chart.js"></script>
    <script src="<?= base_url('files');?>\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\assets\js\SmoothScroll.js"></script>
    <script src="<?= base_url('files');?>\assets\js\pcoded.min.js"></script>
    <!-- pnotify -->

    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.desktop.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.buttons.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.confirm.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.callbacks.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.animate.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.history.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.mobile.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\pnotify\js\pnotify.nonblock.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\assets\pages\pnotify\notify.js"></script>
    
    <!-- custom js -->
    <script src="<?= base_url('files');?>\assets\js\vartical-layout.min.js"></script>
    <!-- <script type="text/javascript" src="<?//= base_url('files');?>\assets\pages\dashboard\custom-dashboard.js"></script> -->
    <script type="text/javascript" src="<?= base_url('files');?>\assets\js\script.min.js"></script>
    <script src="<?= base_url('files');?>\assets\pages\data-table\js\data-table-custom.js"></script>

    <script>
        $('.modal-dialog').draggable();
    </script>

    <?php if ($this->session->userdata('message')): ?>
        <?php echo $this->session->userdata('message'); ?>
    <?php endif ?>

</body>

</html>
