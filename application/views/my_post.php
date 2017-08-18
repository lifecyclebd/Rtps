
<div style=" border-radius: 5px; color:white">
    <table class="table table-responsive" style="font-size:14px">
        <thead style="background-color: #337ab7">
      <tr>
        <th>Post Category</th>
        <th>Post Date Time</th>
        <th>Division</th>
        <th>District</th>
        <th>Area</th>
        <th>Target Month</th>
        <th>Rent</th>
        <th>Contact No</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody style="background-color: whitesmoke;color: navy">
        <?php foreach ($post as $value) {?>
      <tr>
          <td><?php echo $value->category_name;?></td>
          <td><?php echo $value->post_time;?></td>
          <td><?php echo $value->div_name;?></td>
          <td><?php echo $value->district_name;?></td>
          <td><?php echo $value->area;?></td>
          <td><?php echo $value->target_month;?></td>
          <td><?php echo $value->rent;?></td>
          <td><?php echo $value->contact;?></td>
          <td> <a href="<?php echo base_url();?>user/edit_post"><i class="fa fa-pencil-square-o" style="font-size:16px; color:green" aria-hidden="true"></i></a> | <a href="<?php echo base_url();?>user/delete_post/<?php echo $value->id; ?>"><i class="fa fa-trash" style="font-size:16px; color: red" aria-hidden="true"></i></a> </td>
      </tr>
        <?php }?>
    </tbody>
  </table>
</div>