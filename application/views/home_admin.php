<!DOCTYPE html>
<html>
  <head>
    <title>Form Pendaftaran - Gema Insani</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <div class="container">
      <br>
      <h1>Selamat datang <?php echo $this->session->userdata('username'); ?></h1>
      <h4>Anda berhasil login ke dalam aplikasi. Halaman ini hanya bisa diakses setelah login.</h4>
      <!-- <a href="<php echo base_url('index.php/page/thanks') ?>">Thanks Page</a> | -->
      <a href="<?php echo base_url(); ?>">Home | </a>
      <?php
        if($this->session->userdata('role') == 'admin'){
      ?>
        <a href="<?php echo base_url('Auth/kel_user') ?>">Kelola User | </a>
      <?php } ?>
      <a href="<?php echo base_url('Auth/logout') ?>">Logout</a>
      <br>
      <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <!-- <a href="<?php echo base_url() ?>lamaran/insert/" class="btn btn-md btn-success">Tambah Lamar</a> -->
        <hr>
        <div class="table-responsive">
          <table id="table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Pelamar</th>
                <th>Gender</th>
                <th>Jabatan Lamar</th>
                <th>Tanggal Lamar</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($data_pgw as $row){
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->nama_lmr ?></td>
                  <td><?php echo $row->jk_lmr ?></td>
                  <td><?php echo $row->tgl_submit ?></td>
                  <td><?php echo $row->jab_lmr ?></td>
                  <td><?php echo $row->alamat_lmr ?></td>
                  <td>
                    <a href="<?php echo base_url('Welcome/formEdit/').$row->id_lmr ?>" class="btn disabled">Edit</a>
                    <a href="<?php echo base_url('Welcome/AksiDelete/').$row->id_lmr ?>">Delete</a>
                    <a href="<?php echo base_url('Welcome/export_tcpdf/').$row->id_lmr ?>" target="blank">Export PDF</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script>
        $('#table').DataTable( {
          autoFill: true
        } );
      </script>
    </div>
  </body>
</html>