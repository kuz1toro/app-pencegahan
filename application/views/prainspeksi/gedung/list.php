    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("prainspeksi/gedung"); ?>">
            Pra Inspeksi
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_manufacturers = array();    
            foreach ($manufacturers as $array) {
              foreach ($array as $key => $value) {
                $options_manufacturers[$key] = $key;
              }
              break;
            }
			
            echo form_open('prainspeksi/gedung', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);
			  
			  $search_in_list = array('NamaGedung' => 'Nama Gedung', 'Alamat' => 'Alamat', 'NoImb' => 'No IMB', 'TglImb' => 'Tgl IMB');
			  echo form_label('In:', 'search_in');
              echo form_dropdown('search_in', $search_in_list, $search_in_field, 'class="span2"');

			  $options_manufacturers1 = array('id' => 'No', 'NamaGedung' => 'Nama Gedung');
              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_manufacturers1, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Nama Gedung</th>
				<th class="yellow header headerSortDown">Alamat</th>
				<th class="yellow header headerSortDown">Kelurahan</th>
				<th class="yellow header headerSortDown">Kecamatan</th>
				<th class="yellow header headerSortDown">Wilayah</th>
				<th class="yellow header headerSortDown">Status</th>
				<th class="yellow header headerSortDown">Fungsi</th>
				<th class="yellow header headerSortDown">Class</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($manufacturers as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['NamaGedung'].'</td>';
				echo '<td>'.$row['Alamat'].'</td>';
				echo '<td>'.$row['Kelurahan'].'</td>';
				echo '<td>'.$row['Kecamatan'].'</td>';
				echo '<td>'.$row['Wilayah'].'</td>';
				echo '<td>'.$row['Status'].'</td>';
				echo '<td>'.$row['Fungsi'].'</td>';
				echo '<td>'.$row['Class'].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("prainspeksi").'/gedung/update/'.$row['id'].'" class="btn btn-info">view & edit</a>  
                  <a href="'.site_url("prainspeksi").'/gedung/delete/'.$row['id'].'" onclick="return confirm(\'Yakin HAPUS data ini?\');" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>