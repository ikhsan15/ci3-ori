<html>
	<head>
		<title>Form Pendaftaran - Gema Insani</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="<?php echo base_url('assets/form_login/img/logo.png')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/menu.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/main.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/bgimg.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/bgimg-parallax.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/font.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/form_login/css/font-awesome.min.css')?>"/>
		<script type="text/javascript" src="<?php echo base_url('assets/form_login/js/jquery-1.12.4.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/form_login/js/parallax.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/form_login/js/main.js')?>"></script>
	</head>
<body>
	<div class="background" id="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
    <br><br><br><br><br>
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="<?php echo base_url('assets/form_login/img/logo.png')?>"/>
				</div>
        <h3>Daftarkan akun Anda</h3>
      </div>
			<form method="post" name="myForm" action="<?php echo base_url('index.php/Auth/regis') ?>" class="login-form">
				<div class="input-container">
					<i class="fa fa-user"></i>
					<input type="text" class="input" name="username" id="username"  placeholder="Username" required/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="password" placeholder="Password" required/>
					<i id="show-password" class="fa fa-eye"></i>
        </div>
        <input type="submit" name="daftar" value="Daftar" class="button" onclick="checkName();">
        <a href="<?php echo base_url('Auth/login'); ?>" class="register">Login</a>
			</form>
		</div>
		<div class="attibution">
      &copy; 2021 - Information Technology - CV. Gema Insani Press
		</div>
  </div>
  
	<script type="text/javascript">
    $('#background').mouseParallax({ moveFactor: 5 });
    function checkName() {
      var x = document.myForm;
      var input = x.username.value;
      var errMsgHolder = document.getElementById('nameErrMsg');

      if(input.length < 3){
        alert("minimal 3 karakter.");
        return false;
      }else if(!(/^\S{3,}$/.test(input))){
        alert("Tidak boleh ada spasi.");
        return false;
      }else{
        // alert("Berhasil !");
        return undefined;
      }
    }
  </script>

</body>
</html>