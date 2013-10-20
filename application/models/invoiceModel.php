<?php
	class InvoiceModel extends CI_Model{
		function addInvoice($invoice_po,$invoice_vendor,$invoice_receiveBy,
				$invoice_receiveByName,$invoice_recieveDate,$invoice_detail,$invoice_comment,$file_name,$file_path,$file_size,
				$file_type)
		{
			$data = array(
				'po_number' => "$invoice_po",
				'vendor' => "$invoice_vendor",
				'receiveBy' => "$invoice_receiveBy",
				'receiveByName' => "$invoice_receiveByName",
				'recieveDate' => "$invoice_recieveDate",
				'detail' => "$invoice_detail",
				'comment' => "$invoice_comment",
				'fileName' => "$file_name",
				'filePath' => "$file_path",
				'fileSize' => "$file_size",
				'fileType' => "$file_type"
			);
			$this->db->insert('invoice',$data);
		}

		function showInvoice(){
			$this->db-> select('*');
			$this->db->from('invoice');
			$query = $this -> db -> get();
			return $query->result();
		}
		
		function fileName($po_number){
			$this->db->select('fileName');
			$this->db->from('invoice');
			$this->db->where('po_number',$po_number);
			$query = $this -> db -> get();
			return $query->result();
		}
	}
?>
