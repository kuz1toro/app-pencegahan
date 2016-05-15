<?php
class Permohonan_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_gedung_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('tabel_permohonan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    

    /**
    * Fetch manufacturers data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_permohonan($search_string=null, $search_in='NamaPengelola', $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    //echo 'get gedung';
		$this->db->select('*');
		$this->db->from('tabel_permohonan');

		if($search_string){
			$this->db->like($search_in, $search_string);
		}
		$this->db->group_by('id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
		}

        if($limit_start && $limit_end){
          $this->db->limit($limit_start, $limit_end);	
        }

        if($limit_start != null){
          $this->db->limit($limit_start, $limit_end);    
        }
        
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_permohonan($search_string=null, $search_in='NamaPengelola', $order=null)
    {
		
		$this->db->select('*');
		$this->db->from('tabel_permohonan');
		if($search_string){
			$this->db->like($search_in, $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean (need work)
    */
    function store_gedung($data)
    {
		$insert = $this->db->insert('tabel_permohonan', $data);
	    return $insert;
	}

    /**
    * Update manufacture
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function update_gedung($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('tabel_permohonan', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete manufacturer
    * @param int $id - manufacture id
    * @return boolean
    */
	function delete_gedung($id){
		$this->db->where('id', $id);
		$this->db->delete('tabel_permohonan'); 
	}
 
}
?>	
