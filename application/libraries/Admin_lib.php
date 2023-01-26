<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_lib {
	function template($content='home',$data=array())
	{
		$CI =& get_instance();
		$CI->load->view('admin/header',$data);
		$CI->load->view('admin/'.$content,$data);		
		$CI->load->view('admin/footer',$data);
	}
	
	public function get_settings($id,$total,$limit)
    {
        $config = array();
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['first_link'] = '<i class="fa fa-angle-double-left"></i> Эхний';
        $config['last_link'] = 'Сүүлийн <i class="fa fa-angle-double-right"></i>';
        $config['next_link'] = 'Дараагийн <i class="fa fa-angle-right"></i>';
        $config['prev_link'] = '<i class="fa fa-angle-left"></i> Өмнөх';
        
        $config['full_tag_open'] = '<ul class="pagination pull-right">';     
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close']= '</li>';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';        
        switch($id)
        {
			case 'slider_list':
				$config['base_url'] = base_url().'admin/slider_list/';
				$config['uri_segment'] = 3;
				$config['num_links'] = 2;                    
				return $config;
				break;
				
			case 'project_list':
				$config['base_url'] = base_url().'admin/place_list2/';
				$config['uri_segment'] = 3;
				$config['num_links'] = 2;                    
				return $config;
				break;
				
            case 'post_list':
                $config['base_url'] = base_url().'admin/post_list/';
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;
			
			case 'post_list_mostread':
                $config['base_url'] = base_url().'admin/post_list_mostread/';
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;
				
			case 'tour_list':
                $config['base_url'] = base_url().'admin/tour_list/';
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;
		}		
    }
	
}