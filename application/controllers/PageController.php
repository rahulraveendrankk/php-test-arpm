<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct(); 
		date_default_timezone_set('Europe/London');
	}
	public function index() 
	{  
		$datas   =   array("error" => '','page'=>'home');
		$this->load->view('view',$datas); 
	}
	public function folder1() 
	{  
		$datas   =   array("error" => '','page'=>'folder1');
		$this->load->view('view',$datas); 
	}
	public function folder2() 
	{ 
		$datas   =   array("error" => '','page'=>'folder2');
		$this->load->view('view',$datas); 
	}
	 
}