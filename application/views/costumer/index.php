

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        
        <div class="box-body">
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('main/tambah_costumer'); ?>"><i class="fa fa-plus"></i>Tambah Costumer</a></p>

          <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>E-Mail</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($items as $item) {
              ?>
              <tr>
                <td><?php echo $item->name; ?></td>
                <td><?php echo $item->email; ?></td>
                <td><?php echo $item->address; ?></td>

              </tr>
          <?php
          }
        ?>
          </tbody>
        </table>

        </div>

      </div>
    </div>
  </div>
</div>
