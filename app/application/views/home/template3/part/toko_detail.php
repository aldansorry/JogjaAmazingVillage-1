<section class="blog-posts-area section-gap">
  <div class="container">
   <div class="row">
  <div class="col-lg-3"></div>
    <div class="col-lg-6 post-list blog-post-listmt-5 my-5 text-center">
     <div class="single-post">
      <a href="#">
     <h1>
      <?php echo $toko->nama ?>
    </h1>
  </a>
      <img class="img-fluid" src="<?php echo base_url('uploads/toko/'.$toko->foto) ?>" alt="">
  <div class="content-wrap">
   <p>
    <?php echo $toko->keterangan ?>
  </p>
</div>
<div class="content-wrap">
   <p>
    <?php echo $toko->alamat ?>
  </p>
</div>
<div class="content-wrap">
   <p>
    <?php echo $toko->jenis ?>
  </p>
</div>
</div>
</div>
</div>
</div>  
</section>