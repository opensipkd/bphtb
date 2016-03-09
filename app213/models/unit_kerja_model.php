<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit_kerja_model extends CI_Model {
	private $tbl = 'units';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_paged_list($limit = 10, $offset = 0){
	}

	function get_all()
	{
		$sql = "select u.id, ur.kode||'.'||u.kode kode, ur.nama urusannm, u.nama, u.singkat, u.kategori
				from units u inner join urusans ur on u.urusan_id=ur.id 
				order by ur.kode,u.kode";
				
		$query = $this->db->query($sql);
		if($query->num_rows()!==0)
		{
			return $query->result();
		}
		else
			return FALSE;
	}
	
	function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->tbl);
		if($query->num_rows()!==0)
		{
			return $query->row();
		}
		else
			return FALSE;
	}
	
	//-- admin
	function save($data) {
		$this->db->insert($this->tbl,$data);
		return $this->db->insert_id();
	}
	
	function update($id, $data) {
		$this->db->where('id', $id);
		$this->db->update($this->tbl,$data);
	}
	
	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->tbl);
	}
}

/* End of file _model.php */