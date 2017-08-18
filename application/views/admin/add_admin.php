<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <h5 style="color:orange"> <?php echo $msg = $this->session->userdata('msg');$this->session->unset_userdata('msg')?></h5>
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/add_admin " method="post">
                    <div class="container-fluid">
                        <div class="form-group form-horizontal">
                        <label style="font-size: 18px">Admin Name</label>
                        <input type="text" name="name" class="form-control" >
                    </div>
                    <div class="form-group form-horizontal">
                        <label style="font-size: 18px">Admin Email</label>
                        <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group form-horizontal">
                        <label style="font-size: 18px">Admin Password</label>
                        <input type="text" name="password" class="form-control" >
                    </div>
                    <button type="sublit" class="btn btn-info pull-right" style="width: 120px"> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->
    

</div>
