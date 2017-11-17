<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tester extends CI_Controller{

	function index(){
		$data['pagename']="HTML CSS TESTER!";
		$data['title']="HTML CSS Tester!";
		$this->load->view('tester',$data);
	}

}
