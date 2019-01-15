<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-no" class="col-sm-2 col-form-label">no</label>
          <div class="col-sm-10">
            <input type="text" readonly name="no" class="form-control-plaintext id="input-no" placeholder="no" value="<?php echo $data->no ?>">
            <?php echo form_error('no') ?>
          </div>
     </div>
      <div class="form-group row">
          <label for="input-kategori" class="col-sm-2 col-form-label">kategori</label>
          <div class="col-sm-10">
            <input type="text" readonly name="kategori" class="form-control-plaintext id="input-kategori" placeholder="kategori" value="<?php echo $data->kategori ?>">
            <?php echo form_error('kategori') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-fasilitas" class="col-sm-2 col-form-label">fasilitas</label>
          <div class="col-sm-10">
            <input type="text" readonly name="fasilitas" class="form-control-plaintext id="input-fasilitas" placeholder="fasilitas" value="<?php echo $data->fasilitas ?>">
            <?php echo form_error('fasilitas') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-status" class="col-sm-2 col-form-label">status</label>
          <div class="col-sm-10">
            <textarea name="text" readonly class="form-control-plaintext id="input-status" cols="30" rows="10"><?php echo $data->status ?></textarea>
            <?php echo form_error('status') ?>
          </div>
     </div>
 
<div class="row mb-2">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>