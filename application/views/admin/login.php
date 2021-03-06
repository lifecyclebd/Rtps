<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>ToletBazar | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <link href="<?php echo base_url(); ?>css/bootstrap-cerulean.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>css/charisma-app.css" rel="stylesheet">
        <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
        <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/<?php echo base_url(); ?>css/bootstrap-tour.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/uploadify.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/animate.min.css' rel='stylesheet'>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico">

    </head>

    <body>
        <div class="ch-container">
            <div class="row">

                <div class="row">
                    <div class="col-md-12 center login-header">
                        <h2>Admin Pannel</h2>
                    </div>
                    <!--/span-->
                </div><!--/row-->

                <div class="row">
                    <div class="well col-md-5 center login-box">
                        <div class="alert alert-info">
                            <h4 style="color: red">
                                <?php
                                $msg = $this->session->userdata('msg');
                                if (isset($msg)) {
                                    echo $msg;
                                    $this->session->unset_userdata('msg');
                                } else {
                                    ?>
                                </h4>
                                <h4 style="margin:0">
                                    <?php
                                    echo 'Pleasae Login With Email & Password';
                                }
                                ?>
                            </h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/admin_login_check" method="post">
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="Username">
                                </div>
                                <div class="clearfix"></div><br>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend">
                                    <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                                </div>
                                <div class="clearfix"></div>

                                <p class="center col-md-5">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/span-->
                </div><!--/row-->
            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->

        <!-- external javascript -->

        <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/<?php echo base_url(); ?>js/bootstrap.min.js"></script>

        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
        <!-- calender plugin -->
        <script src='<?php echo base_url(); ?>bower_components/moment/min/moment.min.js'></script>
        <script src='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url(); ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
        <!-- library for making tables responsive -->
        <script src="<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.js"></script>
        <!-- tour plugin -->
        <script src="<?php echo base_url(); ?>bower_components/bootstrap-tour/build/<?php echo base_url(); ?>js/bootstrap-tour.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url(); ?>js/charisma.js"></script>


    </body>
</html>
