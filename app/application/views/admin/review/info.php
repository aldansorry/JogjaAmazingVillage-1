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
            <input type="text" readonly name="nama" class="form-control-plaintext" id="input-nama" placeholder="nama" value="<?php echo $data->nama ?>">
            <?php echo form_error('nama') ?>
          </div>
     </div>

       <div class="form-group row">
          <label for="input-email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly name="email" class="form-control-plaintext" id="input-email" placeholder="email" value="<?php echo $data->email ?>">
            <?php echo form_error('email') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-rating" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <textarea name="rating" readonly class="form-control-plaintext" id="input-rating" cols="30" rows="10"><?php echo $data->rating ?></textarea>
            <?php echo form_error('rating') ?>
          </div>
     </div>

     <div class="form-group row">
          <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea name="keterangan" readonly class="form-control-plaintext" id="input-keterangan" cols="30" rows="10"><?php echo $data->keterangan ?></textarea>
            <?php echo form_error('keterangan') ?>
          </div>
     </div>

     <div class="form-group row">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
     <input type="text" readonly class="form-control-plaintext" value="<?php echo $data->id ?>">
   </div>
 </div>
 
<div class="row mb-2">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>