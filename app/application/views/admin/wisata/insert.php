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
          <label for="input-keterangan" class="col-sm-2 col-form-label">keterangan</label>
          <div class="col-sm-10">
           <input type="text" name="keterangan" class="form-control" keterangan="input-keterangan" placeholder="keterangan" value="<?php echo set_value('keterangan') ?>">
          <?php echo form_error('keterangan') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-harga" class="col-sm-2 col-form-label">harga</label>
          <div class="col-sm-10">
           <input type="text" name="harga" class="form-control" harga="input-harga" placeholder="harga" value="<?php echo set_value('harga') ?>">
          <?php echo form_error('harga') ?>
      </div>
 </div>


    <div class="form-group row">
          <label for="input-jamkunjung" class="col-sm-2 col-form-label">jamkunjung</label>
          <div class="col-sm-10">
           <input type="text" name="jamkunjung" class="form-control" jamkunjung="input-jamkunjung" placeholder="jamkunjung" value="<?php echo set_value('jamkunjung') ?>">
          <?php echo form_error('jamkunjung') ?>
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
          url: "<?php echo base_url('Admin/Wisata/insert') ?>",
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