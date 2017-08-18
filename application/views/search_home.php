<?php foreach ($search_data as $value) { ?>
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <div class="row">
                            <div class="col-xs-4"><h5><strong>Division: </strong><?php echo $value->div_name; ?></h5></div>
                            <div class="col-xs-4"><h4><span class="label label-success"><?php echo $value->category_name; ?></span></h4></div>
                            <div class="col-xs-4"><h5><strong>District: </strong><?php echo $value->district_name; ?></h5></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 220px;height: 150px" src="<?php echo base_url();?>/images/uploads/<?php echo $value->image_1; ?>"/></div>
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 220px;height: 150px" src="<?php echo base_url();?>/images/uploads/<?php echo $value->image_2; ?>"/></div>
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 220px;height: 150px" src="<?php echo base_url();?>/images/uploads/<?php echo $value->image_3; ?>"/></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5><strong>Area: </strong><?php echo $value->area; ?></h5>
                                <h5><strong>Floor: </strong><?php echo $value->floor; ?></h5>
                                <h5><strong>Bed Room: </strong><?php echo $value->bedroom; ?></h5>
                            </div>
                            <div class="col-xs-4">
                                <h5><strong>Bathroom: </strong><?php echo $value->bathroom; ?></h5>
                                <h5><strong>Rent: </strong><?php echo $value->rent; ?> /=</h5>
                                <h5><strong>Target month: </strong><?php echo $value->target_month; ?></h5>
                            </div>
                            <div class="col-xs-4">
                                <h5><strong>Contact: </strong><?php echo $value->contact; ?></h5>
                                <h5><strong>Rent: </strong>1500 /=</h5>
                                <button type="button" class="btn btn-info" style="height: 25px;line-height: 10px;width: 100%">View Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>