<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('postal');
    }

    public function index()
    {
      if($this->ion_auth->logged_in())
      {
          $this->data['page_title'] = 'User Page';
          // echo "string"; exit;
          $this->render('user_page', 'admin_master');
      }else {
        redirect(site_url('user/login'));
      }
    }

    public function login()
    {
        // var_dump($_SESSION); exit;
        if($this->ion_auth->logged_in())
        {
            redirect(site_url('user'));
        }
        $this->data['page_title'] = 'Login Page';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('remember','Remember me','integer');
        if($this->form_validation->run()===TRUE)
        {
            // echo "string2";exit;
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
            {
                // $this->logging($this->input->post('identity'), 'login', 'successful');
                // var_dump( $_SESSION);exit;
                if(isset($_SESSION['redirect_to'])) redirect($_SESSION['redirect_to']);
                else redirect(site_url('/'));
            }
            else
            {
                // $this->logging($this->input->post('identity'), 'login', 'unsuccessful');
                // echo "string2";exit;
                $this->session->set_flashdata('redirect_to',$this->input->post('redirect_to'));
                $this->postal->add($this->ion_auth->errors(),'error');
                redirect('/');
            }
        }
        else {
            $this->load->helper('form');
            $this->render('login_view', 'admin_master');
        }
    }
    //
    public function profile()
    {
        // var_dump($this->ion_auth->user()->row()->username); exit;
        $this->data['page_title'] = $this->lang->line('profile_page');
        $user = $this->ion_auth->user()->row();
        $this->data['user'] = $user;
        $this->data['current_user_menu'] = '';
        // if($this->ion_auth->in_group('admin'))
        // {
        //     $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
        // }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim');
        $this->form_validation->set_rules('last_name','Last name','trim');
        $this->form_validation->set_rules('company','Company','trim');
        $this->form_validation->set_rules('phone','Phone','trim');

        if($this->form_validation->run()===FALSE)
        {
            $this->render('profile_view','admin_master');
        }
        else
        {
            $new_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'company'    => $this->input->post('company'),
                'phone'      => $this->input->post('phone')
            );
            if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');
            $this->ion_auth->update($user->id, $new_data);
            $this->postal->add($this->ion_auth->messages(),'success');
            redirect(site_url('user'));

        }
    }
    //
    public function logout()
    {
        // $this->logging($_SESSION['identity'], 'logout', 'successful');
        $this->ion_auth->logout();
        if($this->ion_auth->logged_in())
        {
            $this->ion_auth->logout();
        }

        // $this->postal->add($this->ion_auth->messages(),'error');

        redirect(site_url('user/login'));
    }



    public function test()
    {
      if($this->ion_auth->logged_in())
      {
          $this->data['page_title'] = 'Camera AR';
          // echo "string"; exit;
          $this->load->view('test');
      }else {
        redirect(site_url('user/login'));
      }
    }


}
