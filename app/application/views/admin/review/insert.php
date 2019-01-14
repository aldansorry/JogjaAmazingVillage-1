<div class="modal-content bg-light">
     <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-nama" class="col-sm-2 col-form-label">nama</label>
          <div class="col-sm-10">
           <input type="text" name="nama" class="form-control" nama="input-nama" placeholder="nama" value="<?php echo set_value('nama') ?>">
          <?php echo form_error('nama') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-email" class="col-sm-2 col-form-label">email</label>
          <div class="col-sm-10">
           <input type="text" name="email" class="form-control" email="input-email" placeholder="email" value="<?php echo set_value('email') ?>">
          <?php echo form_error('email') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-telp" class="col-sm-2 col-form-label">telp</label>
          <div class="col-sm-10">
           <input type="text" name="telp" class="form-control" telp="input-telp" placeholder="telp" value="<?php echo set_value('telp') ?>">
          <?php echo form_error('telp') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-rating" class="col-sm-2 col-form-label">rating</label>
          <div class="col-sm-10">
           <input type="text" name="rating" class="form-control" rating="input-rating" placeholder="rating" value="<?php echo set_value('rating') ?>">
          <?php echo form_error('rating') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-keterangan" class="col-sm-2 col-form-label">keterangan</label>
          <div class="col-sm-10">
           <input type="text" name="keterangan" class="form-control" keterangan="input-keterangan" placeholder="keterangan" value="<?php echo set_value('keterangan') ?>">
          <?php echo form_error('keterangan') ?>
      </div>
 </div>
 

      <div class="form-group row">
          <label for="input-foto" class="col-sm-2 col-form-label">foto</label>
          <div class="col-sm-10">
           <input type="file" name="foto" class="form-control" foto="input-foto" placeholder="foto">
           <?php echo (isset($error) ? $error : "" ) ?>
      </div>
 </div>

 <?php echo form_close(); ?>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary" form="formdata">Save changes</button>
</div>

</div>
<script>
     $("form#formdata").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);    

      $.ajax({
          url: "<?php echo base_url('Admin/Review/insert') ?>",
          type: 'POST',
          data: formData,
          success: function (data) {
             $('#modal-content').html(data);
                    reload_table();
        },
        cache: false,
        contentType: false,
        processData: false
   });
 });
</script>