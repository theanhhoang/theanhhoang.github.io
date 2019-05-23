<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $website;
    protected $data = array();
    protected $langs = array();
    protected $default_lang;
    protected $current_lang;

    function __construct()
    {
      parent::__construct();
      $this->load->helper('cookie');
      //$_SESSION['set_language'] = 'english';
      $lang = $this->input->get('lang', TRUE);
      if( isset($lang) ){
           // $_SESSION['language'] = $lang;
          // echo $lang; exit;
          $this->input->set_cookie(array(
                 'name'   => 'lang',
                 'value'  => $lang,
                 'expire' => 86400,
                 'secure' => FALSE
                ));
          redirect(current_url());
      }

      $this->default_lang = $this->config->item('language');
      $current_cookie = $this->input->cookie('lang');
      if(!isset(  $current_cookie ))
      {
          $this->input->set_cookie(array(
                 'name'   => 'lang',
                 'value'  => $this->default_lang,
                 'expire' => 86500,
                 'secure' => FALSE
                ));
      }

      else
      {
          $this->default_lang = $this->input->cookie('lang');
      }

      $this->config->set_item('language', $this->default_lang);



      $this->data['before_head'] = '';
      $this->data['before_body'] = '';


    }

    protected function render($the_view = NULL, $template = 'admin_master')
    {


        if($template == 'json' || $this->input->is_ajax_request())
        {
                header('Content-Type: application/json');
                echo json_encode($this->data);

        }
        elseif(is_null($template))
        {
                $this->load->view($the_view,$this->data);

        }
        else
        {
                $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
                $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }

    protected function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }


    protected function logging($username, $activity, $value){
      $this->load->model('logging_model');
      $time = time();
      $ip_address = $this->getUserIP();
      $sessionID = $_SESSION['__ci_last_regenerate'];
      $data = array('username' => $username,
                    'time'=> $time,
                    'sessionID'=> $sessionID,
                    'ip_address'=> $ip_address,
                    'activity' => $activity,
                    'value' => $value);
      $this->logging_model->insert_logging($data);
    }
}

class Admin_Controller extends MY_Controller
{

	function __construct()
	{
            parent::__construct();
            $this->load->library('ion_auth');
            $this->load->library('postal');
            $this->load->helper('url');
            if (!$this->ion_auth->logged_in())
            {
                $_SESSION['redirect_to'] = current_url();
            		//redirect them to the login page
            		redirect(site_url('user/login'), 'refresh');
            }

            $current_user = $this->ion_auth->user()->row();
            $this->user_id = $current_user->id;
            $this->data['current_user'] = $current_user;
            $this->data['current_user_menu'] = '';
            if($this->ion_auth->in_group('admin'))
            {
                $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
            }

		//$this->data['page_title'] = $this->website->page_title;
        //$this->data['page_description'] = $this->website->page_title;
	}
	protected function render($the_view = NULL, $template = 'admin_master')
	{
		parent::render($the_view, $template);
	}


  protected function logging($username, $activity, $value){
    parent::logging($username, $activity, $value);
  }
}

class Public_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();



    }

    protected function render($the_view = NULL, $template = 'public_master')
    {

        parent::render($the_view, $template);
    }


    protected function logging($username, $activity, $value){
      parent::logging($username, $activity, $value);
    }
}
