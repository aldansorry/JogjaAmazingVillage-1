<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-judul" class="col-sm-2 col-form-label">judul</label>
          <div class="col-sm-10">
            <input type="text" readonly name="judul" class="form-control-plaintext" id="input-judul" placeholder="judul" value="<?php echo $data->judul ?>">
            <?php echo form_error('judul') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-nourut" class="col-sm-2 col-form-label">nourut</label>
          <div class="col-sm-10">
            <input type="text" readonly name="nourut" class="form-control-plaintext" id="input-nourut" placeholder="nourut" value="<?php echo $data->nourut ?>">
            <?php echo form_error('nourut') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-ukuran" class="col-sm-2 col-form-label">Ukuran</label>
          <div class="col-sm-10">
            <textarea name="text" readonly class="form-control-plaintext" id="input-ukuran" cols="30" rows="10"><?php echo $data->ukuran ?></textarea>
            <?php echo form_error('ukuran') ?>
          </div>
     </div>
 
<div class="row mb-2">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/galeri/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/galeri/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/galeri/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>