<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="form-group row">
    <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo $data->nama ?>">
      <?php echo form_error('nama') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea readonly name="alamat" id="input-alamat" rows="3" class="form-control"><?php echo $data->alamat ?></textarea>
      <?php echo form_error('alamat') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
      <textarea readonly name="deskripsi" id="input-deskripsi" rows="5" class="form-control"><?php echo $data->deskripsi ?></textarea>
      <?php echo form_error('deskripsi') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-_lat" class="col-sm-2 col-form-label">Lat / Long</label>
    <div class="col-sm-10">
      <div class="input-group">
      <input type="text" readonly name="_lat" class="form-control" id="input-_lat" placeholder="lattitude" value="<?php echo $data->_lat ?>">
      <input type="text" readonly name="_long" class="form-control" id="input-_long" placeholder="longtitude" value="<?php echo $data->_long ?>">
      </div>
      <?php echo form_error('_lat') ?>
      <?php echo form_error('_long') ?>
    </div>
  </div>
  <div class="row mb-2">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>

 

 <?php echo form_close(); ?>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>