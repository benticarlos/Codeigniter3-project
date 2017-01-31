<?php	
defined('BASEPATH') OR exit('No direct script access allowed'); 

$this->load->view('templates/frontend/head');
$this->load->view('templates/frontend/header');
$this->load->view('frontend/'.$content);
$this->load->view('templates/frontend/footer');

?>
