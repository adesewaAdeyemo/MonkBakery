<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('cart_model');
		$this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('cartfile/home');

		if (isset($_POST['login']) && (($this->input->post()) ==! NULL)) {
			$postData = $this->input->post();
			$email = $postData['logMail'];
			$pwd = $postData['logPwd'];

			$this->load->database();
			$this->db;
			$query=$this->db->get_where('customer', array('user_password'=> $pwd));
			if(!$query){
				echo "Invalid Email or Password";
			}else{
			$data['result'] = $query->result_array();
			foreach ($query->result_array() as $key=>$row){
				$password = $row['user_password'];
				$email = $row['email'];
				if (($pwd === $password)){
					header("Location: ./index.php/cart/carty");
				}else{
					echo "Invalid Email or Password";
				}
			}
			}
		}

		if (isset($_POST['signup'])){
			$postData = $this->input->post();
			$this->load->database();
			$this->db;
			$data = array(
				'email' => $postData['logmail'],
				'username' => $postData['loguid'],
				'user_password' => $postData['logpwd']
			);
			$this->db->insert("customer", $data);
			// header("Location: ./index.php/cart/carty");
		}

	}
	public function carty()
	{
        $data['prod'] = $this->cart_model->selectall();
		$this->load->view('cartfile/carty', $data);

		if (isset($_POST['id'])){
	
            $this->cart_model->addtorecord();
        }
	}
	public function checkout()
	{
		$data['cart'] = $this->cart_model->addtocart();
		$this->load->view('cartfile/checkout', $data);
		if (isset($_POST['uncart'])){
			$this->cart_model->removefromcart();
		}
		if (isset($_POST['empty'])){
			$this->cart_model->removeallfromcart();
		}
	}




}
