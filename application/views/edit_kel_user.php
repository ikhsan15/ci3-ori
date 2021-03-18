<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data User</title>
</head>
<body>

<h3>Edit Data User</h3>
  <table>
    <form action="<?php echo base_url('Auth/AksiEdit') ?>" method="post">
      <tr>
        <td>user_id</td>
        <td>:</td>
        <td>
          <input type="text" value="<?php echo $data_user->user_id ?>" disabled> 
          <input type="hidden" name="user_id" value="<?php echo $data_user->user_id ?>">
        </td>
      </tr>
      <tr>
        <td>username</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_user->username ?>" name="username"></td>
      </tr>
      <tr>
        <td>password</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_user->password ?>" name="password"></td>
      </tr>
      <tr>
        <td>role</td>
        <td>:</td>
        <td>
          <!-- <input type="text" value="<?php echo $data_user->role ?>" name="role"> -->
          <select id="role" value="<?php echo $data_user->role ?>" name="role">
            <option value="admin" <?php if($data_user->role=="admin"){echo "selected";} ?>  >Admin</option>
            <option value="standar" <?php if($data_user->role=="standar"){echo "selected";} ?>  >Standar</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>status</td>
        <td>:</td>
        <td>
          <!-- <input type="text" value="<php echo $data_user->status ?>" name="status"> -->
          <select id="status" value="<?php echo $data_user->status ?>" name="status">
            <option value="aktif" <?php if($data_user->status=="aktif"){echo "selected";} ?>  >Aktif</option>
            <option value="tidak aktif" <?php if($data_user->status=="tidak aktif"){echo "selected";} ?>  >Tidak Aktif</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="SIMPAN"></td>
      </tr>
    </form>
  </table>
</body>
</html>

<script type="text/javascript">
  $( function() {
    $( "#status" ).selectmenu();
  });
</script>
