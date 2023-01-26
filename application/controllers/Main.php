<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	function __construct(){	
		parent::__construct(); 
		//$this->config->set_item('cache',1440); /*1440*/	
	}
	
	function index(){
		//$this->output->cache($this->config->item('cache'));
		$data = array();
		$data['selected'] = 0;
		$data['w'] = $this->main_model->words();
		$data['banner'] = $this->main_model->banners();
 		$data['menus'] = $this->main_model->getmenus();
		$data['ontslohnews'] = $this->main_model->getontsloh(3);
		$arrnotin = array();
		foreach($data['ontslohnews'] as $notin){
			array_push($arrnotin, $notin['id']);
		}
		$data['topnews'] = $this->main_model->gettopnews($arrnotin);
		$data['videonews'] = $this->main_model->getnews_by_menu(12, 2);
		// $data['mostread'] = $this->main_model->mostread();
		$data['busad'] = $this->main_model->getnews_by_menu(15, 3);
		$this->main_lib->template('home',$data);
	}

	function l($id = 0,$start=0){
		//$this->output->cache($this->config->item('cache')); 
		$data = array();
		$data['selected'] = $id;
		$data['w'] = $this->main_model->words();
		$data['menu'] = $this->main_model->menu($id);
		$data['menus'] = $this->main_model->getmenus();
		$data['banner'] = $this->main_model->banners();
		// $data['news'] = $this->main_model->get_news(array('menu'=>0,'search'=>"",'start'=>0,'limit'=>12,'not'=>0),0);
		$this->load->library('pagination');
		$total = $this->main_model->count_table1('posts',$id);
		$data['davai'] = 20;
		$settings = $this->main_lib->get_settings1($id,'l',$total,4);
		$this->pagination->initialize($settings);
		$data['page_nav'] = $this->pagination->create_links();
		$data['news'] = $this->main_model->news(array('id'=>$id,'start'=>$start,'limit'=>4));
		$data['mostread'] = $this->main_model->mostreadwithmenu(0);
		$this->main_lib->template('list',$data);
	}

	function d($id=0){
		//$this->output->cache($this->config->item('cache'));
		$data = array();
		$data['w'] = $this->main_model->words();
		$data['banner'] = $this->main_model->banners();
		$data['menus'] = $this->main_model->getmenus();
		$data['post'] = $this->main_model->post($id);
		$data['menu'] = $this->main_model->menu($data['post']['menu']);

		$data['selected'] = $data['post']['menu'];
		// $data['prev'] = $this->main_model->prevnext($data['post']['menu'],$id);
		// $arrnotin = array();
		// foreach($data['prev'] as $notin){
		// 	array_push($arrnotin, $notin['id']);
		// }
		// array_push($arrnotin, $id);
		$data['samepost'] = $this->main_model->samepost($data['post']['menu'],$id);
		$data['mostread'] = $this->main_model->mostreadwithmenu($id);
		$this->main_lib->template('detail',$data);
	}



	function view($id = 0){
		//$this->output->cache($this->config->item('cache'));
		$data = array();
		$data['post'] = $this->main_model->get_post($id);
		if(empty($data['post'])){
			show_404();
		}
		$this->main_model->post($id);
		// $data['news'] = $this->main_model->get_news(array('menu'=>0,'search'=>"",'start'=>0,'limit'=>6,'not'=>$id),0);
		$data['banners'] = $this->main_model->get_banners();
		$this->main_lib->template('view',$data);
	}
	
	function places($id=0){
		//$this->output->cache($this->config->item('cache'));
		$data = array();
		$data['id'] = $id;
		$data['places'] = $this->main_model->get_places();
		$data['places'] = json_encode($data['places']);
		$data['menus'] = $this->main_model->get_menu1(0);
		$data['submenus'] = $this->main_model->get_submenus1($data['menus']);
		$data['submenus'] = json_encode($data['submenus']);
		$this->main_lib->template('places',$data);
	}


	function offset(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$timezone = $this->input->post('timezone');
			$offset = $this->get_timezone_offset($timezone);
			$this->output->set_content_type('application/json')
			->set_output(json_encode(array('offset' => $offset)));
			////exit();
		}
	}
	function get_timezone_offset($remote_tz) {
		$origin_tz = date_default_timezone_get();
		$origin_dtz = new DateTimeZone($origin_tz);
		$origin_dt = new DateTime("now", $origin_dtz);
		$offset1 = $origin_dtz->getOffset($origin_dt);
		$remote_dtz = new DateTimeZone($remote_tz);
		$remote_dt = new DateTime("now", $remote_dtz);
		$offset = $origin_dtz->getOffset($origin_dt) - $remote_dtz->getOffset($remote_dt);
		return $offset1 - $offset;
	}
	
}