<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//use models\Entities\Posts;
class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * CREATE TABLE `ci`.`user` (
	 *  `uid` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	 *	`username` VARCHAR( 255 ) NOT NULL ,
	 *	`email` VARCHAR( 255 ) NOT NULL ,
	 *	`dob` DATE NOT NULL ,
	 *	`first_name` VARCHAR( 255 ) NOT NULL ,
	 *	`last_name` VARCHAR( 255 ) NOT NULL ,
	 *	`gender` SMALLINT( 2 ) NOT NULL
	 *	) ENGINE = InnoDB;
	 * 
	 */

    function __construct() {
        // Call the CI_Controller constructor
        parent::__construct();
        $this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->session = $this->CI->session;
		$this->CI->load->database("default", FALSE, TRUE);
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->CI->load->model('UserData');
		$this->CI->load->helper('url');
		$carabiner_config = array(
	    						'script_dir' => 'assets/scripts/', 
			    				'style_dir'  => 'assets/styles/',
							    'cache_dir'  => 'assets/cache/',
							    'base_uri'   => $this->CI->config->base_url(),
							    'combine'    => TRUE,
							    'dev'        => FALSE,
						    	'force_curl' => TRUE
							);
        
$this->carabiner->config($carabiner_config);
    }
	public function index() {
		//redirect('/welcome/index', 'location');
	}

	public function username_check($name) {
		if (count($this->UserData->findUserByName($name))) {
			$this->db->from('user')->where();
			$this->form_validation->set_message('username_check', '%s already exists');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	public function add() {
		$this->carabiner->css('xyz.css');
		$this->carabiner->css('abc.css');
		$data['assets'] = $this->carabiner->display_string('css');	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]|xss_clean|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->library('parser');
			$this->parser->parse('user/index', $data);
			//$this->load->view('user/index');
		}
		else {
			$data = array(
       					'username' => $this->input->post('username'),
       					'password' => md5($this->input->post('password')),
       					'email' => $this->input->post('email'),
       					'dob' => $this->input->post('dob'),
       					'first_name' => $this->input->post('first_name'),
       					'last_name' => $this->input->post('last_name'),
       					'gender' => $this->input->post('gender'),
    				);
			$this->db->set($data);
			$this->db->insert('user'); 
		}
		
	}

	public function userList() {
		echo "string";
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */