<?php
class Accomodation extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
	}
	function index(){

			$this->load->view('customers/v_accomodation');
			//redirect('administrator');
	
	}
	
}