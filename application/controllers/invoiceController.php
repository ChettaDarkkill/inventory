<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InvoiceController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('invoiceModel','',TRUE);
		$this->load->helper(array('form', 'url'));
		$this->load->helper("file");
	}
	
	function index()
	{
		$this->load->view('web/invoice_form');
	}

	function show_invoice(){
		$data['result_invoice']=$this->invoiceModel->showInvoice();
		$data['content_view'] = 'web/invoice';
		$this->load->view('home_view',$data);
	}
	
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('web/invoice_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$data_details = $this->upload->data();
			$file_name = $data_details['file_name'];
			$file_type = $data_details['file_type'];
			$file_size = $data_details['file_size'];
			$file_path = $data_details['full_path'];
			//Save to database
			$invoice_po = $this->input->post('invoice_po');
			$invoice_vendor = $this->input->post('invoice_vendor');
			$invoice_receiveBy = $this->input->post('invoice_receiveBy');
			$invoice_receiveByName = $this->input->post('invoice_receiveByName');
			$invoice_recievedate = $this->input->post('invoice_recievedate');
			$invoice_detail = $this->input->post('invoice_detail');
			$invoice_comment = $this->input->post('invoice_comment');

			$result_invoiceAddData = $this->invoiceModel->addInvoice($invoice_po,$invoice_vendor,$invoice_receiveBy,
				$invoice_receiveByName,$invoice_recievedate,$invoice_detail,$invoice_comment,$file_name,$file_path,$file_size,$file_type);
			//end Save
			$this->load->view('web/invoice_form_upload_success', $data);
		}

	}
	function delInvoice($po_number,$fileName)
	{
		$po_number = base64_decode($po_number);
		$fileName = base64_decode($fileName);
		//delete invoice
		$this->db->where('po_number',$po_number);
		$this->db->delete('invoice'); //should delete in model not controller
		$path = "./uploads/".$fileName;
		unlink($path);
		
		redirect('invoiceController/show_invoice','refresh');
	}
}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
