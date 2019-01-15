<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
       <div class="form-group row">
          <label for="input-judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" readonly name="judul" class="form-control" id="input-judul" placeholder="judul" value="<?php echo $data->judul ?>">
            <?php echo form_error('judul') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-konten" class="col-sm-2 col-form-label">konten</label>
          <div class="col-sm-10">
            <textarea name="konten" readonly class="form-control" id="input-konten" cols="30" rows="10"><?php echo $data->konten ?></textarea>
            <?php echo form_error('konten') ?>
          </div>
     </div>
      <div class="form-group row">
          <label for="input-author" class="col-sm-2 col-form-label">author</label>
          <div class="col-sm-10">
            <input type="text" readonly name="author" class="form-control" id="input-author" placeholder="author" value="<?php echo $data->author ?>">
            <?php echo form_error('author') ?>
          </div>
     </div>
      <div class="form-group row">
          <label for="input-tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="datetime" readonly name="tanggal" class="form-control" id="input-tanggal" placeholder="tanggal" value="<?php echo $data->tanggal ?>">
            <?php echo form_error('tanggal') ?>
          </div>
     </div>
 
<div class="row mb-2">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/agenda/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/agenda/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/agenda/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>