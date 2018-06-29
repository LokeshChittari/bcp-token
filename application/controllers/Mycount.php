<?php
class Mycount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
        // you might want to just autoload these two helpers
		$this->load->helper('language');
        if ($this->session->userdata('lang'))
            $lang = $this->session->userdata('lang');
        else
            $lang = 'english';
        $this->lang->load('about',$lang);
    }
    
    function index()
    {
        $url = "http://localhost:3003/api/createEtherAccount";
      $ch = curl_init($url);
      curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
      curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
      //curl_setopt($ch,CURLOPT_POST,1);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      $output = curl_exec($ch);
      curl_close($ch); 
      print_r($output); 
    }
}