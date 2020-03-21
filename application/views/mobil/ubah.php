
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Ubah Stock</h3> 
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('main/aksi_ubah'); ?>" >
          <div class="box-body">

          <input type="hidden" name="id" value="<?php echo $data->id;?>">

          <div class="form-group">
            <label for="Stock">Stock Saat Ini : </label>
                <?php
                  echo $data->stock;
                ?>          
          </div>

          <div class="form-group">
            <label for="Stock">Stock Menjadi</label>
                <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock" value="<?php echo $data->stock;?>" reqired>          
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('main/mobil'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
