<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>Login Sistem Informasi Bidang Pencegahan</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- CSS -->
	<link href="<?php echo base_url(); ?>assets/css/admin/global1.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/css/supersized.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/css/style.css" rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <div class="page-container">
      <?php 
      $attributes = array('class' => 'form-signin');
      echo form_open('admin/login/validate_credentials', $attributes);
      echo '<h1>Login</h1>';
	  echo '<h2>Sistem Informasi Bidang Pencegahan</h2>';
      echo form_input('user_name', '', 'placeholder="Username"');
      echo form_password('password', '', 'placeholder="Password"');
      echo "<br />";
      echo anchor('admin/signup', 'Signup!');
      echo "<br />";
      echo '<button type="submit">Sign me in</button>';
      echo form_close();
	  ?>
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <br />
	  <div class="copyright span4">
		<p>&copy; 2016 Bidang Pencegahan Kebakaran Dinas Penanggulangan Kebakaran dan Penyelamatan</p>
		<p>Powered by <a href="https://www.php.net">PHP</a> <a href="https://www.mysql.com">MySQL</a> <a href="https://www.codeigniter.com">CodeIgniter</a></p>
      </div>      
    </div><!--container-->
  
    
    <!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/login/js/jquery-1.8.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/js/supersized.3.2.7.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/js/supersized-init.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	
    
  </body>
</html>    
    