<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

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
		$this->load->view('login_page');
	}
    
    function validate(){
        $this->load->model('login_model');
        
        //validasi form login
        $this->form_validation->set_rules('user','Username','trim|required');
        $this->form_validation->set_rules('pw','Password','trim|required');
        
        if ($this->form_validation->run()) {
            
            //mengambil data dari form login
            $username = $this->input->post("user");
            $password = md5($this->input->post("pw"));
            
            //select data dari database
            if($this->login_model->cek_user($username,$password) == '1') {
            $id_ar = $this->db->query("SELECT * FROM pengguna WHERE username = '$username' AND pass = '$password'")->result_array();
                foreach($id_ar as $ids){
                  $id   = $ids['id'];
                  $nama = $ids['nama']; 
                }
            //deklarasi session
            $config = array(
                'user' => $username,
                'pw' => $password,
                'id' => $id,
                'nama' => $nama
            );
            $this->session->set_userdata($config);
                
                //kondisi page admin atau operator
                if($id == 1){
                    redirect('users');
                }else{
                    redirect('members');   
                }
              
            }else{
                //salah password
                echo "salah password";
            }
        }else{
            redirect();   
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */