    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("prainspeksi").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Sukses mas bro!</strong> udah di update datenye.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>hmm gagal mas bro!</strong> tanya kenapa?.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();

      echo form_open('prainspeksi/gedung/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nama Gedung</label>
            <div class="controls">
              <input type="text" id="" name="NamaGedung" value="<?php echo $manufacture[0]['NamaGedung']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Alamat</label>
            <div class="controls">
              <input type="text" id="" name="Alamat" value="<?php echo $manufacture[0]['Alamat']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Kecamatan</label>
            <div class="controls">
              <input type="text" id="" name="Kecamatan" value="<?php echo $manufacture[0]['Kecamatan']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Kelurahan</label>
            <div class="controls">
              <input type="text" id="" name="Kelurahan" value="<?php echo $manufacture[0]['Kelurahan']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Wilayah</label>
            <div class="controls">
              <input type="text" id="" name="Wilayah" value="<?php echo $manufacture[0]['Wilayah']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">No IMB</label>
            <div class="controls">
              <input type="text" id="" name="NoImb" value="<?php echo $manufacture[0]['NoImb']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Tgl IMB</label>
            <div class="controls">
              <input type="text" id="Datepicker" name="TglImb" value="<?php echo $manufacture[0]['TglImb']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  
          <div class="form-actions">
            <button class="btn btn-primary" type="submit" onclick="return confirm('Yakin RUBAH data ini?');">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     