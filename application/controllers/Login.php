<?php
class Login extends CI_Controller {

    public function index() 
    {
       $this->load->view('login');
    }

    public function ceklogin() 
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $cek = $this->db->where('username', $username)->get('users');

      if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $d) {
                if (password_verify($password, $d->password)) {
                    $session['id']    = $d->id;
                    $session['level'] = $d->level;
                    $this->session->set_userdata($session);

                    if($d->level == 1){
                        redirect('admin');
                    } else{
                        redirect('home');
                    }
                } else{
                    $this->session->set_flashdata('warning', 'Password Anda Salah!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
      } else{
        $this->session->set_flashdata('danger', 'Akun Tidak Terdaftar!');
        redirect($_SERVER['HTTP_REFERER']);
      }
    }

    public function login_google() 
    {
        $this->load->view('login_google');
    }

    public function login()
 {
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId(''); //Define your ClientID

  $google_client->setClientSecret(''); //Define your Client Secret Key

  $google_client->setRedirectUri(''); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');

    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data = array(
      'first_name' => $data['given_name'],
      'last_name'  => $data['family_name'],
      'email_address' => $data['email'],
      'profile_picture'=> $data['picture'],
      'updated_at' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data = array(
      'login_oauth_uid' => $data['id'],
      'first_name'  => $data['given_name'],
      'last_name'   => $data['family_name'],
      'email_address'  => $data['email'],
      'profile_picture' => $data['picture'],
      'created_at'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
   }
  }
  $login_button = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'asset/sign-in-with-google.png" /></a>';
   $data['login_button'] = $login_button;
   $this->load->view('google_login', $data);
  }
  else
  {
   $this->load->view('google_login', $data);
  }
 }
    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}