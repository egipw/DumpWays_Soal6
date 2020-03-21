

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        
        <div class="box-body">
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('main/tambah_brand'); ?>"><i class="fa fa-plus"></i>Tambah Brand</a></p>

          <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Id</th>
              <th>Brand</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($items as $item) {
              ?>
              <tr>
                <td><?php echo $item->id; ?></td>
                <td><?php echo $item->name; ?></td>
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
