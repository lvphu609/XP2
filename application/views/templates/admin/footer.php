            </div>
            <!--end page-wraper-->
        </div>
        <!--end container-->

        <!-- jQuery -->
        <script src="<?php echo base_url('resources/includes/sb2/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('resources/includes/sb2/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('resources/js/jquery.validate.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('resources/includes/sb2/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('modules/ad_login/assets/js/jquery.md5.js'); ?>"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('resources/includes/sb2/dist/js/sb-admin-2.js'); ?>"></script>

        <?php
        if(isset($js_file) && count($js_file)){
            foreach($js_file as $file)
                echo '<script type="text/javascript" src="'.base_url("resources/".$file).'"></script>';
        }
        ?>

        <?php
            if(isset($js_file_module) && count($js_file_module)){
                foreach($js_file_module as $file)
                    echo '<script type="text/javascript" src="'.base_url("modules/".$file).'"></script>';
        }
        ?>


    </body>
</html>