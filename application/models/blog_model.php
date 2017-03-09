<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {
    public function get_by_page(){
        $this -> db ->select('*');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin','blog.author=admin.admin_id');
        return $this -> db -> get() -> result();
    }







}