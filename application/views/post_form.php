<script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script>

    $(document).ready(function () {
        $('#category').on('change', function () {

            if (this.value == '0') {
                $("#0").show();
                $("#1").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '1')
            {
                $("#1").show();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '2')
            {
                $("#2").show();
                $("#1").hide();
                $("#0").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '3')
            {
                $("#3").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '4')
            {
                $("#4").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '5')
            {
                $("#5").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '6')
            {
                $("#6").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '7')
            {
                $("#7").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#8").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '8')
            {
                $("#8").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#9").hide();
                $("#10").hide();
            } else if (this.value == '9')
            {
                $("#9").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#10").hide();
            } else if (this.value == '10')
            {
                $("#10").show();
                $("#1").hide();
                $("#0").hide();
                $("#2").hide();
                $("#3").hide();
                $("#4").hide();
                $("#5").hide();
                $("#6").hide();
                $("#7").hide();
                $("#8").hide();
                $("#9").hide();
            }
        });
    });
</script>



<form action="<?php echo base_url(); ?>user/post_add" method="post" enctype="multipart/form-data">


    <div class="row">
        <div class="col-md-6" style="color:navy">
            <label for="divisions">Select Division: </label>
            <?php
            $attributes = 'id="division" class="form-control"';
            echo form_dropdown('division', $division, set_value('division_id'), $attributes);
            ?>
        </div>
        <div class="col-md-6" style="color:navy">
            <label for="districts">Select District: </label>
            <?php
            $attributes = 'id="district" class="form-control"';
            echo form_dropdown('district', $district, set_value('district'), $attributes);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="color:navy">
            <label>Located Area: </label>
            <input class="form-control" type="text" name="area" placeholder="located area" required />
        </div>
        <div class="col-md-6" style="color:navy">
            <label>Target Month:</label>
            <input class="form-control" type="month" name="target_month" required/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="color:navy">
            <label>Rent:</label>
            <input class="form-control" type="number" name="rent" placeholder="Rent" />
        </div>
        <div class="col-md-6" style="color:navy">
            <label>Contact No:</label>
            <input class="form-control" type="number" name="contact" placeholder="Contact No" />
        </div>
    </div>

    <label style="color:navy">Address:</label>
    <textarea name="address" placeholder="Address" class="form-control"></textarea>
    <label style="color:navy">Detail:</label>
    <textarea name="detail" placeholder="If any additional facility or restriction, Please write down here..." class="form-control"></textarea>
    <div class="row">
        <div class="col-md-4" style="color:navy">
            <label>Image 1</label>
            <input class="form-control" type="file" name="image_1" />
        </div>
        <div class="col-md-4" style="color:navy">
            <label>Image 2</label>
            <input class="form-control" type="file" name="image_2"  />
        </div>
        <div class="col-md-4" style="color:navy">
            <label>Image 3</label>
            <input class="form-control" type="file" name="image_3"  />
        </div>
    </div>
    <label for="Category" style="color: navy">Select Category: </label>
    <select class="form-control" name="category" id='category' required>
        <option value="0" > --Select Category--</option>
        <?php foreach ($category as $value) { ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->category_name; ?></option>
        <?php } ?>
    </select>

    <div class="text-center" id="0">
        <h3  style="color:#008966">Please Select a category to show rest of the field....!!</h3>
    </div>


    <!-- Family Start-->
    <div style="display: none" id="1">

        <div class="row">

            <div class="col-md-6" style="color:navy">
                <label>Floor</label>
                <input class="form-control" type="number" name="family_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Generator Facility: </label>
                <select class="form-control" name="family_generator">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Number of bedroom:</label>
                <input type="number" class="form-control" name="family_bedroom" placeholder="Number of Bedroom" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Number of bathroom:</label>
                <input class="form-control" type="number" name="family_bathroom" placeholder="Number of Bathroom" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Parking Facility: </label>
                <select class="form-control" name="family_parking">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Lift Facility:</label>
                <select class="form-control" name="family_lift">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="family" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>


    </div>

    <!-- Shop Start-->
    <div style="display: none" id="2">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Market Name: </label>
                <input class="form-control" type="text" name="shop_market_name" placeholder="Market Name" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="shop_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Square Feet: </label>
                <input class="form-control" type="number" name="shop_square_feet" placeholder="Square Feet" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Ceiling Type:</label>
                <select class="form-control" name="shop_ceiling">
                    <option>----select----</option>
                    <option value="Concrete">Concrete</option>
                    <option value="Tin Shed">Tin Shed</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="shop" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Bachelor Start-->

    <div style="display: none" id="3">
        <div class="row">

            <div class="col-md-12" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="bachelor_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Number of bedroom: </label>
                <input class="form-control" type="number" name="bachelor_bedroom" placeholder="number of bedroom" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Number of bathroom:</label>
                <input class="form-control" type="number" name="bachelor_bathroom" placeholder="number of bathroom" />
            </div>
        </div>
        <button type="submit" name="submit" value="bachelor" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Sublet Start-->

    <div style="display: none" id="4">
        <div class="row">

            <div class="col-md-6" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="sublet_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Outer Door:</label>
                <select class="form-control" name="outer_door">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Number of Room:</label>
                <input class="form-control" name="sublet_bedroom" placeholder="Number of Room" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Attached Bathroom:</label>
                <select class="form-control" name="sublet_attached_bath">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="sublet" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Hostel Start-->

    <div style="display: none" id="5">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Hostel Name: </label>
                <input class="form-control" type="text" name="hostel_h_name" placeholder="Hostel Name" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Floor: </label>
                <input class="form-control" type="number" name="hostel_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="color:navy">
                <label>Available Seat:</label>
                <input class="form-control" type="number" name="hostel_available_seat" placeholder="Seat Number" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Share With:</label>
                <input class="form-control" type="number" name="hostel_room_mate" placeholder="Member" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Dining Facility:</label>
                <select class="form-control" name="hostel_dining_facility">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Hostel Category:</label>
                <select class="form-control" name="hostel_h_category">
                    <option>----select----</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Attached Bathroom:</label>
                <select class="form-control" name="hostel_attached_bath">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="hostel" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Godown Start-->

    <div style="display: none" id="6">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Market Name: </label>
                <input class="form-control" type="text" name="godown_market_name" placeholder="Market Name" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="godown_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Square Feet: </label>
                <input class="form-control" type="number" name="godown_square_feet" placeholder="Square Feet" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Ceiling Made:</label>
                <select class="form-control" name="godown_ceiling">
                    <option>----select----</option>
                    <option value="Concrete">Concrete</option>
                    <option value="Tin Shed">Tin Shed</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="godown" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Office Start-->

    <div style="display: none" id="7">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="office_floor" placeholder="Floor number. If ground floor then put 0"/>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Total Room: </label>
                <input class="form-control" type="number" name="office_bedroom" placeholder="Total room" />
            </div>

        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Square Feet: </label>
                <input class="form-control" type="number" name="office_square_feet" placeholder="Square Feet" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Number of bathroom: </label>
                <input class="form-control" type="number" name="office_bathroom" placeholder="Bathroom" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Parking Facility: </label>
                <select class="form-control" name="office_parking">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Lift Facility:</label>
                <select class="form-control" name="office_lift">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="office" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>

    </div>

    <!-- Garage Start-->

    <div style="display: none" id="8">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Square Feet: </label>
                <input class="form-control" type="number" name="garage_square_feet" placeholder="Suuare Feet" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Ceiling Made:</label>
                <select class="form-control" name="garage_ceiling">
                    <option>----select----</option>
                    <option value="Concrete">Concrete</option>
                    <option value="Tin Shed">Tin Shed</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Vehicle Typet: </label>
                <select class="form-control" name="vehicle_type">
                    <option>----select----</option>
                    <option value="Two Wheeler">Two Wheeler</option>
                    <option value="Four Wheeler">Four Wheeler</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Vehicle Quantity:</label>
                <input class="form-control" type="number" name="vehicle_quantity" placeholder="Vehicle Quantity" />
            </div>
        </div>
        <button type="submit" name="submit" value="garage" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>
    </div>

    <!-- Mess Start-->

    <div style="display: none" id="9">
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Mess Name:</label>
                <input class="form-control" type="text" name="mess_h_name" placeholder="Mess Name" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Floor Mo:</label>
                <input class="form-control" type="number" name="mess_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="color:navy">
                <label>Available Seat:</label>
                <input class="form-control" type="number" name="mess_available_seat" placeholder="Seat Number" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Room Member:</label>
                <input class="form-control" type="number" name="mess_room_mate" placeholder="Room Member" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Dining Facility:</label>
                <select class="form-control" name="mess_dining_facility">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Mess Category:</label>
                <select class="form-control" name="mess_h_category">
                    <option>----select----</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Attached Bathroom:</label>
                <select class="form-control" name="mess_attached_bath">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" value="mess" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>
    </div>

    <div style="display: none" id="10">
        <div class="row">

            <div class="col-md-6" style="color:navy">
                <label>Floor No:</label>
                <input class="form-control" type="number" name="family_bachelor_floor" placeholder="Floor number. If ground floor then put 0" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Generator Facility: </label>
                <select class="form-control" name="family_bachelor_generator">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Number of bedroom:</label>
                <input class="form-control" type="number" name="family_bachelor_bedroom" placeholder="Number of Bedroom" />
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Number of bathroom</label>
                <input class="form-control" type="number" name="family_bachelor_bathroom" placeholder="Number of Bathroom" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="color:navy">
                <label>Parking Facility: </label>
                <select class="form-control" name="family_bachelor_parking">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-6" style="color:navy">
                <label>Lift Facility:</label>
                <select class="form-control" name="family_bachelor_lift">
                    <option>----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

        <button type="submit" name="submit" value="family_bachelor" class="btn btn-primary btn-lg btn-block" style="border-radius: 5px; margin-top: 10px">Post Add</button>
    </div>
</form>
<script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#division').change(function () {
        var division_id = $(this).val();
        $("#district > option").remove();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Welcome/populate_district'); ?>",
            data: {id: division_id},
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