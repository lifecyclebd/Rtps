<div class="container">
    <div class="well text-center text-info" style="margin-top: 10px;">
        <h4>Select your preferable category,division,district and area then search your living</h4>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-4" style="border-radius: 15px">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h4>Search prefarable Living</h4>

                </div>
                <div class="panel-body" style="width: 95%; margin-left: 9px">

                    <form action="<?php echo base_url() ?>user/search_home" method="post">

                        <div class="row">
                            <div class="form-group" style="margin: 0px">
                                <div class="col-md-12" style="padding: 0px;">
                                    <select name="category" class="form-control">
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------- Select Category --------</option>
                                        <?php foreach ($category as $value) { ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="form-group" style="margin: 0px">
                                <div class="col-md-5" style="padding: 0px">
                                    <?php
                                    $attributes = 'required="true" id="division" class="form-control" ';
                                    echo form_dropdown('division', $division, set_value('division_id'), $attributes);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 col-md-offset-2" style="padding: 0px;">
                                    <?php
                                    $attributes = 'required="true" id="district" class="form-control" ';
                                    echo form_dropdown('district', $district, set_value('district'), $attributes);
                                    ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div  style="margin-top: 10px">
                                <p><b>Target Area</b></p>
                                <input class="form-control" type="text" name="target_area" style="width: 100%"/>
                            </div>
                        </div>
                        <div class="row">
                            <div  style="margin-top: 10px">
                                <button class="btn btn-info form-control" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Script start-->

        <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('#division').change(function () {
                var country_id = $(this).val();
                $("#district > option").remove();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Welcome/populate_district'); ?>",
                    data: {id: country_id},
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (k, v) {
                            var opt = $('<option />');
                            opt.val(k);
                            opt.text(v);
                            $('#district').append(opt);
                        });
                    }
                });
            });
        </script>

        <!-- Script End-->
        <div class="col-sm-8">

<?php foreach ($allpost as $value) { ?>
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
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 100%;height: auto" src="<?php echo base_url(); ?>/images/uploads/<?php echo $value->image_1; ?>"/></div>
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 100%;height: auto" src="<?php echo base_url(); ?>/images/uploads/<?php echo $value->image_2; ?>"/></div>
                            <div class="col-xs-4"><img class="img-responsive thumbnail" style="width: 100%;height: auto" src="<?php echo base_url(); ?>/images/uploads/<?php echo $value->image_3; ?>"/></div>
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

        </div>
        <ul class="pager">
            <li><a href="#">&leftarrow; Previous</a></li>
            <li><a href="#">Next &rightarrow;</a></li>
        </ul>
    </div>


</div>