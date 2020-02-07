<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Toronto');
        $this->data = array();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Home_model','homeManager');

    }

    public function index()
    {   
        $this->data['markers'] = $this->homeManager->get_locations();
        $this->data['markerHtml'] = '';

        $this->load->view('home/home', $this->data);
    }
    public function articles($lang,$article)
    {
        $this->load->view('articles/'.$lang.'/'.$article.'');
    }
    public function contact()
    {
        if($this->input->post()){
            $this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');

            if($this->form_validation->run()){
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $subject = $this->input->post('subject');
                $message = $this->input->post('name');

                $fromname = $name;
                $from = $email;
                $to = 'weroc@me.com';

                $this->load->library('email');
                $this->email->from($from,$fromname);
                $this->email->to($to);
                $this->email->reply_to($from);
                $this->email->subject($subject);
                $this->email->message($message);
                $this->email->send();
            }
        }

//        $this->data['markers'] = $this->homeManager->get_locations();
//        $this->data['markerHtml'] = '';
//        $this->data['avoidCluster'] = false;
        $this->load->view('home/home', $this->data);
    }    
    public function recaptcha($str='')
    {
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret='6Ldfmm0UAAAAACo_dF9xgVThhgl8EY8MHfikYvIP';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res= json_decode($res, true);
        //reCaptcha success check
        if($res['success'])
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
