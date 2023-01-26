<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addplace extends CI_Controller {
	function __construct(){		parent::__construct();	$this->config->set_item('filename','ubtour_');}
	function index(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$expiration = time() - 7200;
			$this->db->where('captcha_time < ', $expiration)->delete('captcha');
			$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
			$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
			$query = $this->db->query($sql, $binds);
			$row = $query->row();
			if ($row->count > 0){
				$path = 'img/places/';
				$time = now();
				$data = array();
				$data['pic']="";
				if( ! empty($_FILES['cover_image']['name'])){
					$config = array();
					$config['file_name']= $this->config->item('filename').$time;
					$config['upload_path'] = $path;
					$config['allowed_types'] = '*';
					$config['max_size']	= 0;
					$config['max_width']  = 0;
					$config['max_height']  = 0;
					$config['remove_spaces'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('cover_image')){
						echo $this->upload->display_errors(); exit();
					} else {
						$pic_data = $this->upload->data();
						$data['pic']=$path.$pic_data['file_name'];
						if ($pic_data['image_width']>280 || $pic_data['image_height']>200) {
							$configResize = array(
								'source_image' => $pic_data['full_path'],
								'width' => 280,
								'height' => 200,
								'maintain_ratio' => TRUE
							);
						  $this->load->library('image_lib',$configResize);
						  $this->image_lib->resize();
						  $this->image_lib->clear();
						 }
					}
				}
				$data['pics']="";
				if( ! empty($_FILES['cover_image1']['name'])){
					$config = array();
					$config['file_name']= $this->config->item('filename').$time;
					$config['upload_path'] = $path;
					$config['allowed_types'] = '*';
					$config['max_size']	= 0;
					$config['max_width']  = 0;
					$config['max_height']  = 0;
					$config['remove_spaces'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('cover_image1')){
						echo $this->upload->display_errors(); exit();
					} else {
						$pic_data = $this->upload->data();
						$data['pics']=$path.$pic_data['file_name'].'*';
						if ($pic_data['image_width']>500 || $pic_data['image_height']>250) {
							$configResize = array(
								'source_image' => $pic_data['full_path'],
								'width' => 500,
								'height' => 250,
								'maintain_ratio' => TRUE
							);
						  $this->load->library('image_lib',$configResize);
						  $this->image_lib->resize();
						  $this->image_lib->clear();
						 }
					}
				}
				if( ! empty($_FILES['cover_image2']['name'])){
					$config = array();
					$config['file_name']= $this->config->item('filename').$time;
					$config['upload_path'] = $path;
					$config['allowed_types'] = '*';
					$config['max_size']	= 0;
					$config['max_width']  = 0;
					$config['max_height']  = 0;
					$config['remove_spaces'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('cover_image2')){
						echo $this->upload->display_errors(); exit();
					} else {
						$pic_data = $this->upload->data();
						$data['pics'].=$path.$pic_data['file_name'].'*';
						if ($pic_data['image_width']>500 || $pic_data['image_height']>250) {
							$configResize = array(
								'source_image' => $pic_data['full_path'],
								'width' => 500,
								'height' => 250,
								'maintain_ratio' => TRUE
							);
						  $this->load->library('image_lib',$configResize);
						  $this->image_lib->resize();
						  $this->image_lib->clear();
						 }
					}
				}
				$data['menu'] = $this->input->post('menu');
				$data['order'] = 0;
				$data['lat'] = $this->input->post('lat');
				$data['lng'] = $this->input->post('lng');
				$data['address'] = $this->input->post('address');			
				$data['title'] = $this->input->post('title');
				$data['timetable'] = $this->input->post('timetable');
				$data['address_more'] = $this->input->post('address_more');
				$data['phone'] = $this->input->post('phone');
				$data['fax'] = $this->input->post('fax');
				$data['web'] = $this->input->post('web');
				$data['email'] = $this->input->post('email');
				$data['content'] = $this->input->post('content');
				$data['type'] = $this->input->post('type');
				$data['ip'] = $this->input->ip_address();
				$data['created'] = $time;
				$data['updated'] = $time;
				$data['atype'] = $this->input->post('atype');
				$data['stars'] = 0+$this->input->post('stars');
				$data['facility'] = json_encode($this->input->post('facility'));
				$data['rfacility'] = json_encode($this->input->post('rfacility'));
				$id = $this->main_model->place_add2($data);
				$ref = $this->input->post('ref');
				unset($_POST);
				redirect($ref,'refresh');
			} else {
				$ref = $this->input->post('referror');
				redirect($ref,'refresh');
			}
		} else {
			$this->output->set_status_header('400');	echo "Bad request"; exit();
		}
	}
	function captcha(){
		$this->load->helper('captcha');
		$this->load->helper('string');
		$word = strtoupper(random_string('alpha', 6));
		$vals = array(
        'word'          => $word,
        'img_path'      => './img/captcha/',
        'img_url'       => base_url().'img/captcha/',
        'font_path'     => './fonts/28 Days Later.ttf',
        'img_width'     => '300',
        'img_height'    => 50,
        'expiration'    => 7200,
        'word_length'   => 6,
        'font_size'     => 24,
        'img_id'        => 'captcha',
        'pool'          => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(51, 122, 183)
			)
		);
		$cap = create_captcha($vals);
		$data = array(
        'captcha_time'  => $cap['time'],
        'ip_address'    => $this->input->ip_address(),
        'word'          => $cap['word']
		);
		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);
		$this->output->set_content_type('application/json');
		echo $_GET['callback']."(".json_encode(array('img' => $cap['image'])).")";
		//echo $cap['image']; 
		exit();
	}
	function check($captcha = ""){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$expiration = time() - 7200; // Two hour limit
			$this->db->where('captcha_time < ', $expiration)->delete('captcha');
			$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
			$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
			$query = $this->db->query($sql, $binds);
			$row = $query->row();
			if ($row->count == 0){
				header("Content-type: application/json");
					echo json_encode(array("res"=>0));
				exit();
			}
			else {
				header("Content-type: application/json");
					echo json_encode(array("res"=>1));
				exit();
			}
		} else {
			$this->output->set_status_header('400');	echo "Bad request"; exit();
		}
	}
	
	function menu(){
		$this->output->set_content_type('application/json');
		echo $_GET['callback']."(".json_encode(array('menus' => "".$this->get_menus())).")";
		exit();
	}
	function get_menus($id=0,$count=0){
		$this->db->where('subid',$id);
		$this->db->order_by('order','asc');
		$result = $this->db->get('menu1')->result_array();
		$list =  "";
		if(empty($result) && $count==0){	$list .=  "<option value=\"0\">Байхгүй</option>";	}
		foreach($result as $row) {
			$list .= "<option value=\"{$row['id']}\">".str_repeat(" - ",$count).$row['title']."</option>";
			$list .= $this->get_menus($row['id'],$count+2);
		}
		return $list;
		exit();
	}
}