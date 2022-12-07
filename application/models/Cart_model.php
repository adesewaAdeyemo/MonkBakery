<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {



    function selectall()
	{
        $this->load->database();
        $this->db;
        // $query= $this->db->query("SELECT * FROM highlife");
        $query= $this->db->get("bread");
        $query->result_array();
        return $query->result_array();

	}
    function addtorecord()
	{
        $album=$artist=$band=$rating=$id='';
        $quantity=1;
        $this->load->database();
        $this->db;


        
        $quantity= isset($_POST['quantity'])?$_POST['quantity']:1;
        $id= $_POST['id'];
        $query=$this->db->get_where('bread', array('id'=> $id));
        $result=$query->result_array();
        foreach ($result as $key=>$row){
            global $quantity;
            $image= $row['images'];
            $name= $row['name'];
            $price= $row['price'];
            $id= $row['id'];
            $quantity= isset($_POST['quantity']) ? $_POST['quantity'] : 1;

            $data = array(
            'image' => $image,
            'name' => $name,
            'product_id' => $id,
            'price' => $price,
            'quantity' => $quantity
        );
        $query= $this->db->insert("Orders", $data);
        }
    }
    function addtocart()
	{
        $this->load->database();
        $this->db;
        // $query= $this->db->query("SELECT * FROM highlife");
        $query= $this->db->get("orders");
        $query->result_array();
        return $query->result_array();
	}
    function removefromcart(){
        $this->load->database();
        $this->db;
        $id= $_POST['id'];
        // $id= $_id
        $this->db->delete('orders', array('id' => $id));
    }
    function removeallfromcart(){
        $this->load->database();
        $this->db;
        $this->db->empty_table('orders');
    }
    // function check(){
    //     $this->load->database();
    //     $this->db;
        // $mail=$pwd='';
        // $mail = 'adeyemoadesewa54@gmail.com';   //mail is not seen maybe because of the special character
        // $id=1;
        // $pwd= 1234;
        // $pwd = $;
                // $this->db->where('email', $mail);
        // $query = $this->db->get('customer');

        // $query=$this->db->get_where('customer', array('user_password'=> $pwd));
        // return $query->result_array();
        // foreach ($result as $key=>$row){
        //     $password = $row['pwd'];
        //     if ($pwd === $password){
        //         header("Location: ./carty");
        //     }
        // }

    // }
}