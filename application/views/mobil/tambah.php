
<?php $flashdata = $this->session->flashdata('data'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Tambah Mobil</h3>
          
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('main/aksi_tambah_mobil'); ?>" >
        <div class="box-body">

        <div class="form-group">
          <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Isi Nama" name="name"  required>
        </div>

        <div class="form-group">
          <label for="brand_id">brand_id</label>
              <input type="brand_id" class="form-control" id="brand_id" placeholder="brand_id" name="brand_id" required>         
        </div>

        <div class="form-group">
          <label for="color">Warna</label>
              <input type="text" class="form-control" id="color" placeholder="Warna" name="color" required>         
        </div>

        <div class="form-group">
          <label for="description">Deskripsi</label>
              <input type="description" class="form-control" id="description" placeholder="Deskripsi" name="description" required>          
        </div>

        <div class="form-group">
          <label for="create_time">Crete Date</label>
              <input type="Date" class="form-control" id="create_time" placeholder="create_time" name="create_time" required>          
        </div>

        <div class="form-group">
          <label for="update_time">Update Date</label>
              <input type="date" class="form-control" id="update_time" placeholder="update_time" name="update_time" required>          
        </div>

        <div class="form-group">
          <label for="stock">Stock</label>
              <input type="stock" class="form-control" id="stock" placeholder="stock" name="stock" required>          
        </div>


        </div>

        <div class="tile-footer">
          <button id="simpan_tambah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
          &nbsp;&nbsp;&nbsp;
          <a class="btn btn-secondary" href="<?php echo base_url('main/mobil'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
        </div>
    </form>
      </div>
    </div>
  </div>
</div>