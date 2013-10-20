<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process_store extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('storemodel','',TRUE);
	}
	
	public function index()
	{	
		$product_code = $this->input->post('product_code');
		$brand = $this->input->post('brand');
		$quantity = $this->input->post('quantity');
		$type = $this->input->post('type');
		$building = $this->input->post('building');
		
		$result1 = $this->storemodel->add_store($product_code,$brand,$quantity,$type,$building);
		
		$this->load->view('web/store_form_add_success');
		//redirect('template/store','refresh');
	}
	
	public function del($id){
		$id = base64_decode($id);
		$this->db->where('id',$id);
		$this->db->delete('store'); //should delete in model not controller

		redirect('template/store','refresh');
	}
	
	public function showwithdraw($id){
		$id = base64_decode($id);
		$data['resultWithdraw'] = $this->storemodel->returnRecordWithdraw($id);
		$data['content_view'] = 'web/withdraw';
		$this->load->view('home_view',$data);
	}
	
	public function saveWithdrawController(){
		$quantity = $this->input->post('quantity');
		$costcenter = $this->input->post('costcenter');
		$department = $this->input->post('department');
		$manager = $this->input->post('manager');
		$owner = $this->input->post('owner');
		$en = $this->input->post('en');
		$ext = $this->input->post('ext');
		$building = $this->input->post('building');

		$product_code = $this->input->post('product_code');
		$type = $this->input->post('type');
		$brand = $this->input->post('brand');
		$description = $type." ".$brand." ".$product_code;

		$quantity_old = $this->input->post('quantity_old');
		$quantity_update = ($quantity_old - $quantity);
		$date = Date("H:i, jS F, Y.");
		$id_form = $this->input->post('id');
		$result = $this->storemodel->saveWithdrawModel($en,$department,$owner,$costcenter,$ext,$manager,$quantity,$building,$description,$quantity_update,$id_form);
		
		redirect('template/store','refresh');
	}
	public function delProcess($id){
		$id = base64_decode($id);
		$this->db->where('ID',$id);
		$this->db->delete('withdraw'); //should delete in model not controller

		redirect('template/process','refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */