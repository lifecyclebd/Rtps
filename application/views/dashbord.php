
<div class="well text-center text-info" style="margin-top: 10px;">
    <h4>Post Your Add</h4>
</div>
<div class="row" style="margin-top: 10px">
    <div class="col-sm-3" style="border-radius: 15px">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="text-center">Menu</h4>
            </div>
            <div class="panel-body" style="width: 80%; margin-left:10%">
                <ul class="list-unstyled">
                    <a href="<?php echo base_url(); ?>user"><li class="well well-sm text-center"><b>Write Post</b></li></a>
                    <a href="<?php echo base_url(); ?>user/my_post"><li class="well well-sm text-center"><b>My Post</b></li></a>
                    <a href=""><li class="well well-sm text-center"><b>Change Password</b></li></a>
                    <a href="<?php echo base_url(); ?>welcome/logout"><li class="well well-sm text-center"><b>Log Out</b></li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        


        
        <?php echo $user_content;?>


    </div>
    
</div>
