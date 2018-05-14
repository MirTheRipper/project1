<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function in()
	{
	    $this->load->view('form');
	}
	
	public function test()
	{
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('content');
	    $this->load->view('foot');
	}
	
	public function test2()
	{
	    $this->load->view('head2');
	    $this->load->view('menuleft');
	    $this->load->view('content2');
	    $this->load->view('foot');    
	}


    public function pimary_base()
    {
        $this->load->model('m_model');
        $res= $this->m_model->get_last_ten_entries();
        $data['m_model_res']=$res;
        
        $this->load->view('head2');
        $this->load->view('list',$data);
        $this->load->view('foot');             
    }
    public function chart()
    {
        $this->load->view('head2');
        $this->load->view('menuleft');
        $this->load->view('chart');
        $this->load->view('foot');   
    }
}
