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
      <h4>Kelola User</h4>
      <a href="<?php echo base_url(); ?>">Home | </a>
      <a href="<?php echo base_url('Page/welcome') ?>">Home Admin | </a>
      <a href="<?php echo base_url('Auth/logout') ?>">Logout</a>
      <br>
      <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <hr>
        <div class="table-responsive">
          <table id="table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Role</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($data_user as $row){
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->username ?></td>
                  <td><?php echo $row->role ?></td>
                  <!-- <td><?php echo $row->status ?></td> -->
                  <?php
                    if($row->role == 'admin'){
                  ?>
                    <td>
                      <a href="<?php echo base_url('Auth/formEdit/').$row->user_id ?>">Edit</a>
                      <a href="<?php echo base_url('Auth/AksiDelete/').$row->user_id ?>">Delete</a>
                    </td>
                  <?php
                    }else{
                  ?>
                    <td>
                      <a href="#" class="btn disabled" >Edit</a>
                      <a href="#" class="btn disabled">Delete</a>
                    </td>
                  <?php } ?>
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