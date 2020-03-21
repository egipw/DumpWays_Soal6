
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">

        <div class="tile-title-w-btn">
          <h3 class="title">Detail</h3> 
        </div>

        <?php
            if (file_exists('uploads/carsimage/' . $this->session->id)) {
              $userimage = 'uploads/carsimage/' . $this->session->id;
            } else {
              $userimage = 'assets/user.png';
            }
            ?>

            <input type="hidden" name="id" value="<?php echo $data->id;?>">

            <table>
              <tr>
                <th>
                  <img  src="<?php echo base_url($userimage) ?>">
                </th>
                <th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                <th>
                  Nama<br>
                  Brand<br>
                  Color<br>
                  Description<br>
                  Create Time<br>
                  Update Time<br>
                  Stock<br>
                </th>
                <th></th><th></th><th></th>
                <th>
                  : <br>
                  : <br> 
                  : <br> 
                  : <br> 
                  : <br> 
                  : <br> 
                  : <br> 
                </th>
                <th></th><th></th><th></th>
                <th>
                  <?php echo $data->name;?><br>
                  <?php echo $data->brand_id;?><br>
                  <?php echo $data->color;?><br>
                  <?php echo $data->description;?><br>
                  <?php echo $data->create_time;?><br>
                  <?php echo $data->update_time;?><br>
                  <?php echo $data->stock;?><br>
                </th>
              </tr>
            </table>  
          <br>
            <a class="btn btn-secondary" href="<?php echo base_url('main/mobil'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          
      </div>
    </div>
  </div>
</div>
