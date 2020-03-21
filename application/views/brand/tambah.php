
<?php $flashdata = $this->session->flashdata('data'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Tambah Brand</h3>
          
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('main/aksi_tambah_brand'); ?>" >
        <div class="box-body">

        <div class="form-group">
          <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Isi Nama" name="name"  required>
        </div>


        </div>

        <div class="tile-footer">
          <button id="simpan_tambah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
          &nbsp;&nbsp;&nbsp;
          <a class="btn btn-secondary" href="<?php echo base_url('main/brand'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
        </div>
    </form>
      </div>
    </div>
  </div>
</div>