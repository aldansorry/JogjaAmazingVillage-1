<div class="modal-content bg-light">
     <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal" class="form-control" id="input-tanggal" value="<?php echo date('Y-m-d') ?>">
            <?php echo form_error('tanggal') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" name="judul" class="form-control" id="input-judul" value="<?php echo set_value('judul') ?>">
            <?php echo form_error('judul') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea name="keterangan" class="form-control" id="input-keterangan"><?php echo set_value('keterangan') ?></textarea>
            <?php echo form_error('keterangan') ?>
          </div>
     </div>
 
<div class="row mb-2">
  <div class="col-sm-2"></div>
  <div class="col-md-10">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
<div class="form-group row">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-sm-10">
    <input type="file" name="foto" class="form-control" id="input-foto" placeholder="foto" accept="image/*">
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
          url: "<?php echo base_url('Admin/Agenda/insert') ?>",
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
     //di bawah ini di tambahkan
     function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.img-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#input-foto").change(function() {
  readURL(this);
});
</script>