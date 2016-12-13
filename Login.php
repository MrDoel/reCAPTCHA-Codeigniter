<?php defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller {

    const site_verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){
        $this->load->view('index');
    }

    private function _submitHTTPGet($data)
    {
        $url = self::site_verify_url.'?'.http_build_query($data);
        $response = file_get_contents($url);
        return $response;
    }

    public function process(){
        $this->form_validation->set_rules('username','User ID','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $userIp=$this->input->ip_address();
        $secret='SECRET_KEY';
        $getResponse = $this->_submitHttpGet(
            array(
                'secret' => $secret,
                'remoteip' => $userIp,
                'response' => $recaptchaResponse,
            )
        );
        $status = json_decode($getResponse, true);

        if($this->form_validation->run() == FALSE || !isset($status['success']) || $status['success'] <> true){
                 redirect(base_url('login'));
        }else{
        //login success
        }
    }
}
?>
