<section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>TOKO ELEKTRONIK SP</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Semoga Puas dengan Pelayanan di toko kami
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Isi Dengan Lengkap</strong></h4>
          <p>
            Data Pembelian!
          </p>
          <!-- start contact form -->
          <div class="cform" id="contact-form">


            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="<?= base_url('umum/creat'); ?>" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="kode_barang" class="form-control" id="kode_barang" placeholder="Kode Barang" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
                 <div class="form-group">
                <input type="date" name="Tanggal_beli" class="form-control" id="Tanggal_Beli" placeholder="Tanggal Pembelian" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
             
              <div class="form-group">
                <input type="text" name="Nama_Barang" class="form-control" id="Nama_Barang" placeholder="Nama Barang" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
               <input type="text" class="form-control" name="Harga" id="Harga" placeholder="Harga" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <input type="text" name="Nama_pembeli" class="form-control" id="Nama_pembeli" placeholder="Nama Pembeli" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
               <input type="number" class="form-control" name="No_HP" id="No_Hp" placeholder="NO HP" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
               

              <div class="text-center"><button type="submit" name="submit" value="Submit" class="btn btn-lg btn-theme">Simpan</button>
              <button type="cancel" class="btn btn-lg btn-danger">Batal</button></div>
            </form></div>
          </div>
          <!-- END contact form -->
        </div>
  </section>