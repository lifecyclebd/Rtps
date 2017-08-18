<div class="container-fluid" align="center">
    <div style="background-color: #008966;width: 80%;height:400px;margin-top: 80px;border-radius: 15px;margin-bottom: 150px">
        <div class="row">
            <h5 style="text-align: center;color: red; margin-top: 10%">
                <?php
                $msg = $this->session->userdata('message');
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
            </h5>
            <div style="margin-top: 5%">
                <h3 style="color:#dde4eb">Already have an account..??</h3>
                <a href=""data-toggle="modal" data-target="#login-modal"><button class="btn btn-lg  alert-info"style="width: 30%;border-radius: 8px">Login</button></a>
            </div>
        </div>
        <div class="row">
            <div style="margin-top: 5%">
                <h3 style="color: #dde4eb">New to ToletBazar..??</h3>
                <a href=""data-toggle="modal" data-target="#reg-modal"><button class="btn btn-lg  alert-info"style="width: 30%;border-radius: 8px">Create Account</button></a>
            </div>
        </div>

        <!-- START LOGIN FORM -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <h3 style="text-align: center;color: navy">Login Your Account</h3>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">


                        <!-- Begin # Login Form -->
                        <form id="login-form" action="<?php echo base_url(); ?>welcome/login" method="post">

                            <div class="modal-body">
                                <div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Type your username and password.</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                                    <input id="login_username" class="form-control" name="email" type="text" placeholder="Username" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                    <input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px">Login</button>
                                </div>
                                <div>
                                    <button id="login_lost_btn" type="submit" class="btn btn-link">Forgot Password?</button>
                                </div>
                            </div>
                        </form>
                        <!-- End # Login Form -->
                    </div>
                    <!-- End # DIV Form -->

                </div>
            </div>
        </div>
        <!-- END LOGIN FORM -->

        <!-- START REGISTER FORM -->
        <div class="modal fade" id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; margin-top: -150px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <h3 style="text-align: center;color: navy">Create Your Account</h3>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms" style="padding-left: 30px;padding-right: 30px;">
                        <form action="<?php echo base_url(); ?>welcome/add_user" method="post">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                                        <input type="text" class="form-control" name="name"placeholder="Enter your Name"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                                        <input type="email" class="form-control" name="email" placeholder="Enter your Email"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Your Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <button type="submit" style="border-radius: 8px" class="btn btn-primary btn-lg btn-block login-button">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <!-- End # DIV Form -->

                </div>
            </div>
        </div>
        <!-- END REGISTER FORM -->
    </div>

</div>
