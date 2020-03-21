

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Upload Gambar</h3>
         
        </div>

        <div class="alert alert-dismissible alert-danger">
          <p>Upload photo mobil <b><?php echo $data->name;?></b>. Photo tidak berukuran lebih dari 2 MB </p>
        </div>

        <form id="form_ubah" method="post" action="<?php echo base_url('main/aksi_upload'); ?>" enctype="multipart/form-data">
          
        <input type="hidden" name="id" value="<?php echo $data->id;?>">

          <div class="form-group">
            <label class="control-label">Foto</label>
            <input class="form-control" type="file" name="foto">
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
