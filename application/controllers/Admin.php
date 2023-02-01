<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in()) { redirect('auth/login', 'refresh'); }
		$this->load->library('admin_lib');
		$this->load->model('admin_model');
		$this->config->set_item('filename','powermn_');
		$user = $this->ion_auth->user()->row();
		$this->config->set_item('user_id',0+$user->id);
		$this->config->set_item('user_name',"".$user->first_name);
	}
	function tet(){	
		//echo FCPATH;	exit();
	}
	function index($actions = 30){
		$data['action'] = $actions;
		$data['actions'] = $this->admin_model->get_actions($actions);
		$data['posts_count'] = $this->admin_model->count_table('posts');
		$data['banners_count'] = $this->admin_model->count_table('banners');
		$data['posts'] = $this->admin_model->posts(10);
		$this->admin_lib->template('home',$data);
	}
	function crop(){
		$path = $this->input->post('path');
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && $path!=null) {
			$data = $this->input->post('image',false);
			$data1 = $data;
			$pos  = strpos($data, ';');
			$type = explode(':', substr($data1, 0, $pos))[1];
			$ext = explode('/',$type);
			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);
			$filename = $this->config->item('filename').now().'.'.$ext[1];
			file_put_contents($path.$filename, $data);
			echo $path.$filename;
		}
		else {
			$this->output->set_status_header('400');
			echo "Bad request";
		}
		exit();
	}
	function delete_file(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file = $this->input->post('rmfile');
			$path = $this->input->post('path');
			if(read_file($file)){
			$filename = substr($file, strrpos($file, '/') + 1);
			unlink($path.'/'.$filename);
			delete_files('application/cache');
			}
			//$this->admin_model->file_delete($file);
		}
	}
	function upload2(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$path = $this->input->post('path');
			$data = array();
			$data['file'] = '';
			if( ! empty($_FILES['file']['name'])){
				$config = array();
				$config['file_name'] = $this->config->item('filename').now();
				$config['upload_path'] = $path;
				$config['allowed_types'] = '*';
				$config['max_size']	= 0;
				$config['remove_spaces'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('file')){
					echo "";
				} else {
					$pic_data = $this->upload->data();
					$data['file']=$path.'/'.$pic_data['file_name'];
					if ($pic_data['image_width']>2048 || $pic_data['image_height']>2048) {
						$configResize = array(
							'source_image' => $pic_data['full_path'],
							'width' => 2048,
							'height' => 2048,
							'maintain_ratio' => TRUE
						);
					  $this->load->library('image_lib',$configResize);
					  $this->image_lib->resize();
					  $this->image_lib->clear();
					 }
					echo $data['file'];
				}
				delete_files('application/cache');
				exit();
			}
		}
	}
	function lang_list(){
		$data = array();
		$data['lang'] = $this->admin_model->lang_list();
		$this->admin_lib->template('lang_list');
	}
	function lang_edit($id=0){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['id'] = $id;
			$data['subid'] = 0+$this->input->post('subid');
			$data['title_0'] = $this->input->post('title_0');
			$data['title_1'] = $this->input->post('title_1');
			$data['title_2'] = $this->input->post('title_2');
			$data['title_3'] = $this->input->post('title_3');
			$data['title_4'] = $this->input->post('title_4');
			$data['description'] = $this->input->post('description');
			$data['url'] = $this->input->post('url');
			$data['target'] = $this->input->post('target');
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$this->admin_model->lang_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-pencil',
						'action' => 'Мэдээний ангилал засагдлаа',
						'link' => base_url().'admin/lang_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			redirect('admin/lang_list','refresh');
		}
		else {
			$data['menu'] = $this->admin_model->get_lang($id);
			//$data['menus'] = $this->get_menus(0,$data['menu']['id'],$data['menu']['subid']);
			$this->admin_lib->template('lang_edit',$data);
		}
	}
	function testiminol_add(){
		$data = array();
		$data['path'] = 'img/testiminols/';		
		$data['width'] = 800;
		$data['height'] = 800;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']= "";
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  $data['pic'] = $picpath;
				}
			}
			$data['title_0'] = $this->input->post('title_0');
			$data['menu'] = $this->input->post('menu');
			//$data['description_0'] = $this->input->post('description_0');
			$data['content_0'] = $this->input->post('content_0',false);
			$data['order'] = 0;
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->testiminol_add($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Хэрэглэгчийн сэтгэгдэл нэмэгдлээ',
						'link' => base_url().'admin/testiminol_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			redirect('admin/testiminol_list','refresh');
		}
		else {
			$data['iconm'] = $this->admin_model->iconm();
			$this->admin_lib->template('testiminol_add',$data);
		}
	}
	function testiminol_edit($id = 0){
		$data = array();
		$data['path'] = 'img/testiminols/';	
		$data['width'] = 800;
		$data['height'] = 800;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']=$this->input->post('cover_image_url');
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  if(read_file($data['pic'])){ unlink($data['pic']);}
				  $data['pic'] = $picpath;
				}
			}
			$data['id'] = $id;
			$data['menu'] = $this->input->post('menu');
			$data['title_0'] = $this->input->post('title_0');
			$data['title_1'] = $this->input->post('title_1');
			$data['title_2'] = $this->input->post('title_2');
			$data['title_3'] = $this->input->post('title_3');
			$data['title_4'] = $this->input->post('title_4');
			$data['content_0'] = $this->input->post('content_0');
			$data['content_1'] = $this->input->post('content_1');
			$data['content_2'] = $this->input->post('content_2');
			$data['content_3'] = $this->input->post('content_3');
			$data['content_4'] = $this->input->post('content_4');
			//$data['content_0'] = $this->input->post('content_0',false);
			//$data['content_1'] = $this->input->post('content_1',false);
			$data['order'] = 0+$this->input->post('order');
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->testiminol_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Хэрэглэгчийн сэтгэгдэл засагдлаа',
						'link' => base_url().'admin/testiminol_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			redirect('admin/testiminol_list','refresh');
		}
		else {
			$data['iconm'] = $this->admin_model->iconm();
			$data['testiminol'] = $this->admin_model->get_testiminol($id);
			$this->admin_lib->template('testiminol_edit',$data);
		}
	}
	function testiminol_delete($id = 0){
		$data = $this->admin_model->get_testiminol($id);
		$key = $this->admin_model->testiminol_delete($id);
		if($key==0){
			if(read_file($data['pic'])){	unlink($data['pic']);	}
			$action = array('id' => '',
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Хэрэглэгчийн сэтгэгдэл устгагдлаа: '.$data['title'],
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			redirect('/admin/testiminol_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function testiminol_visible($id = 0,$value = 0){
		$filter = array(
		'id' => $id,
		'visible' =>$value,
		'updated' =>now()
		);
		$this->admin_model->testiminol_visible($filter);
		redirect('/admin/testiminol_list');
	}
	function testiminol_order()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$order = $this->input->post('order');
			if( ! empty($order)){
				$this->admin_model->testiminol_order($order);
			}
			unset($_POST);
		}
	}
	function testiminol_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$data['testiminols'] = $this->admin_model->testiminol_list($data);
		$this->admin_lib->template('testiminol_list',$data);
	}
	
	function upload(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = array();
			$data['file'] = '';
			if( ! empty($_FILES['file']['name'])){
				$config = array();
				$config['file_name'] = $this->config->item('filename').now().$_FILES['file']['name'];
				$config['upload_path'] = 'uploads/files';
				$config['allowed_types'] = '*';
				$config['max_size']	= 0;
				$config['remove_spaces'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('file')){
					echo $this->upload->display_errors();
				} else {
					$pic_data = $this->upload->data();
					$data['file']=base_url().'uploads/files/'.$pic_data['file_name'];
					$data['date'] = date('Y-m-d H-i-s');
					$this->admin_model->file_add(array(
					'id'=>'',
					'file'=>$data['file'],
					'date'=>$data['date']
					));
					echo $data['file'];
				}
				delete_files('application/cache');
				exit();
			}
		}
	}
	function words($type=0,$id=0)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = array();
			$action = "Үг устгагдлаа";
			if($type==0){
				$data['w_0'] = $this->input->post('w_0');
				// $data['w_1'] = $this->input->post('w_1');
				// $data['w_2'] = $this->input->post('w_2');
				// $data['w_3'] = $this->input->post('w_3');
				// $data['w_4'] = $this->input->post('w_4');
				$data['desc'] = $this->input->post('desc');
				$this->admin_model->word_add($data);
				$action = "Шинэ үг нэмэлээ";
			}
			else if($type==1) {
				$data['id'] = $id;
				$data['w_0'] = $this->input->post('w_0',false);
				// $data['w_1'] = $this->input->post('w_1',false);
				// $data['w_2'] = $this->input->post('w_2',false);
				// $data['w_3'] = $this->input->post('w_3',false);
				// $data['w_4'] = $this->input->post('w_4',false);
				$data['desc'] = $this->input->post('desc');
				$this->admin_model->word_edit($data);
				$action = "Үг засагдлаа";
			}
			else if ($type==2){
				$this->admin_model->word_delete($id);
			}
			else {
				redirect('admin/words','refresh');
			}
			$action = array(
			'user_id' => $this->config->item('user_id'),
			'user_name' => $this->config->item('user_name'),
			'icon' => 'fa fa-trash',
			'action' => $action,
			'link' => base_url('admin/words'),
			'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			redirect('admin/words','refresh');
		}
		else {
			$data = array();
			$data['words'] = $this->admin_model->words();
			$this->admin_lib->template('words',$data);
		}
	}
	/*--- news ---*/
	function menu_add(){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['subid'] = 0+$this->input->post('subid');
			$data['color'] = $this->input->post('color');
			$data['title_0'] = $this->input->post('title_0');
			$data['title_1'] = $this->input->post('title_1');		
			$data['description_0'] = $this->input->post('description_0');
			$data['description_1'] = $this->input->post('description_1');
			$data['created'] = $time;
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$id = $this->admin_model->menu_add($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээний ангилал нэмэгдлээ',
						'link' => base_url().'admin/menu_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list','refresh');
		}
		else {
			$data['menus'] = $this->get_menus(0);
			$this->admin_lib->template('menu_add',$data);
		}
	}
	function menu_edit($id=0){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['id'] = $id;
			$data['subid'] = 0+$this->input->post('subid');

			$data['title_0'] = $this->input->post('title_0');
			$data['title_1'] = $this->input->post('title_1');		
			$data['description_0'] = $this->input->post('description_0');
			$data['description_1'] = $this->input->post('description_1');
			$data['color'] = $this->input->post('color');
	
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$this->admin_model->menu_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-pencil',
						'action' => 'Мэдээний ангилал засагдлаа',
						'link' => base_url().'admin/menu_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list','refresh');
		}
		else {
			$data['menu'] = $this->admin_model->get_menu($id);
			$data['menus'] = $this->get_menus(0,$data['menu']['id'],$data['menu']['subid']);
			$this->admin_lib->template('menu_edit',$data);
		}
	}
	function menu_delete($id = 0){
		$data = $this->admin_model->get_menu($id);
		$this->admin_model->menu_delete($id);
		$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-trash',
						'action' => 'Мэдээний ангилал устгагдлаа: '.$data['title'],
						'link' => '#',
						'date' => date('Y-m-d H-i-s'));
		$this->admin_model->action($action);
		delete_files('application/cache');
		redirect('/admin/menu_list');
	}
	function menu_list(){
		$data = array();
		$data['menus'] = $this->admin_model->menu_list();
		$this->admin_lib->template('menu_list');
	}
	function parseJsonArray($jsonArray, $parentID = 0){
	  $return = array();
	  foreach ($jsonArray as $subArray) {
		 $returnSubSubArray = array();
		 if (isset($subArray['children'])) {
		   $returnSubSubArray = $this->parseJsonArray($subArray['children'], $subArray['id']);
		 }
		 $return[] = array('id' => $subArray['id'], 'subid' => $parentID);
		 $return = array_merge($return, $returnSubSubArray);
	  }
	  return $return;
	}
	function menu_order(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$menu0 = $this->input->post('menu0');
		$menu0 = json_decode($menu0, true, 64);
		$menu00 = $this->parseJsonArray($menu0);
		$this->admin_model->menu_update($menu00);
		unset($_POST['menu_order']);
		delete_files('application/cache');
		}
	}
	function get_menus($id=0,$current = 0,$select = 0,$count=0){
		$this->db->where('subid',$id);
		$this->db->order_by('order','asc');
		$result = $this->db->get('menu')->result_array();
		$list =  "";
		if($count==0){	$list .=  "<option value=\"0\">Байхгүй</option>";	}
		foreach($result as $row) {
			if($row['id']!==$current){
			$list .= "<option value=\"{$row['id']}\" ".(($row['id']==$select)?"selected=\"selected\"":"").">".str_repeat(" - ",$count).$row['title_0']."</option>";
			}
			$list .= $this->get_menus($row['id'],$current,$select,$count+2);
		}
		return $list;
		exit();
	}
	
	function post_add(){
		$data = array();
		$data['path'] = 'img/news/';
		$data['width'] = 625;
		$data['height'] = 400;
		$data['height_br'] = 400;
		$data['width_br'] = 300;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']= "";
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  $data['pic'] = $picpath;
				}
			}
			$data['bigpic']=$this->input->post('bigpic_image_url');
			if( ! empty($_FILES['bigpic_image']['name'])){
				$config = array();
				$config['file_name']= $this->config->item('filename').$time;
				$config['upload_path'] = $data['path'];
				$config['allowed_types'] = '*';
				$config['max_size']	= 0;
				$config['max_width']  = 0;
				$config['max_height']  = 0;
				$config['remove_spaces'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('bigpic_image')){
					echo $this->upload->display_errors(); exit();
				} else {
					$pic_data = $this->upload->data();
					$data['bigpic']=$data['path'].$pic_data['file_name'];
					if ($pic_data['image_width']>$data['width_br'] || $pic_data['image_height']>$data['height_br']) {
						$configResize = array(
											'source_image' => $pic_data['full_path'],
											'width' => $data['width_br'],
											'height' => $data['height_br'],
											'maintain_ratio' => TRUE
									);
						  $this->load->library('image_lib',$configResize);
						  $this->image_lib->resize();
						  $this->image_lib->clear();
					 }
				}
			}
			$data['ontsloh'] = $this->input->post('ontsloh');
			$data['order'] = $this->input->post('order');
			$data['mostread'] = $this->input->post('mostread');
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			unset($data['width_br']);
			unset($data['height_br']);
			$id = $this->admin_model->post_add($data);
			$action = array(
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ нэмэгдлээ',
						'link' => base_url().'admin/post_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/post_list','refresh');
		}
		else {
			$data['menus'] = $this->get_menus(0,0,0,1);
			$this->admin_lib->template('post_add',$data);
		}
	}
	function post_edit($id = 0){
		$data = array();
		$data['path'] = 'img/news/';
		$data['width'] = 625;
		$data['height'] = 400;
		$data['height_br'] = 400;
		$data['width_br'] = 300;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']=$this->input->post('cover_image_url');
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  if(read_file($data['pic'])){ unlink($data['pic']);}
				  $data['pic'] = $picpath;
				}
			}
			$data['bigpic'] = $this->input->post('bigpic_image_url');
		
			if (!empty($_FILES['bigpic_image']['name'])){
				$config = array();
				$config['file_name'] = $this->config->item('filename') . $time . $_FILES['bigpic_image']['name'];
				$config['upload_path'] = $data['path'];
				$config['allowed_types'] = '*';
				$config['max_size'] = 0;
				$config['max_width'] = 0;
				$config['max_height'] = 0;
				$config['remove_spaces'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('bigpic_image'))
					{
					echo $this->upload->display_errors();
					exit();
					}
				  else
					{
					$pic_data = $this->upload->data();
					if (read_file($data['bigpic']))
						{
						unlink($data['bigpic']);
						}

					$data['bigpic'] = $data['path'] . $pic_data['file_name'];
					if ($pic_data['image_width'] > $data['width_br'] || $pic_data['image_height'] > $data['height_br'])
						{
						$configResize = array(
							'source_image' => $pic_data['full_path'],
							'width' => $data['width_br'],
							'height' => $data['height_br'],
							'maintain_ratio' => TRUE
						);
						$this->load->library('image_lib', $configResize);
						$this->image_lib->resize();
						$this->image_lib->clear();
						}
					}
			}
			$data['ontsloh'] = $this->input->post('ontsloh');
			$data['order'] = $this->input->post('order');
			$data['mostread'] = $this->input->post('mostread');
			$data['id'] = $id;
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			unset($data['width_br']);
			unset($data['height_br']);
			$id = $this->admin_model->post_edit($data);
			$action = array(
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ засагдлаа',
						'link' => base_url().'admin/post_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/post_list','refresh');
		}
		else {
			$data['post'] = $this->admin_model->get_post($id);
			$data['menus'] = $this->get_menus(0,0,$data['post']['menu']);
			$this->admin_lib->template('post_edit',$data);
		}
	}
	function post_delete($id = 0){
		$data = $this->admin_model->get_post($id);
		$key = $this->admin_model->post_delete($id);
		if($key==0){
			if(read_file($data['pic'])){	unlink($data['pic']);	}
			$pics = explode('*',$data['pics']);
			foreach($pics as $pic){
				if(read_file($pic)){	unlink($pic);	}
			}
			$action = array(
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Мэдээ устгагдлаа: '.$data['title'],
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			delete_files('application/cache');
			redirect('/admin/post_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function post_pics($id = 0){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file = $this->input->post('rmfile');
			$data = $this->admin_model->get_post($id);
			$pics = explode('*',$data['pics']);
			$data['pics'] = "";
			foreach($pics as $pic){
				if(read_file($pic)){
					if($file===$pic){
							unlink($pic);
					} else {
						$data['pics'] .= $pic.'*';
					}
				}
			}
			$this->admin_model->post_edit($data);
			delete_files('application/cache');
		}
	}
	function post_visible($id = 0,$value = 0){
		$filter = array(
					'id' => $id,
					'visible' =>$value,
					'updated' =>now()
					);
		$this->admin_model->post_visible($filter);
		delete_files('application/cache');
		redirect('/admin/post_list');
	}
	function post_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$this->load->library('pagination');
		if($search===""){
			$total = $this->admin_model->count_table('posts');
		}
		else {
			$total = sizeof($this->admin_model->post_list($data));
		}
		$settings = $this->admin_lib->get_settings('post_list',$total,$limit);
        $this->pagination->initialize($settings);		
		$data['page_nav'] = $this->pagination->create_links();
		$data['posts'] = $this->admin_model->post_list($data);
		$this->admin_lib->template('post_list',$data);
	}
	function post_list_mostread($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$this->load->library('pagination');
		if($search===""){
			$total = $this->admin_model->count_table('posts');
		}
		else {
			$total = sizeof($this->admin_model->post_list_mostread($data));
		}
		$settings = $this->admin_lib->get_settings('post_list_mostread',$total,$limit);
        $this->pagination->initialize($settings);		
		$data['page_nav'] = $this->pagination->create_links();
		$data['posts'] = $this->admin_model->post_list_mostread($data);
		$this->admin_lib->template('post_list_mostread',$data);
	}
	/*slider begin*/
	
	function slider_add(){
		$data = array();
		$data['path'] = 'img/slider/';
		$data['width'] = 505;
		$data['height'] = 440;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']= "";
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  /*$configResize = array(
						'source_image' => FCPATH.$picpath,
						'width' => $data['width'],
						'height' => $data['height'],
						'maintain_ratio' => FALSE
					);
				  $this->load->library('image_lib',$configResize);
				  $this->image_lib->resize();
				  $this->image_lib->clear();*/
				  $data['pic'] = $picpath;
				}
			}
			//$data['pics'] = $this->input->post('pics');
			//$data['menu'] = $this->input->post('menu');
			$data['text0'] = $this->input->post('text0');
			$data['text1'] = $this->input->post('text1');
			$data['text2'] = $this->input->post('text2');
			$data['text3'] = $this->input->post('text3');
			/*$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);*/
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->slider_add($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ нэмэгдлээ',
						'link' => base_url().'admin/slider_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/slider_list','refresh');
		}
		else {
			//$data['menus'] = $this->get_menus(0,0,0,1);
			$this->admin_lib->template('slider_add',$data);
		}
	}
	function slider_edit($id = 0){
		$data = array();
		$data['path'] = 'img/slider/';
		$data['width'] = 505;
		$data['height'] = 440;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']=$this->input->post('cover_image_url');
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  if(read_file($data['pic'])){ unlink($data['pic']);}
				  $data['pic'] = $picpath;
				}
			}
			$data['id'] = $id;
			//$data['pics'] = $this->input->post('pics');
			//$data['menu'] = $this->input->post('menu');
			$data['text0'] = $this->input->post('text0');
			$data['text1'] = $this->input->post('text1');
			$data['text2'] = $this->input->post('text2');
			$data['text3'] = $this->input->post('text3');
			/*$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);*/
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->slider_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ засагдлаа',
						'link' => base_url().'admin/slider_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/slider_list','refresh');
		}
		else {
			$data['post'] = $this->admin_model->get_slider($id);
			//$data['menus'] = $this->get_menus(0,0,$data['post']['menu']);
			$this->admin_lib->template('slider_edit',$data);
		}
	}
	function slider_delete($id = 0){
		$data = $this->admin_model->get_post($id);
		$key = $this->admin_model->slider_delete($id);
		if($key==0){
			if(read_file($data['pic'])){	unlink($data['pic']);	}
			$pics = explode('*',$data['pics']);
			foreach($pics as $pic){
				if(read_file($pic)){	unlink($pic);	}
			}
			$action = array('id' => '',
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Мэдээ устгагдлаа: '.$data['title'],
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			delete_files('application/cache');
			redirect('/admin/slider_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function slider_pics($id = 0){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file = $this->input->post('rmfile');
			$data = $this->admin_model->get_slider($id);
			$pics = explode('*',$data['pics']);
			$data['pics'] = "";
			foreach($pics as $pic){
				if(read_file($pic)){
					if($file===$pic){
							unlink($pic);
					} else {
						$data['pics'] .= $pic.'*';
					}
				}
			}
			$this->admin_model->slider_edit($data);
			delete_files('application/cache');
		}
	}
	function slider_visible($id = 0,$value = 0){
		$filter = array(
					'id' => $id,
					'visible' =>$value,
					'updated' =>now()
					);
		$this->admin_model->slider_visible($filter);
		delete_files('application/cache');
		redirect('/admin/slider_list');
	}
	function slider_order(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$order = $this->input->post('order');
			if( ! empty($order)){
				$this->admin_model->slider_order($order);
			}
			unset($_POST);
			delete_files('application/cache');
		}
	}
	function slider_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$this->load->library('pagination');
		if($search===""){
			$total = $this->admin_model->count_table('sliders');
		}
		else {
			$total = sizeof($this->admin_model->slider_list($data));
		}
		$settings = $this->admin_lib->get_settings('slider_list',$total,$limit);
        $this->pagination->initialize($settings);		
		$data['page_nav'] = $this->pagination->create_links();
		$data['posts'] = $this->admin_model->slider_list($data);
		$this->admin_lib->template('slider_list',$data);
	}
	
	/*slider end*/
	
	/*project add begin*/
	
	function menu_add1(){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['subid'] = 0+$this->input->post('subid');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['created'] = $time;
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$id = $this->admin_model->menu_add1($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээний ангилал нэмэгдлээ',
						'link' => base_url().'admin/menu_edit1/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list1','refresh');
		}
		else {
			$data['menus'] = $this->get_menus1(0);
			$this->admin_lib->template('menu_add1',$data);
		}
	}
	function menu_edit1($id=0){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['id'] = $id;
			$data['subid'] = 0+$this->input->post('subid');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$this->admin_model->menu_edit1($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-pencil',
						'action' => 'Мэдээний ангилал засагдлаа',
						'link' => base_url().'admin/menu_edit1/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list1','refresh');
		}
		else {
			$data['menu'] = $this->admin_model->get_menu1($id);
			$data['menus'] = $this->get_menus1(0,$data['menu']['id'],$data['menu']['subid']);
			$this->admin_lib->template('menu_edit1',$data);
		}
	}
	function menu_delete1($id = 0){
		$data = $this->admin_model->get_menu1($id);
		$this->admin_model->menu_delete1($id);
		$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-trash',
						'action' => 'Мэдээний ангилал устгагдлаа: '.$data['title'],
						'link' => '#',
						'date' => date('Y-m-d H-i-s'));
		$this->admin_model->action($action);
		delete_files('application/cache');
		redirect('/admin/menu_list1');
	}
	function menu_list1(){
		$data = array();
		$data['menus'] = $this->admin_model->menu_list1();
		$this->admin_lib->template('menu_list1');
	}
	/*function parseJsonArray($jsonArray, $parentID = 0){
	  $return = array();
	  foreach ($jsonArray as $subArray) {
		 $returnSubSubArray = array();
		 if (isset($subArray['children'])) {
		   $returnSubSubArray = $this->parseJsonArray($subArray['children'], $subArray['id']);
		 }
		 $return[] = array('id' => $subArray['id'], 'subid' => $parentID);
		 $return = array_merge($return, $returnSubSubArray);
	  }
	  return $return;
	}*/
	function menu_order1(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$menu0 = $this->input->post('menu0');
		$menu0 = json_decode($menu0, true, 64);
		$menu00 = $this->parseJsonArray($menu0);
		$this->admin_model->menu_update1($menu00);
		unset($_POST['menu_order1']);
		delete_files('application/cache');
		}
	}
	function get_menus1($id=0,$current = 0,$select = 0,$count=0){
		$this->db->where('subid',$id);
		$this->db->order_by('order','asc');
		$result = $this->db->get('menu1')->result_array();
		$list =  "";
		if($count==0){	$list .=  "<option value=\"0\">Байхгүй</option>";	}
		foreach($result as $row) {
			if($row['id']!==$current){
			$list .= "<option value=\"{$row['id']}\" ".(($row['id']==$select)?"selected=\"selected\"":"").">".str_repeat(" - ",$count).$row['title']."</option>";
			}
			$list .= $this->get_menus1($row['id'],$current,$select,$count+2);
		}
		return $list;
		exit();
	}
	function project_add(){
		$data = array();
		$data['path'] = 'img/project/';
		$data['width'] = 505;
		$data['height'] = 440;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']= "";
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  /*$configResize = array(
						'source_image' => FCPATH.$picpath,
						'width' => $data['width'],
						'height' => $data['height'],
						'maintain_ratio' => FALSE
					);
				  $this->load->library('image_lib',$configResize);
				  $this->image_lib->resize();
				  $this->image_lib->clear();*/
				  $data['pic'] = $picpath;
				}
			}
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->project_add($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ нэмэгдлээ',
						'link' => base_url().'admin/project_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/project_list','refresh');
		}
		else {
			$data['menus'] = $this->get_menus1(0,0,0,1);
			$this->admin_lib->template('project_add',$data);
		}
	}
	function project_edit($id = 0){
		$data = array();
		$data['path'] = 'img/project/';
		$data['width'] = 505;
		$data['height'] = 440;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']=$this->input->post('cover_image_url');
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  if(read_file($data['pic'])){ unlink($data['pic']);}
				  $data['pic'] = $picpath;
				}
			}
			$data['id'] = $id;
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->project_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Мэдээ засагдлаа',
						'link' => base_url().'admin/project_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/project_list','refresh');
		}
		else {
			$data['post'] = $this->admin_model->get_post1($id);
			$data['menus'] = $this->get_menus1(0,0,$data['post']['menu']);
			$this->admin_lib->template('project_edit',$data);
		}
	}
	function project_delete($id = 0){
		$data = $this->admin_model->get_project($id);
		$key = $this->admin_model->project_delete($id);
		if($key==0){
			if(read_file($data['pic'])){	unlink($data['pic']);	}
			$pics = explode('*',$data['pics']);
			foreach($pics as $pic){
				if(read_file($pic)){	unlink($pic);	}
			}
			$action = array('id' => '',
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Мэдээ устгагдлаа: '.$data['title'],
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			delete_files('application/cache');
			redirect('/admin/project_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function project_pics($id = 0){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file = $this->input->post('rmfile');
			$data = $this->admin_model->get_project($id);
			$pics = explode('*',$data['pics']);
			$data['pics'] = "";
			foreach($pics as $pic){
				if(read_file($pic)){
					if($file===$pic){
							unlink($pic);
					} else {
						$data['pics'] .= $pic.'*';
					}
				}
			}
			$this->admin_model->project_edit($data);
			delete_files('application/cache');
		}
	}
	function project_visible($id = 0,$value = 0){
		$filter = array(
					'id' => $id,
					'visible' =>$value,
					'updated' =>now()
					);
		$this->admin_model->project_visible($filter);
		delete_files('application/cache');
		redirect('/admin/project_list');
	}
	function project_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$this->load->library('pagination');
		if($search===""){
			$total = $this->admin_model->count_table('project');
		}
		else {
			$total = sizeof($this->admin_model->project_list($data));
		}
		$settings = $this->admin_lib->get_settings('project_list',$total,$limit);
        $this->pagination->initialize($settings);		
		$data['page_nav'] = $this->pagination->create_links();
		$data['posts'] = $this->admin_model->project_list($data);
		$this->admin_lib->template('project_list',$data);
	}
	
	/*project add end*/
	function banner_add(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = array();
			$time = now();
			$data['order'] = 0;
			$data['content'] = "".$this->input->post('content',false);
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			$id = $this->admin_model->banner_add($data);
			$action = array(
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Сурталчилгаа нэмэгдлээ',
						'link' => base_url().'admin/post_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/banner_list','refresh');
		}
		else {
			$data = array();
			$this->admin_lib->template('banner_add',$data);
		}
	}
	function banner_edit($id = 0){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = array();
			$time = now();
			$data['id'] = $id;
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			$id = $this->admin_model->banner_edit($data);
			$action = array(
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Сурталчилгаа засагдлаа',
						'link' => base_url().'admin/banner_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/banner_list','refresh');
		}
		else {
			$data = array();
			$data['banner'] = $this->admin_model->get_banner($id);
			$this->admin_lib->template('banner_edit',$data);
		}
	}
	function banner_delete($id = 0){
		$data = $this->admin_model->get_banner($id);
		$key = $this->admin_model->banner_delete($id);
		if($key==0){
			$action = array(
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Сурталчилгаа устгагдлаа',
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			delete_files('application/cache');
			redirect('/admin/banner_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function banner_order(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$order = $this->input->post('order');
			if( ! empty($order)){
				$this->admin_model->banner_order($order);
			}
			unset($_POST);
			delete_files('application/cache');
		}
	}
	function banner_visible($id = 0,$value = 0){
		$filter = array(
		'id' => $id,
		'visible' =>$value,
		'updated' =>now()
		);
		$this->admin_model->banner_visible($filter);
		delete_files('application/cache');
		redirect('/admin/banner_list');
	}
	function banner_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$data['banners'] = $this->admin_model->banner_list($data);
		$this->admin_lib->template('banner_list',$data);
	}
	
	
	/*--- tours ---*/
	function menu_add3(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = array();
			$time = now();
			$data['subid'] = 0+$this->input->post('subid');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['created'] = $time;
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$id = $this->admin_model->menu_add3($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Аялалын ангилал нэмэгдлээ',
						'link' => base_url().'admin/menu_edit3/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list3','refresh');
		}
		else {
			$data = array();
			$data['menus'] = $this->get_menus3(0);
			$this->admin_lib->template('menu_add3',$data);
		}
	}
	function menu_edit3($id=0){
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['id'] = $id;
			$data['subid'] = 0+$this->input->post('subid');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['updated'] = $time;
			$data['visible'] = 0+$this->input->post('visible');
			$this->admin_model->menu_edit3($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-pencil',
						'action' => 'Аялалын ангилал засагдлаа',
						'link' => base_url().'admin/menu_edit3/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/menu_list3','refresh');
		}
		else {
			$data['menu'] = $this->admin_model->get_menu3($id);
			$data['menus'] = $this->get_menus3(0,$data['menu']['id'],$data['menu']['subid']);
			$this->admin_lib->template('menu_edit3',$data);
		}
	}
	function menu_delete3($id = 0){
		$data = $this->admin_model->get_menu3($id);
		$this->admin_model->menu_delete3($id);
		$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-trash',
						'action' => 'Аялалын ангилал устгагдлаа: '.$data['title'],
						'link' => '#',
						'date' => date('Y-m-d H-i-s'));
		$this->admin_model->action($action);
		delete_files('application/cache');
		redirect('/admin/menu_list3');
	}
	function menu_list3(){
		$data = array();
		$data['menus'] = $this->admin_model->menu_list3();
		$this->admin_lib->template('menu_list3');
	}
	function menu_order3(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$menu0 = $this->input->post('menu0');
		$menu0 = json_decode($menu0, true, 64);
		$menu00 = $this->parseJsonArray($menu0);
		$this->admin_model->menu_update3($menu00);
		unset($_POST['menu_order']);
		delete_files('application/cache');
		}
	}
	function get_menus3($id=0,$current = 0,$select = 0,$count=0){
		$this->db->where('subid',$id);
		$this->db->order_by('order','asc');
		$result = $this->db->get('menu3')->result_array();
		$list =  "";
		if($count==0){	$list .=  "<option value=\"0\">Байхгүй</option>";	}
		foreach($result as $row) {
			if($row['id']!==$current){
			$list .= "<option value=\"{$row['id']}\" ".(($row['id']==$select)?"selected=\"selected\"":"").">".str_repeat(" - ",$count).$row['title']."</option>";
			}
			$list .= $this->get_menus3($row['id'],$current,$select,$count+2);
		}
		return $list;
		exit();
	}
	
	function tour_add(){
		$data = array();
		$data['width'] = 415;
		$data['height'] = 360;
		$data['path'] = 'img/tours/';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']= "";
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  $data['pic'] = $picpath;
				}
			}
			$data['route'] = "".$this->input->post('route');
			$data['order'] = 0;
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 1;
			$data['created'] = $time;
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->tour_add($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Аялал нэмэгдлээ',
						'link' => base_url().'admin/tour_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/tour_list','refresh');
		}
		else {
			$data['menus'] = $this->get_menus3(0,0,0,1);
			$this->admin_lib->template('tour_add',$data);
		}
	}
	function tour_edit($id = 0){
		$data = array();
		$data['path'] = 'img/tours/';
		$data['width'] = 415;
		$data['height'] = 360;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$time = now();
			$data['pic']=$this->input->post('cover_image_url');
			$pic = $this->input->post('cover_image',false);
			if($pic !== "" && $pic !=null){
				$pic1 = $pic;
				$pos  = strpos($pic, ';');
				$type = explode(':', substr($pic1, 0, $pos))[1];
				$ext = explode('/',$type);
				list($type, $pic) = explode(';', $pic);
				list(, $pic)      = explode(',', $pic);
				$pic = base64_decode($pic);
				$filename = $this->config->item('filename').now().'.'.$ext[1];
				file_put_contents($data['path'].$filename, $pic);
				$picpath = $data['path'].$filename;
				if(read_file($picpath)){
				  if(read_file($data['pic'])){ unlink($data['pic']);}
				  $data['pic'] = $picpath;
				}
			}
			$data['id'] = $id;
			$data['order'] = 0+$this->input->post('order');
			$data['route'] = "".$this->input->post('route');
			$data['pics'] = $this->input->post('pics');
			$data['menu'] = $this->input->post('menu');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['content'] = $this->input->post('content',false);
			$data['visible'] = 0+$this->input->post('visible');
			$data['updated'] = $time;
			unset($data['path']);
			unset($data['width']);
			unset($data['height']);
			$id = $this->admin_model->tour_edit($data);
			$action = array('id' => '',
						'user_id' => $this->config->item('user_id'),
						'user_name' => $this->config->item('user_name'),
						'icon' => 'fa fa-plus',
						'action' => 'Аялал засагдлаа',
						'link' => base_url().'admin/tour_edit/'.$id,
						'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			unset($_POST);
			delete_files('application/cache');
			redirect('admin/tour_list','refresh');
		}
		else {
			$data['post'] = $this->admin_model->get_tour($id);
			$data['menus'] = $this->get_menus3(0,0,$data['post']['menu']);
			$this->admin_lib->template('tour_edit',$data);
		}
	}
	function tour_delete($id = 0){
		$data = $this->admin_model->get_tour($id);
		$key = $this->admin_model->tour_delete($id);
		if($key==0){
			if(read_file($data['pic'])){	unlink($data['pic']);	}
			$action = array('id' => '',
							'user_id' => $this->config->item('user_id'),
							'user_name' => $this->config->item('user_name'),
							'icon' => 'fa fa-trash',
							'action' => 'Аялал устгагдлаа: '.$data['title'],
							'link' => '#',
							'date' => date('Y-m-d H-i-s'));
			$this->admin_model->action($action);
			delete_files('application/cache');
			redirect('/admin/tour_list');
		}
		else if($key==1451) {	echo "Энэхүү ангилалд хамааралтай мэдээлэл байгаа тул устгах боломжгүй байна!";	}
		else {	echo "Үйлдэл гүйцэтгэх  явцад алдаа гарлаа!";	}
		exit();
	}
	function tour_pics($id = 0){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file = $this->input->post('rmfile');
			$data = $this->admin_model->get_tour($id);
			$pics = explode('*',$data['pics']);
			$data['pics'] = "";
			foreach($pics as $pic){
				if(read_file($pic)){
					if($file===$pic){
							unlink($pic);
					} else {
						$data['pics'] .= $pic.'*';
					}
				}
			}
			$this->admin_model->tour_edit($data);
			delete_files('application/cache');
		}
	}
	function tour_visible($id = 0,$value = 0){
		$filter = array(
		'id' => $id,
		'visible' =>$value,
		'updated' =>now()
		);
		$this->admin_model->tour_visible($filter);
		delete_files('application/cache');
		redirect('/admin/tour_list');
	}
	function tour_order(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$order = $this->input->post('order');
			if( ! empty($order)){
				$this->admin_model->tour_order($order);
			}
			unset($_POST);
			delete_files('application/cache');
		}
	}
	function tour_list($start=0){
		$limit = 15;
		$search = "";
		$action = "";
		if(isset($_GET['search'])){	$this->session->set_userdata('search',$this->input->get('search')); }
		if(isset($_SESSION['search'])){	$search = $this->session->userdata('search'); }
		if(isset($_GET['limit'])){	$this->session->set_userdata('limit',$this->input->get('limit')); }
		if(isset($_SESSION['limit'])){	$limit = $this->session->userdata('limit'); }
		$data = array();
		$data['start'] = $start;
		$data['limit'] = $limit;
		$data['search'] = $search;
		$this->load->library('pagination');
		if($search===""){
			$total = $this->admin_model->count_table('tours');
		}
		else {
			$total = sizeof($this->admin_model->tour_list($data));
		}
		$settings = $this->admin_lib->get_settings('tour_list',$total,$limit);
        $this->pagination->initialize($settings);		
		$data['page_nav'] = $this->pagination->create_links();
		$data['posts'] = $this->admin_model->tour_list($data);
		$this->admin_lib->template('tour_list',$data);
	}
	
	
	
	public function files($limit = 5){
		$fileList = $this->admin_model->get_files(5);
		foreach($fileList as $file){
			echo "
			<div class=\"form-group has-success\">
				  <div class=\"bs-component\">
					<span class=\"append-icon right\">
					  <i class=\"fa fa-link\"></i>
					</span>
					<input kl_virtual_keyboard_secure_input=\"on\" value=\"".$file['file']."\" id=\"inputSmall\" class=\"form-control input-sm\" placeholder=\"\" type=\"text\">
				  </div>
			  </div>";
		}
	}
	private function upload_files($path, $title, $files)
	{
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => '*',
            'overwrite'     => TRUE,                       
			'remove_spaces' => TRUE
        );		
        $this->load->library('upload', $config);
        $images = array();
        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];
            $fileName = $title .'_'. $image;
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('images[]')) {
                $pic_data = $this->upload->data();
				$data['height'] = 2048;
				$data['width'] = 2048;
				if ($pic_data['image_width']>$data['width'] || $pic_data['image_height']>$data['height']) {
					$configResize = array(
										'source_image' => $pic_data['full_path'],
										'width' => $data['width'],
										'height' => $data['height'],
										'maintain_ratio' => TRUE
								);
					  $this->load->library('image_lib',$configResize);
					  $this->image_lib->resize();
					  $this->image_lib->clear();
				 }
			$images[] = $path.'/'.$pic_data['file_name'];
            }
        }
        return $images;
    }
}