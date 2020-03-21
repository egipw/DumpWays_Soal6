

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        
        <div class="box-body">
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('main/tambah_mobil'); ?>"><i class="fa fa-plus"></i>Tambah Mobil</a></p>

          <?php
            if (file_exists('uploads/carsimage/' . $this->session->id)) {
              $userimage = 'uploads/carsimage/' . $this->session->id;
            } else {
              $userimage = 'assets/user.png';
            }
            ?>

          <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Stok</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($items as $item) {
              ?>
              <tr>
                <td><?php echo $item->name; ?></td>
                <td>
                  <center>
                    <img  src="<?php echo base_url($userimage) ?>">
                  </center>
                </td>
                <td><?php echo $item->stock; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('main/upload/' . $item->id); ?>" data-toggle="tooltip" title="Upload Gambar"><i class="fa fa-upload"></i></a>

                  <a class="btn btn-primary" href="<?php echo base_url('main/ubah/' . $item->id); ?>" data-toggle="tooltip" title="Ubah Stock"><i class="fa fa-edit"></i></a>

                  <a class="btn btn-primary" href="<?php echo base_url('main/detail/' . $item->id); ?>" data-toggle="tooltip" title="Beli / Detail"><i class="fa fa-edit"></i></a>
                  </div>
                </td>
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
