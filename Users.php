<?php
class Users extends MY_controller
{
 public function index()
 {
  $this->load->view('Users/articleList');
 }
 public function register()
 {
  $this->load->view('admin/register');
 }

 
}


?>