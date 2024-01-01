<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none"><?= $barang ->nama_barang ?></h3>
              <div class="col-12">
                <img src="<?= base_url('assets/gambar/' .$barang->gambar ) ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' .$barang->gambar ) ?>" 
                alt="Product Image"></div>
                <?php foreach ($gambar as $key => $value) { ?>
                    <div class="product-image-thumb" ><img src="<?= base_url('assets/gambarbarang/' .$value->gambar ) ?>" 
                    alt="Product Image"></div>
                <?php } ?> 

</div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $barang ->nama_barang ?></h3>
              <hr>
              <h5><?= $barang ->nama_kategori ?> </h4>
              <hr>
              <p><?= $barang ->deskripsi ?></p>
              <hr>
              
                  
              

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp.<?= number_format($barang ->harga,0) ?>
                </h2>
              </div>
              <hr>

              <div class="mt-4">
              <div class="btn btn-success btn-lg btn-flat">
                <?php
                  $nama = $barang ->nama_barang;
                  $harga = number_format($barang ->harga,0);
                  $pesan = "Halo Dudans Busana\nsaya ingin memesan: $nama \nDengan harga        : $harga";
                  $pesan_encoded = urlencode($pesan);

                  ?>
    <a href="https://wa.me/6282211881230?text=<?php echo $pesan_encoded ?>" style="color: white;">
        <i class="fab fa-whatsapp fa-lg mr-2"></i> Pesan Sekarang
    </a>
      </div>

            </div>


              
              </div>

              <div class="mt-4 product-share">
    <a href="https://www.facebook.com/dudans.busana.3?mibextid=ZbWKwL" target="_blank" class="text-gray">
        <i class="fab fa-facebook-square fa-2x"></i>
    </a>
    <a href="https://www.instagram.com/novanovia61/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="text-gray">
        <i class="fab fa-instagram-square fa-2x"></i>
    </a>
</div>


            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- jQuery -->

<!-- AdminLTE for demo purposes -->
<script src="<?=base_url() ?>template/dist/js/demo.js"></script>
</body>
</html>
