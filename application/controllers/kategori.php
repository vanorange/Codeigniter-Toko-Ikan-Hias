<?php 
class Kategori extends CI_Controller{

	public function ikan()
	{
		$data['ikan'] = $this->model_kategori->data_ikan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ikan', $data);
		$this->load->view('templates/footer');
	}

	public function peripheral()
	{
		$data['peripheral'] = $this->model_kategori->data_peripheral()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peripheral', $data);
		$this->load->view('templates/footer');
	}

		public function aquarium()
	{
		$data['aquarium'] = $this->model_kategori->data_aquarium()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('aquarium', $data);
		$this->load->view('templates/footer');
	}

	
}


?>