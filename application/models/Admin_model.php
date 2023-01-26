<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function index() {
	}
	public function action($action = array()) {
		$this->db->insert('actions',$action);
		if($this->db->insert_id() > 1000){
			$this->db->truncate('actions'); 
		}
	}
	public function get_actions($limit=0){
		$this->db->limit($limit);
		$this->db->order_by('id','desc');
		return $this->db->get('actions')->result_array();
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
	/*  posts  */
	public function menu_add($data){
		$this->db->insert('menu',$data);
		return $this->db->insert_id();
	}
	public function menu_edit($data = array()) {
		$this->db->update('menu',$data,array('id' => $data['id']));
	}
	public function menu_delete($id){
		$this->db->delete('menu',array('id' => $id));
	}
	public function get_menu($id){
		return $this->db->get_where('menu',array('id'=>$id))->row_array();
	}
	public function menu_update($menu){
		foreach ($menu as $key => $value) {
			if (is_array($value)) {
				$this->db->where('id',$value['id']);
				$this->db->set('subid', $value['subid']);
				$this->db->set('order', $key);
				$this->db->update('menu');
			}
		}
	}
	public function menu_list() {
		return $this->db->get('menu')->result_array();
	}
	public function words(){
		$this->db->order_by('id','desc');
		return $this->db->get('words')->result_array();
	}
	public function word_add($data){
		$this->db->insert('words',$data);
		return $this->db->insert_id();
	}
	public function word_edit($data = array()) {
		$this->db->update('words',$data,array('id' => $data['id']));
	}
	public function word_delete($id) {
		$this->db->delete('words',array('id' => $id));
	}
	
	public function get_post($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('posts')->row_array();
	}
	public function post_add($data){
		$this->db->insert('posts',$data);
		return $this->db->insert_id();
	}
	public function post_edit($data = array()) {
		$this->db->update('posts',$data,array('id' => $data['id']));
	}
	public function post_delete($id) {
		$this->db->delete('posts',array('id' => $id));
	}
	public function post_visible($filter = array()) {
		$this->db->update('posts',$filter,array('id' => $filter['id']));
	}
	public function post_list($filter = array(),$total = 0) {
		$this->db->select('posts.*,menu.title as menu_title');
		$this->db->from('posts');
		$this->db->join('menu', 'menu.id = posts.menu');
		if($filter['search']!==""){
		$this->db->like('posts.title', $filter['search']);
		$this->db->or_like('menu.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('ontsloh desc','posts.id desc');
		return $this->db->get()->result_array();
	}
	public function post_list_mostread($filter = array(),$total = 0) {
		$this->db->select('posts.*,menu.title as menu_title');
		$this->db->from('posts');
		$this->db->where('mostread',1);
		$this->db->join('menu', 'menu.id = posts.menu');
		if($filter['search']!==""){
			$this->db->like('posts.title', $filter['search']);
			$this->db->or_like('menu.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('ontsloh desc','posts.id desc');
		return $this->db->get()->result_array();
	}
	public function posts($limit = 10){
		$this->db->limit($limit);
		$this->db->order_by('visited','desc');
		return $this->db->get('posts')->result_array();
	}
	/*slider*/
	
	public function slider_order($order)
	{
		if (is_array($order)) {
			foreach ($order as $key => $id) {
				$this->db->where('id',$id);
				$this->db->set('order', $key);
				$this->db->update('sliders');
			}
		}
	}
	
	public function get_slider($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('sliders')->row_array();
	}
	public function slider_add($data){
		$this->db->insert('sliders',$data);
		return $this->db->insert_id();
	}
	public function slider_edit($data = array()) {
		$this->db->update('sliders',$data,array('id' => $data['id']));
	}
	public function slider_delete($id) {
		$this->db->delete('sliders',array('id' => $id));
	}
	public function slider_visible($filter = array()) {
		$this->db->update('sliders',$filter,array('id' => $filter['id']));
	}
	public function slider_list($filter = array(),$total = 0) {
		//$this->db->select('sliders');
		$this->db->from('sliders');
		/*$this->db->join('menu', 'menu.id = sliders.menu');*/
		if($filter['search']!==""){
		$this->db->like('sliders.title', $filter['search']);
		//$this->db->or_like('menu.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('sliders.id','desc');
		return $this->db->get()->result_array();
	}
	public function sliders($limit = 10){
		$this->db->limit($limit);
		$this->db->order_by('visited','desc');
		return $this->db->get('sliders')->result_array();
	}
	/*project*/
	public function menu_add1($data){
		$this->db->insert('menu1',$data);
		return $this->db->insert_id();
	}
	public function menu_edit1($data = array()) {
		$this->db->update('menu1',$data,array('id' => $data['id']));
	}
	public function menu_delete1($id){
		$this->db->delete('menu1',array('id' => $id));
	}
	public function get_menu1($id){
		return $this->db->get_where('menu1',array('id'=>$id))->row_array();
	}
	public function menu_update1($menu){
		foreach ($menu as $key => $value) {
			if (is_array($value)) {
				$this->db->where('id',$value['id']);
				$this->db->set('subid', $value['subid']);
				$this->db->set('order', $key);
				$this->db->update('menu1');
			}
		}
	}
	public function menu_list1() {
		return $this->db->get('menu1')->result_array();
	}
	
	public function get_project($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('project')->row_array();
	}
	public function project_add($data){
		$this->db->insert('project',$data);
		return $this->db->insert_id();
	}
	public function project_edit($data = array()) {
		$this->db->update('project',$data,array('id' => $data['id']));
	}
	public function project_delete($id) {
		$this->db->delete('project',array('id' => $id));
	}
	public function project_visible($filter = array()) {
		$this->db->update('project',$filter,array('id' => $filter['id']));
	}
	public function project_list($filter = array(),$total = 0) {
		$this->db->select('project.*,menu1.title as menu_title');
		$this->db->from('project');
		$this->db->join('menu1', 'menu1.id = project.menu');
		if($filter['search']!==""){
		$this->db->like('project.title', $filter['search']);
		$this->db->or_like('menu1.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('project.id','desc');
		return $this->db->get()->result_array();
	}
	public function project($limit = 10){
		$this->db->limit($limit);
		$this->db->order_by('visited','desc');
		return $this->db->get('project')->result_array();
	}
	/* events */
	public function menu_add2($data){
		$this->db->insert('menu2',$data);
		return $this->db->insert_id();
	}
	public function menu_edit2($data = array()) {
		$this->db->update('menu2',$data,array('id' => $data['id']));
	}
	public function menu_delete2($id){
		$this->db->delete('menu2',array('id' => $id));
	}
	public function get_menu2($id){
		return $this->db->get_where('menu2',array('id'=>$id))->row_array();
	}
	public function menu_update2($menu){
		foreach ($menu as $key => $value) {
			if (is_array($value)) {
				$this->db->where('id',$value['id']);
				$this->db->set('subid', $value['subid']);
				$this->db->set('order', $key);
				$this->db->update('menu2');
			}
		}
	}
	public function menu_list2() {
		return $this->db->get('menu2')->result_array();
	}
	
	public function get_event($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('events')->row_array();
	}
	public function event_add($data){
		$this->db->insert('events',$data);
		return $this->db->insert_id();
	}
	public function event_edit($data = array()) {
		$this->db->update('events',$data,array('id' => $data['id']));
	}
	public function event_delete($id) {
		$this->db->delete('events',array('id' => $id));
	}
	public function event_visible($filter = array()) {
		$this->db->update('events',$filter,array('id' => $filter['id']));
	}
	public function event_list($filter = array(),$total = 0) {
		$this->db->select('events.*,menu2.title as menu_title');
		$this->db->from('events');
		$this->db->join('menu2', 'menu2.id = events.menu');
		if($filter['search']!==""){
		$this->db->like('events.title', $filter['search']);
		$this->db->or_like('menu2.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('events.id','desc');
		return $this->db->get()->result_array();
	}
	public function events($limit = 10){
		$this->db->limit($limit);
		$this->db->order_by('visited','desc');
		return $this->db->get('events')->result_array();
	}
	public function get_banner($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('banners')->row_array();
	}
	public function banner_add($data){
		$this->db->insert('banners',$data);
		return $this->db->insert_id();
	}
	public function banner_edit($data = array()) {
		$this->db->update('banners',$data,array('id' => $data['id']));
	}
	public function banner_delete($id) {
		$this->db->delete('banners',array('id' => $id));
	}
	public function banner_visible($filter = array()) {
		$this->db->update('banners',$filter,array('id' => $filter['id']));
	}
	public function banner_list($filter = array(),$total = 0) {
		$this->db->order_by('id','desc');
		return $this->db->get('banners')->result_array();
	}
	public function banner_order($order)
	{
		if (is_array($order)) {
			foreach ($order as $key => $id) {
				$this->db->where('id',$id);
				$this->db->set('order', $key);
				$this->db->update('banners');
			}
		}
	}
	
	/* events */
	public function menu_add3($data){
		$this->db->insert('menu3',$data);
		return $this->db->insert_id();
	}
	public function menu_edit3($data = array()) {
		$this->db->update('menu3',$data,array('id' => $data['id']));
	}
	public function menu_delete3($id){
		$this->db->delete('menu3',array('id' => $id));
	}
	public function get_menu3($id){
		return $this->db->get_where('menu3',array('id'=>$id))->row_array();
	}
	public function menu_update3($menu){
		foreach ($menu as $key => $value) {
			if (is_array($value)) {
				$this->db->where('id',$value['id']);
				$this->db->set('subid', $value['subid']);
				$this->db->set('order', $key);
				$this->db->update('menu3');
			}
		}
	}
	public function menu_list3() {
		return $this->db->get('menu3')->result_array();
	}
	
	public function get_tour($id=0){
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('tours')->row_array();
	}
	public function tour_add($data){
		$this->db->insert('tours',$data);
		return $this->db->insert_id();
	}
	public function tour_edit($data = array()) {
		$this->db->update('tours',$data,array('id' => $data['id']));
	}
	public function tour_delete($id) {
		$this->db->delete('tours',array('id' => $id));
	}
	public function tour_visible($filter = array()) {
		$this->db->update('tours',$filter,array('id' => $filter['id']));
	}
	public function tour_order($order)
	{
		if (is_array($order)) {
			foreach ($order as $key => $id) {
				$this->db->where('id',$id);
				$this->db->set('order', $key);
				$this->db->update('tours');
			}
		}
	}
	public function tour_list($filter = array(),$total = 0) {
		$this->db->select('tours.*,menu3.title as menu_title');
		$this->db->from('tours');
		$this->db->join('menu3', 'menu3.id = tours.menu');
		if($filter['search']!==""){
		$this->db->like('tours.title', $filter['search']);
		$this->db->or_like('menu3.title', $filter['search']);
		}
		if($total == 0){
			$this->db->limit($filter['limit'],$filter['start']);
		}
		$this->db->order_by('tours.order','asc');
		$this->db->order_by('tours.id','desc');
		return $this->db->get()->result_array();
	}
	public function tours($limit = 10){
		$this->db->limit($limit);
		$this->db->order_by('visited','desc');
		return $this->db->get('tours')->result_array();
	}
	

	
	public function subscribers_download(){
		$this->load->dbutil();
		$query = $this->db->get('subscribers');
		$delimiter = ",";
		$newline = "\r\n";
		header("Content-Type: application/vnd.ms-excel; charset=UTF-8");  
		header('Content-Disposition: attachment; filename=subscribers.csv');  
		header('Content-Transfer-Encoding: binary');  
		header('Pragma: public');  
		echo "\xEF\xBB\xBF"; // UTF-8 BOM  
		echo $this->dbutil->csv_from_result($query, $delimiter, $newline);
			//$this->load->helper('download');
			//force_download("mailing_list.csv", $data);
		exit;
	}
	public function get_files($limit){
		$this->db->order_by('id','desc'); 
		$this->db->limit($limit);
		return $this->db->get('files')->result_array();
	}
	public function file_add($data){
		$this->db->insert('files',$data);
	}
	public function file_delete($file){
		$this->db->where('file',$file);
		$this->db->delete('files');
	}
}