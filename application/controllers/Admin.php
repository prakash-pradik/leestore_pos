<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require FCPATH.'vendor/autoload.php';
class Admin extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  
	  date_default_timezone_set('Asia/Kolkata'); 

	  if(!$this->session->userdata('admin_loggedin'))
		{
			redirect(base_url('login'), 'refresh');
		}
	}
	
	public function index()
	{
		redirect(base_url('dashboard'));
	}

	public function dashboard()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['users'] = $this->admin_model->get_data('customers', array('status'=>'1'), 'result_array');
		$data['employees'] = $this->admin_model->get_data('employees', array('status'=>'1'), 'result_array');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('index', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}


	public function fetch_data(){
		$id = $this->input->post('id');
		$tbl_name = $this->input->post('tbl_name');
		$data = $this->admin_model->get_by_id($id, $tbl_name);
		if($data)
			echo json_encode($data);
	}

	public function delete_by_id(){
		
		$id = $this->input->post('id');
		$tbl_name = $this->input->post('tbl_name');

		$where = array('id' => $id );

		if($id){
			$update = $this->admin_model->update_row_data($tbl_name, $where, array('status' => 2 ));
			
			if ($update) 
				$status = 'success';
			else
				$status = 'failed';
		}
		else 
			$status = 'failed';

		echo $status;

	}

	public function update_product(){

		$id = $this->input->post('product_id');
		$data = array(
			'product_name' => $this->input->post('product_name'),
			'brand_name' => $this->input->post('brand_name'),
			'category_id' => $this->input->post('category_name'),
			'imei_number1' => $this->input->post('imei_number1'),
			'imei_number2' => $this->input->post('imei_number2'),
			'serial_number' => $this->input->post('serial_number'),
			'price' => $this->input->post('price'),
			'date_modified' => date("Y-m-d H:i:s")
		);
		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('products', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('products'));
		}
	}

	public function fetch_data_array(){
		$id = $this->input->post('id');
		$tbl_name = $this->input->post('tbl_name');
		$result = $this->admin_model->get_data('products', array('category_id'=>$id, 'status'=>'1'), 'result');
		if($result){
			$data['data'] = $result;
            $data['status'] = 1;
		} else {
			$data['status'] = 2;
		}
		echo json_encode($data);
	}
	
	public function update_stock($supplierId){
		
		$stock_id = $this->input->post('update_stock_id');

		$data = array(
			'no_of_stock' => $this->input->post('update_stock_number'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $stock_id );
		$update = $this->admin_model->update_row_data('godown', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('supplier/'.$supplierId));
		}
	}
}
