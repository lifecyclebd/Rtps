
<div class="row">
    <!--/span-->
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> District List</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>District ID</th>
                            <th>Division ID</th>
                            <th>District Name</th>
                            <th>Bangla Name</th>
                            <th>Lat</th>
                            <th>Lon</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($district as $value) { ?>
                        <tr>
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->division_id; ?></td>
                            <td><?php echo $value->district_name; ?></td>
                            <td><?php echo $value->bn_name; ?></td>
                            <td><?php echo $value->lat; ?></td>
                            <td><?php echo $value->lon; ?></td>
                            <td><?php echo $value->website; ?></td>
                            <td class="center">
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>