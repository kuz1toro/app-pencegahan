<!DOCTYPE html> 
<html lang="en-US">
<head>
	<title><?php echo ucfirst($this->uri->segment(2));?></title>
	<meta charset="utf-8">
	<link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  
	<!-- datepicker -->
	<link href="<?php echo base_url(); ?>assets/css/admin/datepicker.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand"> <font color="red"> Sistem Informasi Bidang Pencegahan </font> </a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/products">Products</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/manufacturers">Manufacturers</a>
	        </li>
			<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><font color=<?php if($this->uri->segment(2) == 'gedung'){echo '"white"';}?>>Data Gedung </font><b class="caret"></b></a>
			  <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>prainspeksi/gedung">Lihat/ Edit</a>
				  <a  href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>/add">Tambah</a>
	            </li>
			  </ul>
	        </li>
			<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><font color=<?php if($this->uri->segment(2) == 'permohonan'){echo '"white"';}?>>Data Permohonan </font><b class="caret"></b></a>
			  <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>prainspeksi/permohonan">Lihat/ Edit Permohonan</a>
				  <a  href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>/Add_lhp_step1">+ Permohonan LHP</a>
				  <a  href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>/add">+ Permohonan Rekomtek Instalasi Sistem</a>
				  <a  href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>/add">+ Permohonan Rekomtek SLF</a>
				  <a  href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>/add">+ Permohonan Rekomtek SKK</a>
	            </li>
			  </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pra Inspeksi <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>	
