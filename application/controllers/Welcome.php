<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->model('Models');

        $product['product'] = $this->Models->get_product_entries();
        $product['mannabox_price'] = $this->Models->get_mannabox_price_entries();
        // $daily_price['daily_price'] = $this->Models->get_daily_price_entries();


        // $this->load->view('test', $product);

        $this->load->view('index', $product);
	}
}
?>