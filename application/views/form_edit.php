<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Form Pendaftaran - Gema Insani</title>
      <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo.png" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="<?php echo base_url(); ?>./css/styles.css" rel="stylesheet" />
      
      <!-- DROPDOWN -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      <!-- DROPDOWN -->

      <!-- DATEPICKER -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <!-- DATEPICKER -->

      <!-- <link rel="stylesheet" type="text/css" href="assets/plugin/datepicker/dist/css/bootstrap-datepicker.min.css">
      <script type="text/javascript" src="assets/plugin/datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->

      <!--formden.js akan membuat output data AJAX-->
      <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

      <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

      <!--Font Awesome (added because you use icons in your prepend/append)-->
      <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

      <!-- Inline CSS based on choices in "Settings" tab -->
      <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
      
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="https://www.gemainsani.co.id/" target="blank"><img src="assets/img/logo.png" alt="" /> GEMA INSANI</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>Page/welcome">Home Admin</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dataPribadi">Data Pribadi</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dataKeluarga">Data Keluarga</a></li>
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Lainnya </a>
                  <ul class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#riwPendidikan">Riwayat Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kursus">Kursus</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#riwPekerjaan">Riwayat Pekerjaan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#referensi">Referensi</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#infoLain">Informasi Lain</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Masthead-->
        <br>
        <table class="table table-bordered" id="tableLoop">
        <?php echo form_open_multipart('Welcome/AksiEdit'); ?>
          <!-- Data Pribadi -->
          <section class="page-section" id="dataPribadi">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Pribadi</h2>
                <h3 class="section-subheading text-muted">Silahkan mengisi data dengan sebenar-benarnya.</h3>
              </div>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" value="<?php echo $data_pgw->id_lmr ?>" disabled> 
                  <input type="hidden" name="id_lmr" value="<?php echo $data_pgw->id_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="file" id="img_lmr" name="img_lmr" class="form-control" size="20" accept=".png, .jpg, .jpeg">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="jab_lmr" name="jab_lmr" placeholder="*Posisi yang dilamar"  value="<?php echo $data_pgw->jab_lmr ?>" required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="nama_lmr" name="nama_lmr" placeholder="*Nama Lengkap" value="<?php echo $data_pgw->nama_lmr ?>" required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="no_ktp_lmr" name="no_ktp_lmr" placeholder="*No. KTP" value="<?php echo $data_pgw->no_ktp_lmr ?>" required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="no_npwp_lmr" name="no_npwp_lmr" placeholder="No. NPWP" value="<?php echo $data_pgw->no_npwp_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="rowsaya">
                  <input type="text" class="form-control" id="tmp_lahir_lmr" name="tmp_lahir_lmr" placeholder="*Tempat Lahir" value="<?php echo $data_pgw->tmp_lahir_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" id="tgl_lahir_lmr" name="tgl_lahir_lmr" placeholder="*Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_lmr ?>">
                  </div>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="alamat_lmr" name="alamat_lmr" placeholder="*Alamat Rumah" value="<?php echo $data_pgw->alamat_lmr ?>">
                </div>
                <div class="col-sm-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="telp_lmr" name="telp_lmr" placeholder="Telepon Rumah" value="<?php echo $data_pgw->telp_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="hp_lmr" name="hp_lmr" placeholder="*HP" value="<?php echo $data_pgw->hp_lmr ?>" required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="email_lmr" name="email_lmr" placeholder="Alamat e-mail" value="<?php echo $data_pgw->email_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="jk_lmr" name="jk_lmr" placeholder="*Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="agama_lmr" name="agama_lmr" placeholder="*Agama" value="<?php echo $data_pgw->agama_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
              <br>
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="stat_nkh_lmr" name="stat_nkh_lmr" placeholder="*Status Perkawinan (Lajang / Menikah / Bercerai)" value="<?php echo $data_pgw->stat_nkh_lmr ?>">
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </section>
          <!-- Data Keluarga -->
          <section class="page-section bg-light" id="dataKeluarga">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Keluarga</h2>
                <h3 class="section-subheading text-muted">
                  Cantumkanlah susunan anggota keluarga anda (Ayah, Ibu, Saudara Kandung, <b>termasuk diri anda</b>).
                  <br><br>
                  Bila Anda sudah menikah, harap diisi dengan data keluarga Anda (Suami / Istri & Anak).
                </h3>
              </div>
              <h4 class="text-muted">1.</h4>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_anggota_1" name="n_anggota_1" placeholder="Nama" value="<?php echo $data_pgw->n_anggota_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="stat_anggota_1" name="stat_anggota_1" placeholder="Status di Keluarga" value="<?php echo $data_pgw->stat_anggota_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jk_anggota_1" name="jk_anggota_1" placeholder="Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_anggota_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_lahir_anggota_1" name="tgl_lahir_anggota_1" placeholder="Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_anggota_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="pend_anggota_1" name="pend_anggota_1" placeholder="Pendidikan" value="<?php echo $data_pgw->pend_anggota_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="pek_anggota_1" name="pek_anggota_1" placeholder="Pekerjaan" value="<?php echo $data_pgw->pek_anggota_1 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">2.</h4>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_anggota_2" name="n_anggota_2" placeholder="Nama" value="<?php echo $data_pgw->n_anggota_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="stat_anggota_2" name="stat_anggota_2" placeholder="Status di Keluarga" value="<?php echo $data_pgw->stat_anggota_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jk_anggota_2" name="jk_anggota_2" placeholder="Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_anggota_2 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_lahir_anggota_2" name="tgl_lahir_anggota_2" placeholder="Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_anggota_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="pend_anggota_2" name="pend_anggota_2" placeholder="Pendidikan" value="<?php echo $data_pgw->pend_anggota_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="pek_anggota_2" name="pek_anggota_2" placeholder="Pekerjaan" value="<?php echo $data_pgw->pek_anggota_2 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">3.</h4>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_anggota_3" name="n_anggota_3" placeholder="Nama" value="<?php echo $data_pgw->n_anggota_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="stat_anggota_3" name="stat_anggota_3" placeholder="Status di Keluarga" value="<?php echo $data_pgw->stat_anggota_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jk_anggota_3" name="jk_anggota_3" placeholder="Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_anggota_3 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_lahir_anggota_3" name="tgl_lahir_anggota_3" placeholder="Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_anggota_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="pend_anggota_3" name="pend_anggota_3" placeholder="Pendidikan" value="<?php echo $data_pgw->pend_anggota_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="pek_anggota_3" name="pek_anggota_3" placeholder="Pekerjaan" value="<?php echo $data_pgw->pek_anggota_3 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">4.</h4>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_anggota_4" name="n_anggota_4" placeholder="Nama" value="<?php echo $data_pgw->n_anggota_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="stat_anggota_4" name="stat_anggota_4" placeholder="Status di Keluarga" value="<?php echo $data_pgw->stat_anggota_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jk_anggota_4" name="jk_anggota_4" placeholder="Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_anggota_4 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_lahir_anggota_4" name="tgl_lahir_anggota_4" placeholder="Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_anggota_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="pend_anggota_4" name="pend_anggota_4" placeholder="Pendidikan" value="<?php echo $data_pgw->pend_anggota_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="pek_anggota_4" name="pek_anggota_4" placeholder="Pekerjaan" value="<?php echo $data_pgw->pek_anggota_4 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">5.</h4>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_anggota_5" name="n_anggota_5" placeholder="Nama" value="<?php echo $data_pgw->n_anggota_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="stat_anggota_5" name="stat_anggota_5" placeholder="Status di Keluarga" value="<?php echo $data_pgw->stat_anggota_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jk_anggota_5" name="jk_anggota_5" placeholder="Jenis Kelamin ( L / P )" value="<?php echo $data_pgw->jk_anggota_5 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_lahir_anggota_5" name="tgl_lahir_anggota_5" placeholder="Tanggal Lahir" readonly="" value="<?php echo $data_pgw->tgl_lahir_anggota_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="pend_anggota_5" name="pend_anggota_5" placeholder="Pendidikan" value="<?php echo $data_pgw->pend_anggota_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="pek_anggota_5" name="pek_anggota_5" placeholder="Pekerjaan" value="<?php echo $data_pgw->pek_anggota_5 ?>">
                  </div>
                </div>
              </div>
              <p class="text-muted"><i><b>*Status di Keluarga (Ayah / Ibu / Anak ke-.. , Suami / Istri)</b></i></p>
            </div>
          </section>
          <!-- Riwayat Pendidikan -->
          <section class="page-section" id="riwPendidikan">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Riwayat Pendidikan</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              <h4 class="text-muted">1. SD</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_1" name="n_pend_1" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_1" name="in_pend_1" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="out_pend_1" name="out_pend_1" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_1" name="ket_lulus_pend_1" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_1 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">2. SMP</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_2" name="n_pend_2" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_2 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_2" name="in_pend_2" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="out_pend_2" name="out_pend_2" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_2" name="ket_lulus_pend_2" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_2 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">3. SMA</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_3" name="n_pend_3" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="jur_pend_3" name="jur_pend_3" placeholder="Jurusan" value="<?php echo $data_pgw->jur_pend_3 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_3" name="in_pend_3" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="out_pend_3" name="out_pend_3" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_3 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_3" name="ket_lulus_pend_3" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_3 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">4. Akademi</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_4" name="n_pend_4" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jur_pend_4" name="jur_pend_4" placeholder="Jurusan" value="<?php echo $data_pgw->jur_pend_4 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_4" name="in_pend_4" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="out_pend_4" name="out_pend_4" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_4 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_4" name="ket_lulus_pend_4" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_4 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">5. S1</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_5" name="n_pend_5" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jur_pend_5" name="jur_pend_5" placeholder="Jurusan" value="<?php echo $data_pgw->jur_pend_5 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_5" name="in_pend_5" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="out_pend_5" name="out_pend_5" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_5 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_5" name="ket_lulus_pend_5" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_5 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">6. S2</h4>
              <div class="row">
                <div class="col-lg-8 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="n_pend_6" name="n_pend_6" placeholder="Nama dan Lokasi Sekolah" value="<?php echo $data_pgw->n_pend_6 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jur_pend_6" name="jur_pend_6" placeholder="Jurusan" value="<?php echo $data_pgw->jur_pend_6 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="in_pend_6" name="in_pend_6" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_pend_6 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="out_pend_6" name="out_pend_6" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_pend_6 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_lulus_pend_6" name="ket_lulus_pend_6" placeholder="Lulus / Tidak Lulus" value="<?php echo $data_pgw->ket_lulus_pend_6 ?>">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Kursus -->
          <section class="page-section bg-light" id="kursus">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Kursus / Pelatihan</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              <h4 class="text-muted">1.</h4>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_kursus_1" name="n_kursus_1" placeholder="Nama" value="<?php echo $data_pgw->n_kursus_1 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="in_kursus_1" name="in_kursus_1" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_kursus_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="out_kursus_1" name="out_kursus_1" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_kursus_1 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_kursus_1" name="ket_kursus_1" placeholder="Keterangan" value="<?php echo $data_pgw->ket_kursus_1 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">2.</h4>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_kursus_2" name="n_kursus_2" placeholder="Nama" value="<?php echo $data_pgw->n_kursus_2 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="in_kursus_2" name="in_kursus_2" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_kursus_2 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="out_kursus_2" name="out_kursus_2" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_kursus_2 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_kursus_2" name="ket_kursus_2" placeholder="Keterangan" value="<?php echo $data_pgw->ket_kursus_2 ?>">
                  </div>
                </div>
              </div>
              <h4 class="text-muted">3.</h4>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_kursus_3" name="n_kursus_3" placeholder="Nama" value="<?php echo $data_pgw->n_kursus_3 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="in_kursus_3" name="in_kursus_3" placeholder="Dari (bln/thn)" readonly="" value="<?php echo $data_pgw->in_kursus_3 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="out_kursus_3" name="out_kursus_3" placeholder="Sampai (bln/thn)" readonly="" value="<?php echo $data_pgw->out_kursus_3 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="ket_kursus_3" name="ket_kursus_3" placeholder="Keterangan" value="<?php echo $data_pgw->ket_kursus_3 ?>">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Riwayat Pekerjaan -->
          <section class="page-section" id="riwPekerjaan">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Riwayat Pekerjaan</h2>
                <h3 class="section-subheading text-muted">Tuliskan pekerjaan yang terakhir / saat ini</h3>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_riw_pek" name="n_riw_pek" placeholder="Nama Perusahaan" value="<?php echo $data_pgw->n_riw_pek ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="j_usaha_riw" name="j_usaha_riw" placeholder="Jenis Usaha" value="<?php echo $data_pgw->j_usaha_riw ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="alamat_riw" name="alamat_riw" placeholder="Alamat" value="<?php echo $data_pgw->alamat_riw ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="telp_pek" name="telp_pek" placeholder="Telepon" value="<?php echo $data_pgw->telp_pek ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="div_pek" name="div_pek" placeholder="Div / Departemen" value="<?php echo $data_pgw->div_pek ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="posisi_riw" name="posisi_riw" placeholder="Posisi Saat ini" value="<?php echo $data_pgw->posisi_riw ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="posisi_atsn" name="posisi_atsn" placeholder="Posisi Atasan Langsung" value="<?php echo $data_pgw->posisi_atsn ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="tgl_riw_join" name="tgl_riw_join" placeholder="Tanggal bergabung" readonly="" value="<?php echo $data_pgw->tgl_riw_join ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">Penghasilan yang diterima saat ini (perusahaan terakhir):</h6>
              <p class="text-muted"><i>(kandidat akan diminta untuk memberikan <b>slip gaji</b> asli sebagai bukti penghasilan yang diterima, pada tahapan negosiasi)</i></p>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <p class="text-muted">Gaji Pokok</p>
                    <input type="text" class="form-control" id="gaji_p_riw" name="gaji_p_riw" placeholder="Rp" value="<?php echo $data_pgw->gaji_p_riw ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <p class="text-muted">Uang Transport / Makan</p>
                    <input type="text" class="form-control" id="uang_tp_mkn_riw" name="uang_tp_mkn_riw" placeholder="Rp" value="<?php echo $data_pgw->uang_tp_mkn_riw ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <p class="text-muted">Lain - lain</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="uang_lain_ket" name="uang_lain_ket" placeholder="(Sebutkan)" value="<?php echo $data_pgw->uang_lain_ket ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="uang_lain" name="uang_lain" placeholder="Rp" value="<?php echo $data_pgw->uang_lain ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <p class="text-muted">Benefit lain yang di terima</p>
                    <input type="text" class="form-control" id="benefit_riw" name="benefit_riw" placeholder="Rp" value="<?php echo $data_pgw->uang_lain ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <p class="text-muted">Minumum gaji yang diinginkan <b>(Wajib diisi)</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="min_gaji" name="min_gaji" placeholder="Rp" value="<?php echo $data_pgw->min_gaji ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="min_gaji_ket" name="min_gaji_ket" placeholder="Bersih / Kotor" value="<?php echo $data_pgw->min_gaji_ket ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <p class="text-muted">Kapan bisa bergabung dengan GEMA INSANI</p>
                  <input type="text" class="form-control" id="tgl_join" name="tgl_join" placeholder="" readonly="" value="<?php echo $data_pgw->tgl_join ?>">
                </div>
              </div>
            </div>
          </section>
          <!-- Referensi -->
          <section class="page-section bg-light" id="referensi">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Referensi</h2>
                <h3 class="section-subheading text-muted"></h3>
              </div>
              <h6 class="text-muted">
                Sebutkan 2 orang yang kenal baik dengan reputasi Anda, akan tetapi bukan saudara atau teman Anda,<br>contoh : atasan saat ini dan atasan dari atasan.
              </h6>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_ref_1" name="n_ref_1" placeholder="Nama" value="<?php echo $data_pgw->n_ref_1 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="hub_ref_1" name="hub_ref_1" placeholder="Hubungan" value="<?php echo $data_pgw->hub_ref_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jab_ref_1" name="jab_ref_1" placeholder="Posisi / Jabatan" value="<?php echo $data_pgw->jab_ref_1 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="telp_ref_1" name="telp_ref_1" placeholder="No. Telp" value="<?php echo $data_pgw->telp_ref_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_ref_2" name="n_ref_2" placeholder="Nama" value="<?php echo $data_pgw->n_ref_2 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="hub_ref_2" name="hub_ref_2" placeholder="Hubungan" value="<?php echo $data_pgw->hub_ref_2 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="jab_ref_2" name="jab_ref_2" placeholder="Posisi / Jabatan" value="<?php echo $data_pgw->jab_ref_2 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="telp_ref_2" name="telp_ref_2" placeholder="No. Telp" value="<?php echo $data_pgw->telp_ref_2 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">
                Apakah Anda memiliki saudara kandung atau kerabat yang bekerja di GEMA INSANI? (Ya / Tidak).<br>Bila Ya, sebutkan nama lengkap, jabatan/bagian & perusahaan tempat bekerja :
              </h6>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_kerabat_1" name="n_kerabat_1" placeholder="Nama Lengkap" value="<?php echo $data_pgw->n_kerabat_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="jab_kerabat_1" name="jab_kerabat_1" placeholder="Jabatan" value="<?php echo $data_pgw->jab_kerabat_1 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="hub_kerabat_1" name="hub_kerabat_1" placeholder="Hubungan dengan Anda" value="<?php echo $data_pgw->hub_kerabat_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_kerabat_2" name="n_kerabat_2" placeholder="Nama Lengkap" value="<?php echo $data_pgw->n_kerabat_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="jab_kerabat_2" name="jab_kerabat_2" placeholder="Jabatan" value="<?php echo $data_pgw->jab_kerabat_2 ?>">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="hub_kerabat_2" name="hub_kerabat_2" placeholder="Hubungan dengan Anda" value="<?php echo $data_pgw->hub_kerabat_2 ?>">
                  </div>
                </div>
              </div>
              </div>
            </div>
          </section>
          <!-- Informasi Lain -->
          <section class="page-section" id="infoLain">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Informasi Lain</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              <h6 class="text-muted">1. Penguasaan bahasa asing / keahlian lain (misal : komputer)</h6>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_skill_1" name="n_skill_1" placeholder="Jenis Keahlian" value="<?php echo $data_pgw->n_skill_1 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="lv_skill_1" name="lv_skill_1" placeholder="Pasif / Aktif" value="<?php echo $data_pgw->lv_skill_1 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_skill_2" name="n_skill_2" placeholder="Jenis Keahlian" value="<?php echo $data_pgw->n_skill_2 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="lv_skill_2" name="lv_skill_2" placeholder="Pasif / Aktif" value="<?php echo $data_pgw->lv_skill_2 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_skill_3" name="n_skill_3" placeholder="Jenis Keahlian" value="<?php echo $data_pgw->n_skill_3 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="lv_skill_3" name="lv_skill_3" placeholder="Pasif / Aktif" value="<?php echo $data_pgw->lv_skill_3 ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="n_skill_4" name="n_skill_4" placeholder="Jenis Keahlian" value="<?php echo $data_pgw->n_skill_4 ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <div class="portfolio-caption">
                    <input type="text" class="form-control" id="lv_skill_4" name="lv_skill_4" placeholder="Pasif / Aktif" value="<?php echo $data_pgw->lv_skill_4 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">2. Aktivitas / hobi Anda di masa senggang :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_1" name="info_1" placeholder="" value="<?php echo $data_pgw->info_1 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">3. Apakah Anda menjadi anggota Organisasi Sosial / Profesi tertentu? (Ya / Tidak).<br>Bila Ya, Sebutkan :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_2" name="info_2" placeholder="" value="<?php echo $data_pgw->info_2 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">4. Prestasi / keberhasilan Anda dalam tugas dan tanggung jawab yang diberikan, atau kemampuan indivisu yang menonjol :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_3" name="info_3" placeholder="" value="<?php echo $data_pgw->info_3 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">5. Apakah Anda pernah menderita penyakit yang menyebabkan Anda di rawat di rumah sakit? (Ya / Tidak).<br>Bila Ya, Penyakit apa dan dirawat berapa lama?</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_4" name="info_4" placeholder="" value="<?php echo $data_pgw->info_4 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">6. Apakah anda menderita penyakit menurun? (Ya / Tidak).<br>Bila Ya, penyakit apa? :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_5" name="info_5" placeholder="" value="<?php echo $data_pgw->info_5 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">7. Apakah Anda mengidap penyakit tertentu sekarang ini? (Ya / Tidak).<br>Bila Ya, penyakit apa? :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_6" name="info_6" placeholder="" value="<?php echo $data_pgw->info_6 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">8. Apakah Anda buta warna? (Ya / Tidak).<br>Bila Ya, apakah : a.Buta warna total b.Buta warna sebagian :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_7" name="info_7" placeholder="" value="<?php echo $data_pgw->info_7 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">9. Apakah anda pernah terlibat kriminal yang menyebabkan Anda berurusan dengan hukum? (Ya / Tidak).<br>Bila Ya, Kapan dan karena apa? :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_8" name="info_8" placeholder="" value="<?php echo $data_pgw->info_8 ?>">
                  </div>
                </div>
              </div>
              <h6 class="text-muted">10. Apakah Anda bersedia ditempatkan di luar Jakarta? (Ya / Tidak).<br>Bila Tidak, sebutkan alasan :</h6>
              <div class="row">
                <div class="col-lg-12 col-sm-6 mb-4">
                  <div class="portfolio-item">
                    <input type="text" class="form-control" id="info_9" name="info_9" placeholder="" value="<?php echo $data_pgw->info_9 ?>">
                  </div>
                </div>
              </div>
              <p class="text-muted">SAYA DENGAN INI MENYATAKAN BAHWA SELURUH INFORMASI YANG TERDAPAT DALAM FORMULIR INI BENAR DAN SAYA MEMBERIKAN WEWENANG PENUH KEPADA GEMA INSANI UNTUK MENELITI KEBENARAN INfORMASI YANG ADA DI DALAMNYA.</p>
              <br>
              <p class="text-muted">JIKA TERNYATA KEMUDIAN ADA KETIDAKBENARAN DALAM INFORMASI TERSEBUT, SAYA SETUJU BAHWA GEMA INSANI BERHAK UNTUK MENGHENTIKAN PROSES REKRUTMENT ATAU MEMUTUSKAN HUBUNGAN KERJA TANPA KEWAJIBAN MEMBAYAR APAPUN KEPADA SAYA</p>
              <br>
            </div>
            <div class="container text-center">
              <input class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" type="submit" value="SIMPAN">
            </div>
          </section>
        <?php echo form_close(); ?>
        </table>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">© Gema Insani 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo base_url(); ?>./assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?php echo base_url(); ?>./assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>./js/scripts.js"></script>


        
        <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <script>
          $( function() {
            $( "#tgl_lahir_lmr , #tgl_lahir_anggota_1 , #tgl_lahir_anggota_2 ,  #tgl_lahir_anggota_3 ,  #tgl_lahir_anggota_4 ,  #tgl_lahir_anggota_5 , #in_pend_1 , #out_pend_1 , #in_pend_2 , #out_pend_2 , #in_pend_3 , #out_pend_3 , #in_pend_4 , #out_pend_4 , #in_pend_5 , #out_pend_5 , #in_pend_6 , #out_pend_6 , #in_kursus_1 , #out_kursus_1 , #in_kursus_2 , #out_kursus_2 , #in_kursus_3 , #out_kursus_3 , #tgl_riw_join , #tgl_join" ).datepicker({
              changeMonth: true,
              changeYear: true,
              showAnim: "drop",
              yearRange: '1900:+0',
            });
          });

          var uploadField = document.getElementById("img_lmr");
          uploadField.onchange = function() {
              if(this.files[0].size > 3145728){
                alert("File maksimum adalah 2MB!");
                this.value = "";
              };
          };
        </script>


    </body>
</html>
