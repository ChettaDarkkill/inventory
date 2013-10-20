<?php
	class Storemodel extends CI_Model{
		function storee(){
			$this->db-> select('*');
			$this->db->from('store');
			$query = $this -> db -> get();
			return $query->result();
		}
		function showWithdraw(){
			$this->db-> select('*');
			$this->db->from('withdraw');
			$query = $this -> db -> get();
			return $query->result();
		}
		function add_store($product_code,$brand,$quantity,$type,$building){
			$data = array(
				'product_code' => "$product_code",
				'type' => "$type",
				'brand' => "$brand",
				'quantity' => "$quantity",
				'building' => "$building"
			);
			$this->db->insert('store',$data);
		}
		
		function returnRecordWithdraw($id){
			$this->db->select('*');
			$this->db->from('store');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result();
		}
		
		function saveWithdrawModel($en,$department,$owner,$costcenter,$ext,$manager,$quantity,$building,$description,$quantity_update,$id_form){
			//echo "$quantity_update";
			//Save to withdraw table
			$data = array(
				'Description' => "$description",
				'Quantity'=>"$quantity",
				'Cost_Center'=>"$costcenter",
				'Department' => "$department",
				'Manager'=>"$manager",
				'Owner'=>"$owner",
				'En' => "$en",
				'Ext'=>"$ext"	
			);
			//http://stackoverflow.com/questions/6354315/inserting-now-into-database-with-codeigniters-active-record
			$this->db->set('Date','NOW()',FALSE);
			$this->db->insert('withdraw',$data);
			//Update Store Table
			$dataUpdateStore = array(
				'quantity'=>$quantity_update
			);
			$this->db->where('id',$id_form);
			$this->db->update('store',$dataUpdateStore);
		}
	}
?>