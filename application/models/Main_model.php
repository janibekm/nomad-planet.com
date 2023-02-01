<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	public function index() {
	}
	public function check_mail($mail) {
		$this->db->where('email',$mail);
		$query = $this->db->get('cvregistration');
		if ($query->num_rows() > 0){
			return false;
		}
		else{
			return true;
		}
	}
	function count_table($table){
		return $this->db->count_all($table);
	}
	function count_table1($table,$id){
		$this->db->like('menu', $id,'after');
		return $this->db->count_all_results($table);
	}
	function getmenus(){
		$this->db->where('visible',1);
		return $this->db->get('menu')->result_array();
	}
	public function get_submenus1($menus=array()) {
		$menus_id = array();
		foreach($menus as $menu){
			array_push($menus_id,$menu['id']);
		}
		$this->db->where_in('subid',$menus_id);
		return $this->db->get('menu1')->result_array();
	}
	public function get_menu($subid=0) {
		$this->db->where('subid',$subid);
		return $this->db->get('menu')->result_array();
	}
	function words(){
		$this->db->order_by('id','asc');
		return $this->db->get('words')->result_array();
	}
	function banners(){
		$this->db->order_by('id','asc');
		$this->db->order_by('order','asc');
		return $this->db->get('banners')->result_array();
	}
	public function getontsloh($limit){
		$this->db->select('posts.*,menu.title_0 as menu_title, menu.color as menu_color');
		$this->db->from('posts');
		$this->db->join('menu', 'menu.id = posts.menu');
		$this->db->where('posts.visible',1);
		$this->db->where('posts.ontsloh',1);
		$this->db->limit(3);
		$this->db->order_by('posts.order','asc');
		return $this->db->get()->result_array();
	}
	public function gettopnews($arrnotin=array()){
		$this->db->select('posts.*,menu.title as menu_title, menu.color as menu_color');
		$this->db->from('posts');
		$this->db->join('menu', 'menu.id = posts.menu');
		$this->db->where('posts.visible',1);
		$this->db->where('posts.menu !=', 12);
		$this->db->where_not_in('posts.id', $arrnotin);
		$this->db->order_by('created','desc');
		$this->db->limit(14);
		return $this->db->get()->result_array();
	}
	public function mostread(){
		$this->db->where('visible',1);
		$this->db->where('mostread >',0);
		$this->db->order_by('visited','desc');
		$this->db->limit(4);
		return $this->db->get('posts')->result_array();
	}
	public function  mostreadwithmenu($id){
		$this->db->select('posts.*,menu.title as menu_title');
		$this->db->from('posts');
		$this->db->join('menu', 'menu.id = posts.menu');
		$this->db->where('posts.visible',1);
		$this->db->where('posts.id !=',$id);
		// $this->db->where_not_in('posts', [$id]);
		$this->db->where('mostread >',0);
		$this->db->order_by('visited','desc');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}

	// public function get_news($filter = array(),$total = 0) {
	// 	$this->db->select('posts.*,menu.title as menu_title');
	// 	$this->db->from('posts');
	// 	$this->db->join('menu', 'menu.id = posts.menu');
	// 	if($filter['search']!==""){
	// 		$this->db->like('posts.title', $filter['search']);
	// 		$this->db->or_like('menu.title', $filter['search']);
	// 	}
	// 	$this->db->where('menu.visible',1);
	// 	$this->db->where('posts.visible',1);
	// 	if($filter['not']!=0){
	// 		$this->db->where('posts.id !=',$filter['not']);	
	// 	}
	// 	if($total == 0){
	// 		$this->db->limit($filter['limit'],$filter['start']);
	// 	}
	// 	$this->db->order_by('posts.id','desc');
	// 	return $this->db->get()->result_array();
	// }
	function getnews_by_menu($id,$limit){
		$this->db->where('visible',1);
		$this->db->where('menu', $id);
		$this->db->limit($limit);
		$this->db->order_by('created','desc');
		return $this->db->get('posts')->result_array();
	}
	// function news($id){
	// 	$this->db->where('visible',1);
	// 	$this->db->where('menu', $id);
	// 	$this->db->limit(10);
	// 	$this->db->order_by('created','desc');
	// 	return $this->db->get('posts')->result_array();
	// }
	function news($filter = array()){
		$this->db->where('visible',1);
		$this->db->where('menu',$filter['id']);
		if($filter['limit']!==0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('created','desc');
		return $this->db->get('posts')->result_array();
	}
	function menu($id=0){
		$this->db->where('visible',1);
		$this->db->where('id',$id);
		return $this->db->get('menu')->row_array();
	}
	function post($id=0){
		$this->db->set('visited', 'visited+1',FALSE);
		$this->db->where('id', $id);
		$this->db->update('posts');
		$this->db->where('visible',1);
		$this->db->where('id',$id);
		return $this->db->get('posts')->row_array();	
	}
	public function samepost($menu,$id){
		$this->db->where('visible',1);
		$this->db->where('menu',$menu);
		$this->db->where('id !=',$id);
		$this->db->order_by('created','desc');
		$this->db->limit(3);
		return $this->db->get('posts')->result_array();
	}

	public function mostvisited($id){
		$this->db->where('visible',1);
		$this->db->where('id !=', $id);
		$this->db->order_by('visited','desc');
		$this->db->limit(4);
		return $this->db->get('posts')->result_array();
	}
	// public function prevnext($menu,$id){
	// 	$this->db->where('visible',1);
	// 	$this->db->where('menu',$menu);
	// 	$this->db->where('id !=', $id);
	
	// }
	public function get_banners() {
		$this->db->where('visible',1);
		$this->db->order_by('order','asc');
		return $this->db->get('banners')->result_array();
	}
}