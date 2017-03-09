<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function contact(){
		$this -> load -> view('contact');
	}
	public function message(){
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$content = $this -> input -> post('content');
		if($username == ''|| $email == '' || $content == ''){
			//$this -> contact();//调用方法//$this -> load -> view('contact');只要load->view页面就刷新
			echo 'fail';
		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save($username,$email,$content);
			echo "success";
		}
	}
	public function check_name(){
		$uname = $this -> input -> get('uname');
		$this -> load -> model('message_model');
		$row = $this ->message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}
	public function get_blogs(){
		$this -> losd ->model('blog_model');
		$blogs = $this -> blog_model -> get_by_page();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */