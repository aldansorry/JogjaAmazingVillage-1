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
          <label for="input-alamat" class="col-sm-2 col-form-label">alamat</label>
          <div class="col-sm-10">
           <input type="text" name="alamat" class="form-control" alamat="input-alamat" placeholder="alamat" value="<?php echo set_value('alamat') ?>">
          <?php echo form_error('alamat') ?>
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
          <label for="input-jenis" class="col-sm-2 col-form-label">jenis</label>
          <div class="col-sm-10">
           <input type="text" name="jenis" class="form-control" jenis="input-jenis" placeholder="jenis" value="<?php echo set_value('jenis') ?>">
          <?php echo form_error('jenis') ?>
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
          url: "<?php echo base_url('Admin/Toko/insert') ?>",
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