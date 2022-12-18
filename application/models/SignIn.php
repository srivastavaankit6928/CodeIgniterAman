<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Model {

    public function userLogin($userValue)
    {
        $query =$this->db->select()
        ->where(['email'=>$userValue['email'],'password'=>$userValue['password']])
                    ->get('user');
       if($query->result_array() == ""){
        return false;
       }
       else{
        return $query->result_array();
       }
    }
    

}