<?php 

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->viewFolder= "product_v";
	}

	public function index() {

		$viewData = new stdClass();

		$viewData->viewFolder = $this->viewFolder = "product_v";
		$viewData->subViewFolder = "list";

		$this->load->view($this->viewFolder."/".$viewData->subViewFolder."/index",$viewData);
	}

}


?>