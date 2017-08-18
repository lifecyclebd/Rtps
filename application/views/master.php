<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/extra.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
        <style>
            body{
                padding-top: 90px;
            }
        </style>

    </head>
    <body>
        <!--start navbar-->
        <section>
            <div class="container" style="font-size: 18px;">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand img-responsive" href="<?php echo base_url(); ?>welcome/index"><img src="<?php echo base_url(); ?>images/tlogo.png" style="height:auto;width:100px; margin-top: -10px"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav pull-right" style="font-size: 20px">
                            <li>
                                <a href="<?php echo base_url(); ?>welcome/find_home">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Find Living
                                </a>
                            </li>
                            <?php
                            $id = $this->session->userdata('id');
                            $name = $this->session->userdata('name');
                            if (isset($id)) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>user"><i class="fa fa-user" aria-hidden="true"></i> <?php echo$name ?></a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url(); ?>welcome/post_add"><i class="fa fa-paper-plane" aria-hidden="true"></i> Post Add</a>
                                </li>
                            <?php } ?>        


                            <li>
                                <a href="<?php echo base_url(); ?>welcome/contact">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            <!--end navbar-->
            </div>
        </section>

        <section>
            <div style="background-color:#ddd" >
            

            <!--Start body-->
            <div class="container" style="padding-bottom:3%">
                <?php echo $main_content; ?>
            </div>
            <!--End body-->
            
        </div>
        </section>
        <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="text-muted pull-left">&COPY;Copiright: ToletBazar.Com</p>
                        </div>
                    </div>
                </div>
            </footer>

        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/npm.js"></script>
    </body>
</html>
