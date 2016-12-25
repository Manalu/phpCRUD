<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_controller extends CI_Controller {

	
	public function index()
	{       
                $data['title'] = 'any title';
                $css[] = base_url('assets/bootstrap/css/bootstrap.min.css');
                $css[] = base_url('my_assets/css/app.css');
                $js[] = base_url('assets/bootstrap/js/bootstrap.min.js');
                $data['css'] = $css;
                $data['js'] = $js;
                $this->load->library('php_crud');
                
                $this->php_crud->select_column = array('id','unique_id','content');
                
                $data['result'] = $this->php_crud->select_table('user_data');
                
                
                $this->load->view('static/header', $data);
		$this->load->view('crud_view', $data);
                $this->load->view('static/footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */