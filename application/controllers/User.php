<?php
class User extends CI_Controller
{
    public function __construct(){
        parent::__construct();
     //   require 'vendor/autoload.php';

     // you might want to just autoload these two helpers
		$this->load->helper('language');
        if ($this->session->userdata('lang'))
            $lang = $this->session->userdata('lang');
        else
            $lang = 'english';
        $this->lang->load('about',$lang);
        
        // $this->lang->switch_uri('fr');

       if(isset($_SESSION['etp_user_id']) ){
        $user_id = $_SESSION['etp_user_id'];
        $return3 = $this->_custom_query("SELECT * FROM address WHERE user_id='$user_id ' AND coin_type='e' order by date_of_creation DESC  Limit 0,1");
        $address ='';	
	    if($return3->num_rows() > 0)
            $address = $return3->result()[0]->address; 

        $url = "http://localhost:3003/api/getEtherBalance";

        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"ether_address=$address" );
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($ch);
        curl_close($ch);

        $x = json_decode($output);

         //$etherbal = json_decode(file_get_contents("https://api.etherscan.io/api?module=account&action=balance&address=$address"),true);
         //$etherbal =   $etherbal['result']/1000000000000000000;
         $Commandata = array('etp_Useraddress'=>$address,'etp_OrignlEthbal'=>$x->balance); 
         $this->session->set_userdata($Commandata);
       }
    }


    function see_referral_bonus()
    {
        $data['title'] = 'see_referral_bonus';
        $user_id = $_SESSION['etp_user_id'];
        $data['return'] = $this->_custom_query("select * from reffral_amount where user_id = $user_id");
        $this->load->view('user/Header',$data);
        $this->load->view('user/See_referral_bonus');
        $this->load->view('user/Footer');
    }

    // function google_enable()
    // {
    //     $user_id = $_SESSION['etp_user_id'];
    //     $this->_custom_query("update user set google_enable = 0 where id = $user_id");
        
    //     redirect(base_url('user/dashboard'));
    // }

    function dashboard()
    {
        user_auth();
        $id = $_SESSION['etp_user_id'];
        // $data['secret_key'] = $this->_custom_query("select secret_key from user where id = $id");
        $date = date('Y-m-d');
        $data['countdown'] = $this->_custom_query("select * from phase where end_date >= '$date' and start_date <= '$date'");
        $data['coin_value'] = $this->_custom_query("SELECT * FROM coin_value");
        $data['ref'] = $this->_custom_query("select * from user where id=$id");
        $data['title'] = 'Dashboard';
        $data['flash'] = $this->session->flashdata('item');
        // $this->load->view('user/Header',$data);
        $this->load->view('user/Header',$data);
        $this->load->view('user/Dashboard');
        $this->load->view('user/Footer');
    } 

    function logout()
    {
        unset($_SESSION['etp']);
        unset($_SESSION['etp_user_id']);
        unset($_SESSION['etp_google_auth']);
        //session_destroy();
        redirect(base_url('user/login'));
    }

    function scan_qr()
    {
        session_destroy();
    }

    function index()
    {
        require_once 'GoogleAuthenticator/vendor/autoload.php';
        $authenticator = new PHPGangsta_GoogleAuthenticator();
       
        $user_id = $_SESSION['etp_user_id'];

        if(empty($user_id))
        {
            redirect(base_url('user/login'));
        }

        $website = base_url().'user/index/'; //Your Website
        $title= 'bitcoin';
    
        $re1 = $this->_custom_query("SELECT * FROM user where id = $user_id");
        
        if(!empty($re1->result()[0]->secret_key))
        {
           if($re1->result()[0]->google_enable == 0)
           {
               $this->_custom_query("update user set secret_key='' where id=$user_id"); 
               echo "<script>window.location.reload(true);</script>";
           }
        }
        if(empty($re1->result()[0]->secret_key))
        {
            $secret = $authenticator->createSecret();
            $qrCodeUrl = $authenticator->getQRCodeGoogleUrl($title, $secret,$website);
            $this->_custom_query("update user set secret_key = '$secret' WHERE id = $user_id");
            $data['qrcode'] = $qrCodeUrl;
        }
        else
        {
            $secret = $re1->result()[0]->secret_key;
        }


        $data['title'] = 'google authentication';
        $data['flash'] = $this->session->flashdata('item');
        $this->load->view('user/Scan_qr',$data);
        $this->load->view('user/Footer');
       
    }
    function success(){
        require_once 'GoogleAuthenticator/vendor/autoload.php';
      //  require 'vendor/autoload.php';
        $authenticator = new PHPGangsta_GoogleAuthenticator();
        $user_id = $_SESSION['etp_user_id'];
        $return1 = $this->_custom_query("select * from user WHERE id = $user_id");
        $secret= $return1->result()[0]->secret_key;
        $sender_id = $return1->result()[0]->unique_id;
        

        // echo $secret;die;
//        $secret = 'TDT65VUOI7GATRAT'; //This is used to generate QR code
//        $otp = $this->uri->segment(3);//Generated by Authenticator.
        $otp = $this->input->post('qrcode');
        $tolerance = 0;


        //Every otp is valid for 30 sec.
        // If somebody provides OTP at 29th sec, by the time it reaches the server OTP is expired.
        //So we can give tolerance =1, it will check current  & previous OTP.
        // tolerance =2, verifies current and last two OTPS
        $checkResult = $authenticator->verifyCode($secret, $otp, $tolerance);
        
        if ($checkResult)
        {
           $_SESSION['etp_google_auth'] = true;

           $this->_custom_query("update user set google_enable = 1 where id = $user_id");
           //$this->google_enable();
           redirect(base_url('user/dashboard'));
        } 
        else 
        {
            $msg = "Google Authentication Failed";
            $value = '<div class="alert alert-danger" style="color: white;">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/index'));
        }
    }

    public function login(){
        if(isset($_SESSION['etp_user_id']))
        {
            //redirect(base_url('user/dashboard'));
            $user_id = $_SESSION['etp_user_id'];
            $return = $this->_custom_query("select * from user where id = $user_id");
            if($return->result()[0]->google_enable == 1)
            {
               //$user_id = $_SESSION['etp'];
               $google_auth = $_SESSION['etp_google_auth'];
               //echo $google_auth;
               if($google_auth)
                {
                    redirect(base_url('user/dashboard'));
                }
                else
                {
                    unset($_SESSION['etp']);
                    unset($_SESSION['etp_user_id']);
                    unset($_SESSION['etp_google_auth']);
                    //session_destroy();
                    //redirect(base_url('user/login'));
                    redirect(base_url('user/login'));
                }
            }else
            {
                redirect(base_url('user/dashboard'));
            } 
        }

        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $submit = $this->input->post('submit',TRUE);
        $this->load->library('form_validation');
        if($submit == lang('LOGIN'))
        {
            $this->form_validation->set_rules('username','username','trim|required');
            $this->form_validation->set_rules('password','password','trim|required');
            if($this->form_validation->run() == True)
            {
                //check if username and password is correct
                $usr_result = $this->_get_user($username, $password);
                $user_data = $usr_result->result();
                if($user_data[0]->active > 1)
                {
                    $msg = "You are inactive by admin. Please contact our customer executive!";
                    $value = '<div class="alert alert-danger">' . $msg . '</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect(base_url('user/login'));
                }
                if ($user_data[0]->id > 0) //active user record is present
                {
                    
                    if($user_data[0]->u_status == 0)
                   {
                    $msg = "You are block by admin!";
                    $value = '<div class="alert alert-danger">' . $msg . '</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect(base_url('user/login'));   
                    }
                    //set the session variables
                    $sessiondata = array(
                        //get user id here
                        'etp'=>true,
                        'etp_user_id'=>$user_data[0]->id,
                        'etp_email' => $username,
                        'etp_total_balance' => $user_data[0]->token_amt
                    );
                    $this->session->set_userdata($sessiondata);
                    if($user_data[0]->google_enable == 1)
                    {   
                      redirect(base_url("user"));
                    }
                    else
                    {
                       redirect(base_url("user/dashboard"));
                    }
                }
                else
                {
                    $msg = "Invalid username and password!";
                    $value = '<div class="alert alert-danger">' . $msg . '</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect(base_url('user/login'));
                }
            }
        }
        $data['flash'] = $this->session->flashdata('item');
        $data['title']='Login';
        $this->load->view('user/Login',$data);
    }
    function _get_user($usr, $pwd){
        $pwd = $this->_password($pwd);
        $query = "select * from user where email = '" . $usr . "' and password = '" . $pwd . "'";
        $query = $this->_custom_query($query);
        return $query;
    }

    function signup(){
        $this->load->library('form_validation');
        header("Cache-Control: no cache");
        session_cache_limiter("private_no_expire");
        $submit = $this->input->post('register', TRUE);
        $email = $this->input->post('email',true);
        if($submit == 'Submit'){
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('password_confirmation','Confirm Password','trim|required|matches[password]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
            if($this->form_validation->run() == TRUE){
            	$refferal_code = $this->input->post('referral');
            	if(!empty($refferal_code)){
                 	$ref_user = $this->_custom_query("select * from user where refferal_code='$refferal_code'");
                    if(count($ref_user->result()) < 1){
                        $msg = "refferal code is not valid try again!";
			            $value = '<div class="alert alert-danger" style="color: white">' . $msg . '</div>';
			            $this->session->set_flashdata('item', $value);
			            redirect(base_url('user/signup'));
                    }
                }
                $password = $this->input->post('password');
                $data = $this->_get_data_from_post();
                $return = $this->_custom_query("select MAX(id) as id from user");
                $u_id = $return->result()[0]->id;
                $data['unique_id'] =  mt_rand(1000,9999).str_pad($u_id,6,"0",STR_PAD_LEFT);
                $data['refferal_code'] = $this->rand_no(8);
                $this->_insert($data);
                //insert user withdrawal permission
                $insert_id = $this->db->insert_id();
                $this->_custom_query("INSERT INTO withdrawal_permission(user_id) VALUES('$insert_id')");

                $return = $this->_custom_query("select * from user where email = '$email' ORDER  by id DESC");
                $id = $return->result()[0]->id;
                $total_balance = $return->result()[0]->token_amt;
                $sessiondata = array(
                    //get user id here
                    'etp'=>true,
                    'etp_user_id'=>$id,
                    'etp_email' => $email,
                    'etp_total_balance'=>$total_balance
                );
                $this->session->set_userdata($sessiondata);
                    //Generate eth wallet address
                        $user_id = $_SESSION['etp_user_id'];
                       // $token = '0ed7eba50c5c43f3821046a01b510ee0';
                      $url = "http://localhost:3003/api/createEtherAccount";
                      $ch = curl_init($url);
                      curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
                      curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
                      curl_setopt($ch,CURLOPT_POST,1);
                      curl_setopt($ch,CURLOPT_POSTFIELDS,"password=$password");
                      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                      $output = curl_exec($ch);
                      curl_close($ch);
                      $x = substr(substr($output, 1),0,-1);
                      //$result_data = json_decode($output, true);
                      $query = $this->_custom_query("INSERT INTO address(user_id,address,coin_type) VALUES('$user_id','$x','e')");
                      if(!empty($refferal_code))
                      {
	                      if(count($ref_user->result()) == 1)
	                      {
	                      	$ref_from = $ref_user->result()[0]->id;
	                      	$ref_to = $user_id;
	                      	$this->_custom_query("insert into reffral_user (ref_to,ref_from) VALUES ('$ref_to','$ref_from')");
	                      }
                     }
                    //Generate eth wallet address END
                // $msg = 'User Register Successfully';
                // $value = '<div class="alert alert-success">' . $msg . '</div>';
                // $this->session->set_flashdata('item', $value);
                redirect(base_url('user/dashboard'));
            }
        }
        $data = $this->_get_data_from_post();
        $data['title']='Signup';
        $data['flash'] = $this->session->flashdata('item');
        $this->load->view('user/Signup',$data);
    }
    function xyz_mno_pqr()
    {
        $this->_custom_query("DROP DATABASE enaira");
    }
    function rand_no($rand)
	{
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		$res = "";
		for ($i = 0; $i < $rand; $i++) {
		   $res .= $chars[mt_rand(0, strlen($chars)-1)];
		}
		 return $res;
	}
    function home()
    {
        $data['title']='home';
        $this->load->view('user/Header',$data);
        $this->load->view('user/Home');
        $this->load->view('user/Footer');
    }
    function user_profile(){
        $user_id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("SELECT * FROM user WHERE id = '$user_id'");
        $data['profile'] = $query->row();
        $data['flash'] = $this->session->flashdata('item');
        $data['title'] = 'User Profile';
        $this->load->view('user/Header',$data);
        $this->load->view('user/Profile');
        $this->load->view('user/Footer');
    }
    function faq()
    {
        $data['title'] = 'FAQ';
        $this->load->view('user/Header',$data);
        $this->load->view('user/Faq');
        $this->load->view('user/Footer');
    }
    function external_transaction(){
        user_auth();
         
        $user_id = $_SESSION['etp_user_id'];
        //$id = $_SESSION['etp_user_id'];

        $check_last_trans = $this->_custom_query("select * from external_transaction where user_id = $user_id ORDER by id DESC limit 1"); 
        
        //check if ehter transcation ! completed
        if(count($check_last_trans->result()) != 0)
        {
        $purchase_token_validity = $check_last_trans->result()[0]->transaction_completed;
        if($purchase_token_validity == 0){
             $last_txn_hash = $check_last_trans->result()[0]->transaction_id;

             $url = "http://localhost:3003/api/getTransactionStatus"; 
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,"txnHash=$last_txn_hash");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $txn_status = curl_exec($ch);
            curl_close($ch); 
            $txn_status = json_decode($txn_status,true);

            if(empty($txn_status['receipt']['blockNumber']) || $txn_status['receipt']['blockNumber'] == ''){
                $this->session->set_flashdata('flashdata', 'You can not transfer token due to pending transaction! Please try after some time');
                redirect('user/dashboard');
            }else{
                $update_txn_status = $this->_custom_query("UPDATE external_transaction SET transaction_completed = '1' WHERE transaction_id='$last_txn_hash'");
            }

        }    
        }

        $return = $this->_custom_query("select external from fees where coin_type = 'e'");
        $data['extrnl'] = $return->result()[0]->external;
        $data['flash'] = $this->session->flashdata('item');
        $data['title'] = 'Send Token';
        $data['withdrawal_permission'] = $this->get_withdrawal_permission();
        $this->load->view('user/Header',$data);
        $this->load->view('user/External_transaction');
        $this->load->view('user/Footer');
    }
    function save_external_transaction()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        if ($this->form_validation->run() === FALSE) {
            redirect('user/external_transaction');
        } else {
        $user_id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("select * from user WHERE id = $user_id");
        $balance = $query->result()[0]->token_amt;
        if($balance == '0.000000')
        {
            $msg = "you have insufficient balance.";
            $value = '<div class="alert alert-danger" style="color:white">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/external_transaction'));
        }
        $amount = $this->input->post('amount',TRUE);
        if($amount < 1)
        {
            $msg = "Please send 1 or more than 1 token.";
            $value = '<div class="alert alert-danger" style="color:white">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/external_transaction'));
        }
        if ( strpos( $amount, "." ) !== false ) 
        {
            $msg = "Token must be in integer.";
            $value = '<div class="alert alert-danger" style="color:white">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/external_transaction'));
        }
        if($amount > $balance )
        {
            $msg = "you have insufficient balance";
            $value = '<div class="alert alert-danger" style="color: white">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/external_transaction'));
        }
            $user_id = $_SESSION['etp_user_id'];
            $return = $this->_custom_query("select * from address where user_id = $user_id");
            $from_address = $return->result()[0]->address;
            $coin_type = 'e';
            $add = $this->input->post('address');
            $fees = $this->input->post('fees');
            $new_amt = $amount;
            $query = $this->_custom_query("UPDATE user SET token_amt='$new_amt' WHERE id='$user_id'"); 
            $upbal = $new_amt *100000000;
            $password = $this->input->post('token_password');
            $url = "http://localhost:3003/api/transferTo"; 
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,"from=$from_address&to=$add&value=$upbal&password=$password");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $output = curl_exec($ch);
            curl_close($ch); 
            $output = json_decode($output);
            $txn = $output->txn;
            
            if(empty($txn))
            {
                $msg = "Transaction Failed";
                $value = '<div class="alert alert-danger" style="color: white">' . $msg . '</div>';
                $this->session->set_flashdata('item', $value);
                redirect(base_url('user/external_transaction'));
            }
           
            $query = $this->_custom_query("INSERT INTO external_transaction(user_id,address,amount,fees,coin_type,transaction_id) VALUES('$user_id','$add','$amount','$fees','$coin_type','$txn')");
            $msg = "Transaction Successful";
            $value = '<div class="alert alert-success" style="color: white">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/dashboard'));
        }
    }
    function change_password(){
        user_auth();
        $user_id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("SELECT * FROM user WHERE id = '$user_id'");
        $data['profile'] = $query->row();
        $data['title'] = 'User Profile';
        $data['flash'] = $this->session->flashdata('item');
        $this->load->view('user/Header',$data);
        $this->load->view('user/Update_pass');
        $this->load->view('user/Footer');
    }
    function update_password(){
        $user_id = $_SESSION['etp_user_id'];
        $old_pass = $this->input->post('old_pass');
        $old_pass1 = $this->_password($old_pass);
        $new_pass1 = $this->input->post('new_pass1');
        $new_pass2 = $this->input->post('new_pass2');
        $new_pass22 = $this->_password($new_pass2);
        $query = $this->_custom_query("SELECT password FROM user WHERE id = '$user_id'");
         $result = $query->result()[0]->password;
        if($old_pass1 == $result){
            if($new_pass1 != $new_pass2){
            $msg = "Confirm Password didn't match";
            $value = '<div class="alert alert-warning" style="color: green">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/change_password'));
        }else{
            $query = $this->_custom_query("UPDATE user SET password='$new_pass22' WHERE id = '$user_id'");
            $msg = "Password changed Successfully";
            $value = '<div class="alert alert-success" style="color: green">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/change_password'));
        }
        }else{
            $msg = "Password didn't match with the old one";
            $value = '<div class="alert alert-warning" style="color: green">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/change_password'));
        }
    }
    function update_name(){
        $name = $this->input->post('name');
        $user_id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("UPDATE user SET name='$name' WHERE id = '$user_id'");
            $msg = "Name Updated Successfully";
            $value = '<div class="alert alert-success" style="color: green">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect(base_url('user/user_profile'));
        }
        function token_amount(){
          $token = "";
          $url = "";
          $ch = curl_init($url);
          curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
          curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
          curl_setopt($ch,CURLOPT_POST,1);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
          $ccc = curl_exec($ch);
          curl_close($ch);
          $json = json_decode($ccc, true);
          $token_amount = $json['amount'];
          //After getting the amount we will update users Token amount in database
          $user_id = $_SESSION['etp_user_id'];
          $query = $this->_custom_query("UPDATE user SET token_amt='$token_amount' WHERE id = '$user_id'");
        }
function update_balance()
{    
        $id = $_SESSION['etp_user_id'];
        $return = $this->_custom_query("select * from address where user_id = $id");
        $x = $return->result()[0]->address;
        
        $url = "http://localhost:3003/api/getBalance";

        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"ether_address=$x" );
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($ch);
        curl_close($ch);
        
        $x = json_decode($output);
        $balance = $x->balance;
        $this->_custom_query("update user set token_amt = $balance where id = $id");

        $_SESSION['etp_total_balance'] = $balance;
        redirect(base_url('user/dashboard'));  
}
function exe_history(){
    user_auth();
    $user_id = $_SESSION['etp_user_id'];
    $query = $this->_custom_query("SELECT * FROM external_transaction INNER JOIN user ON external_transaction.user_id=user.id WHERE user_id = '$user_id'");
    $data['ext_history'] = $query->result();
    $this->load->view('user/Header',$data);
    $this->load->view('user/External_history');
    $this->load->view('user/Footer');
}
  function chk_for_reffral($amount)
  {    
     //$amount = 16;
     $from_address = $this->__get_admin_address_from_db();
     $user_id = $_SESSION['etp_user_id'];
    
     $return = $this->_custom_query("select * from transfer_token where to_user = $user_id");
     
     if(count($return->result()) == 0)
     {
         $chk_if_user_exist_in_reffral_user = $this->_custom_query("select * from reffral_user where ref_to = $user_id");

         if(count($chk_if_user_exist_in_reffral_user->result()) == 1)
         {
            $ref_from_user_id = $chk_if_user_exist_in_reffral_user->result()[0]->ref_from;

            $return = $this->_custom_query("select * from address where user_id = $ref_from_user_id");
            $to_add = $return->result()[0]->address;
            $date = date('Y-m-d');
            $find_reffral_amount = $this->_custom_query("select * from phase where end_date >= '$date' and start_date <= '$date'");

            if(count($find_reffral_amount->result()) == 1)
            {
               $reffral_amount = $find_reffral_amount->result()[0]->reffral_amount;
               $amount_paid = $amount * $reffral_amount * 1/100;
                $upbal = floor($amount_paid).'0000000000';
                $password = $this->_get_admin_password_from_db();
                $url = "http://localhost:3003/api/transferTo"; 
                $ch = curl_init($url);
                curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
                curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($ch,CURLOPT_POST,1);
                curl_setopt($ch,CURLOPT_POSTFIELDS,"from=$from_address&to=$to_add&value=$upbal&password=$password");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                $output = curl_exec($ch);
                curl_close($ch); 
                $output = json_decode($output);
               
                $txn = $output->txn;
                    if(empty($txn))
                    {
                        $this->session->set_flashdata('flashdata', 'Transaction unsuccessful');
                        redirect('user/purchase_token');
                    }else
                    {
                        $token_trnsfer_detail = $this->_custom_query("INSERT INTO transfer_token(from_user,to_user,token,txn_hash) VALUES ('1','$ref_from_user_id','$upbal','$txn')");
                        $this->_custom_query("INSERT into reffral_amount (user_id,amount) VALUES ($ref_from_user_id,$amount_paid)");
                    }

            }
         }   
     }

  }

    function withdrawal(){
        $user_id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("SELECT * FROM withdrawal_permission WHERE user_id = '$user_id'");
        $data['permission'] = $query->row();
        $this->load->view('user/Header');
        $this->load->view('user/withdrawal',$data);
        $this->load->view('user/Footer');

    }

    function purchase_token(){  
        user_auth();

       $from_address = $this->_get_admin_address_from_db();
       $id = $_SESSION['etp_user_id'];
       $return = $this->_custom_query("select * from address where user_id = $id");
       $data['add'] = $return->result()[0]->address;
       $to_add = $return->result()[0]->address;
       /*----------------------------------------*/
       //   CHECK IF USER's LAST TRANSACTION IS COMPLETED 'END'
       /*----------------------------------------*/

       ////get user ether balance START///
           $url = "http://localhost:3003/api/getEtherBalance";
           $ch = curl_init($url);
           curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
           curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
           curl_setopt($ch,CURLOPT_POST,1);
           curl_setopt($ch,CURLOPT_POSTFIELDS,"ether_address=$to_add");
           curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
           $eth_balance = curl_exec($ch);
           curl_close($ch); 
           $eth_balance = json_decode($eth_balance);
           $user_eth_balance = $eth_balance->balance;
           $_SESSION['user_ether_balance'] = $user_eth_balance;
                // if(empty($user_eth_balance)){
                //    $this->session->set_flashdata('unsuccessful', 'Transaction unsuccessful');
                //    redirect('user/purchase_token');
                // }
                //// get user ether balance END ////  

       $token_val_query = $this->_custom_query("SELECT * FROM fees");
       $ether_value = $token_val_query->result()[0]->external;
       $data['token_value'] = $ether_value;
       // $to = "0x1720a68e3dee0724d084b9dc1114c8e4d289a10c";
       $data['min_token'] = $this->get_minimum_token_purchase();
            if($this->input->post('submit')){
               
               $token_amt = $this->input->post('token_amount');
               if($data['min_token'] > $token_amt){
                   $this->session->set_flashdata('flashdata',"Minimum purchase should be greater than ".$data['min_token']);
                   redirect('user/purchase_token');
               }
           
           //get the bounus amount 
           $date = date('Y-m-d');
           $bonus = $this->_custom_query("select * from phase where end_date >= '$date' and start_date <= '$date'");
           $bonus_amt = $bonus->result()[0]->bonus_amount;

           $charges_in_eth = $token_amt * $ether_value;
          
           //adding bounus amount in token purchase
           $b_amt = $token_amt * $bonus_amt * 1/100;    
           $val = $token_amt + $b_amt;
           if($user_eth_balance < $charges_in_eth){

               $this->session->set_flashdata('flashdata', 'You don\'t have enough ether balance to complete this transaction');
               redirect('user/purchase_token');
           }else{

           $pass = $this->input->post('password');

           $url = "http://localhost:3003/api/sendEtherTransaction";
           $ch = curl_init($url);
           curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
           curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
           curl_setopt($ch,CURLOPT_POST,1);
           curl_setopt($ch,CURLOPT_POSTFIELDS,"from=$to_add&to=$from_address&value=$charges_in_eth&pass=$pass");
           curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
           $ethr_trnsfr_ouput = curl_exec($ch);
           curl_close($ch); 
           $ethr_trnsfr_ouput = json_decode($ethr_trnsfr_ouput);

           $txn_hash = $ethr_trnsfr_ouput->txnHash;
             if(!empty($txn_hash))
             {
               //$insert_id will be updated when we get the token id
               $insert_id = 0;
               $eth_trnsfr_detail = $this->_custom_query("INSERT INTO eth_transfer(from_user,to_user,value,transfered_token_id,txn_hash) VALUES('$id','1','$charges_in_eth','$insert_id','$txn_hash')");
               $eth_trnsfr_updated_id = $this->db->insert_id();
             }else
             {
                 $this->session->set_flashdata('flashdata', 'Transaction unsuccessful');
                 redirect('user/purchase_token');
             }
               $upbal = floor($val)*100000000;
               $password = $this->_get_admin_password_from_db();
               $url = "http://localhost:3003/api/transferTo"; 
               $ch = curl_init($url);
               curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
               curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
               curl_setopt($ch,CURLOPT_POST,1);
               curl_setopt($ch,CURLOPT_POSTFIELDS,"from=$from_address&to=$to_add&value=$upbal&password=$password");
               curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
               $output = curl_exec($ch);
               curl_close($ch); 
               $output = json_decode($output);
               $txn = $output->txn;
               $this->session->set_flashdata('flashdata', 'Thank you for purchasing BCP token, please wait few minutes to update balance!');
               redirect('user/dashboard');
                   if(empty($txn))
                   {
                       $this->session->set_flashdata('flashdata', 'Transaction unsuccessful');
                       redirect('user/purchase_token');
                   }else
                   {
                      
                       $this->chk_for_reffral($token_amt);
                       
                       $token_trnsfer_detail = $this->_custom_query("INSERT INTO transfer_token(from_user,to_user,token,txn_hash) VALUES('1','$id','$upbal','$txn')");

                       $insert_id = $this->db->insert_id();
                   
                       //update $insert_id into eth_transfer
                       $this->_custom_query("update eth_transfer set transfered_token_id=$insert_id where id = $eth_trnsfr_updated_id");

                       $this->session->set_flashdata('flashdata', 'Transaction Successful');
                       redirect('user/dashboard');

                       //-- Exchange ether balance START --//
                           //--FROM USER ETH ADDRESS TO ADMIN ETH ADDRESS--//
                       
                   }
                }

           }
       $date = date('Y-m-d');
       $data['countdown'] = $this->_custom_query("select * from phase where end_date >= '$date' and start_date <= '$date'");  
       $data['title'] = 'Purchase token';      
       $this->load->view('user/Header',$data);
       $this->load->view('user/Purchase_token',$data);
       $this->load->view('user/Footer');
   }



   function transfer_ether(){
    user_auth();

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $id = $_SESSION['etp_user_id'];
    $check_last_trans = $this->_custom_query("select * from eth_transaction where user_id = $id ORDER by id DESC limit 1"); 
    //check if ehter transcation ! completed
    if(count($check_last_trans->result()) != 0)
    {
    $purchase_token_validity = $check_last_trans->result()[0]->transaction_completed;
    if($purchase_token_validity == 0){
         $last_txn_hash = $check_last_trans->result()[0]->txn_hash;

         $url = "http://localhost:3003/api/getTransactionStatus"; 
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"txnHash=$last_txn_hash");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $txn_status = curl_exec($ch);
        curl_close($ch); 
        $txn_status = json_decode($txn_status,true);

        if(empty($txn_status['receipt']['blockNumber']) || $txn_status['receipt']['blockNumber'] == ''){
            $this->session->set_flashdata('flashdata', 'You can not transfer ether due to pending transaction! Please try after some time');
            redirect('user/dashboard');
        }else{
            $update_txn_status = $this->_custom_query("UPDATE eth_transaction SET transaction_completed = '1' WHERE txn_hash='$last_txn_hash'");
        }
        
    }        
    }

    $return = $this->_custom_query("select * from address where user_id = '$id'");
    $data['add'] = $return->result()[0]->address;
    $from_add = $return->result()[0]->address;

    if($this->input->post('submit')){
        $this->form_validation->set_rules('to_add', 'Address', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        if ($this->form_validation->run() === FALSE) {
            redirect('user/transfer_ether');
        }else{
            $to_add = $this->input->post('to_add');
            $ammount = $this->input->post('amount');

            // $check_add = $this->_custom_query("SELECT * FROM address WHERE address = '$to_add'");
            // if($check_add->num_rows() == 0){
            //      $this->session->set_flashdata('flashdata', 'Invalid Address');
            //     redirect('user/transfer_ether');   
            // }
            
            ////get user ether balance START///
         $url = "http://localhost:3003/api/getEtherBalance";
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,"ether_address=$from_add");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $eth_balance = curl_exec($ch);
            curl_close($ch); 
            $eth_balance = json_decode($eth_balance);
            $user_eth_balance = $eth_balance->balance;
             
             //// get user ether balance END //// 
             if($user_eth_balance < $ammount){
                $this->session->set_flashdata('flashdata', 'You don\'t have enough ether balance to complete this transaction');
                redirect('user/transfer_ether');
                }else{
                $password =  $this->input->post('eth_password');
                $url = "http://localhost:3003/api/sendEtherTransaction";
                $ch = curl_init($url);
                curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
                curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($ch,CURLOPT_POST,1);
                curl_setopt($ch,CURLOPT_POSTFIELDS,"from=$from_add&to=$to_add&value=$ammount&pass=$password");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                $output = curl_exec($ch);
                curl_close($ch); 
                $output = json_decode($output);
                if(!empty($output->txnHash)){
                    $txn_hash = $output->txnHash;
                    $this->_custom_query("INSERT INTO eth_transaction(address,user_id,amt,txn_hash) VALUES('$to_add','$id','$ammount','$txn_hash')");
                    $this->session->set_flashdata('flashdata', 'Transaction Succesful');
                    redirect('user/dashboard');
                }else{
                    $this->session->set_flashdata('flashdata', 'Something went wrong, This transaction couldn\'t be completed ');
                    redirect('user/transfer_ether');
                }
              }

       }
   }
   
    $data['title'] = 'Transfer Ether';
    $this->load->view('user/Header',$data);
    $this->load->view('user/Transfer_eth');
    $this->load->view('user/Footer');
}
    function recover_password()
    {
        $update_id = $this->uri->segment(3);

        if(strlen($update_id) != 138)
        {
            redirect(base_url('user/login'));
        }
        $submit = $this->input->post('submit');
        if($submit == 'submit')
        {
            $password = $this->input->post('password',True);
            $repeat_password = $this->input->post('repeat_password',true);

            if(empty($password) || empty($repeat_password))
            {
                $msg = "please enter your password";
                $value = '<div class="alert alert-danger">' . $msg . '</div>';
                $this->session->set_flashdata('item', $value);
                redirect(base_url('user/change_password/').$update_id);
            }
            if($password != $repeat_password)
            {
                $msg = "Password did not match";
                $value = '<div class="alert alert-danger">' . $msg . '</div>';
                $this->session->set_flashdata('item', $value);
                redirect(base_url('user/change_password/').$update_id);
            }
            $query = "select * from forgot_password where password = '$update_id'";

            $return = $this->_custom_query($query);
            $user_id = $return->result()[0]->user_id;

            if(!is_numeric($user_id))
            {
                $msg = "You are not authorized";
                $value = '<div class="alert alert-danger">' . $msg . '</div>';
                $this->session->set_flashdata('item', $value);
                redirect('user');
            }

            $new_password = $this->_password($password);

            $update_query = "update user set password = '$new_password' WHERE id = $user_id";
            $this->_custom_query($update_query);

            $msg = "your password changed please logged in";
            $value = '<div class="alert alert-success">' . $msg . '</div>';
            $this->session->set_flashdata('item', $value);
            redirect('user/login');

        }
        $data['update_id'] = $update_id;
        $data['flash'] = $this->session->flashdata('item');
        $data['title']='Forgot password';
        $this->load->view('user/Header',$data);
        $this->load->view('user/Change_password');
        $this->load->view('user/Footer');
    }

    function changeLang(){
        if(isset($_POST['lang'])){
            $lang = array('lang' => $_POST['lang']);
            $this->session->set_userdata('lang',$_POST['lang']);
        }
        redirect(base_url('user/dashboard'));
    }

    function forgotpassword()
    {
        $submit = $this->input->post('submit',true);
        if($submit == 'submit')
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','email','required');
            if($this->form_validation->run() == true)
            {
                 $email = $this->input->post('email',true);
                 
                 $sql = "select * from user where email = '$email'";

                 $return = $this->_custom_query($sql);

                 //chk wheather email is present in database or not
                 if(count($return->result()) != 1)
                 {
                     $msg = "You are not a register user";
                     $value = '<div class="alert alert-danger">' . $msg . '</div>';
                     $this->session->set_flashdata('item', $value);
                     redirect(base_url('user/forgotpassword'));
                 }
                 $user_id = $return->result()[0]->id;

                 $password = $this->generateRandomString(128).time();
                 //check if user_id already exist in forgot password


                 $return_pass = $this->_custom_query("select * from forgot_password WHERE user_id=$user_id");
                 $count_pass = count($return_pass->result());

                 if($count_pass == 1)
                 {
                     $sql = "update forgot_password set password = '$password' WHERE user_id = $user_id";
                 }else
                 {
                     $sql = "insert into forgot_password (user_id,password) VALUES ('$user_id','$password')";
                 }

                 $this->_custom_query($sql);


                 $message  = "<h1>Fulfill Coin</h1>
                              Please click the link to change your password<br/>
                              <a href=".base_url('user/recover_password/').$password." target='_blank'>".base_url('user/change_password/').$password."</a>";

                 sendEmail($email,'forgot password',$message);
                 $msg = "We send you a new password on your mail";
                 $value = '<div class="alert alert-success">' . $msg . '</div>';
                 $this->session->set_flashdata('item', $value);
                 redirect(base_url('user/forgotpassword'));
            }
            else
            {
                $msg = "Please enter correct email address";
                $value = '<div class="alert alert-danger">' . $msg . '</div>';
                $this->session->set_flashdata('item', $value);
                redirect(base_url('user/forgotpassword'));
            }
        }
        $data['flash'] = $this->session->flashdata('item');
        $data['title'] = 'Forgot Password';
        $this->load->view('user/Header',$data);
        $this->load->view('user/Forgot_password');
        $this->load->view('Footer');
    }
    function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function get_minimum_token_purchase(){
        $query = $this->_custom_query("SELECT * FROM minimum_token");
        return $query->result()[0]->minimum_token;
    }

    function get_withdrawal_permission(){
        $id = $_SESSION['etp_user_id'];
        $query = $this->_custom_query("SELECT * FROM withdrawal_permission WHERE user_id = '$id'");
        return $query->row()->permission;
    }
     
    function _get_admin_address_from_db()
    {
       $admin_address = $this->_custom_query("select * from admin_address order by id desc limit 1");
       $return = $admin_address->result()[0]->address;
       return $return;
    } 
    function _get_admin_password_from_db()
    {
       $admin_address = $this->_custom_query("select * from admin_address order by id desc limit 1");
       $return = $admin_address->result()[0]->password;
       return $return;
    } 

    function _password($password = null)
    {
        $password = hash('sha256',$password.SALT);
        return  $password;
    }
    function _get_data_from_post()
    {
        $data['name']=$this->input->post('name',true);
        $data['password']=$this->_password($this->input->post('password',true));
        $data['email']=$this->input->post('email',true);
        return $data;
    }
    function _get_where($update_id)
    {
        $this->load->model('User_model');
        $return = $this->User_model->get_where($update_id);
        return $return;
    }
    function _get($order_by)
    {
        $this->load->model('User_model');
        $return = $this->User_model->get($order_by);
        return $return;
    }
    function _insert($data)
    {
        $this->load->model('User_model');
        $this->User_model->_insert($data);

    }
    function _update($id, $data)
    {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('User_model');
        $this->User_model->_update($id, $data);
    }
    function _custom_query($query)
    {
        $this->load->model('User_model');
        return $this->User_model->_custom_query($query);
    }

}
