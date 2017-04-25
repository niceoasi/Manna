<?php 
class Models extends CI_Model {

	// public $c_id;
	// public $c_name;

	public function __construct()
	{
                // Call the CI_Model constructor
		parent::__construct();
	}

	public function get_company_entries()
	{
		$query = $this->db->get('mannabox.fm_company');
		return $query->result();
	}

	public function get_product_entries()
	{
		$query = $this->db->get('mannabox.fm_product');
		return $query->result();
	}

	public function get_daily_price_entries()
	{
		$query = $this->db->get('mannabox.fm_daily_price');
		return $query->result();
	}

	public function get_mannabox_price_entries()
	{
		$query = $this->db->query('SELECT dp_price FROM mannabox.fm_daily_price WHERE c_id = 1');
		return $query->result();
	}

	public function get_chart_price($p_index, $c_index) 
	{
		$query = $this->db->query("SELECT dp_id, p_id, c_id, dp_price FROM mannabox.fm_daily_price WHERE p_id = ".$p_index." AND c_id = ".$c_index."");
		$data = $query -> result();
		return $data;
	}

	// public function insert_entry()
	// {
 //        $this->c_id    = $_POST['c_id']; // please read the below note
	// 	$this->c_name  = $_POST['c_name'];

 //        // $this->db->insert('entries', $this);
	// }

	// public function update_entry()
	// {
	// 	$this->title    = $_POST['title'];
	// 	$this->content  = $_POST['content'];
	// 	$this->date     = time();

	// 	$this->db->update('entries', $this, array('id' => $_POST['id']));
	// }
}

// SELECT dp_id, p_id, c_id, dp_price FROM mannabox.fm_daily_price WHERE p_id = 1 AND c_id = 1;

?>