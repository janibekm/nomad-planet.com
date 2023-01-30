<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_lib {
	function template($content='home',$data=array())
	{
		$CI =& get_instance();
		// $CI->load->view('header',$data);
		$CI->load->view(''.$content,$data);
		// $CI->load->view('footer',$data);
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
            case 'post_list':
                $config['base_url'] = base_url().'l/';
                $config['uri_segment'] = 2;
                $config['num_links'] = 2;
                return $config;
                break;
				
			case 'page_list':
                $config['base_url'] = base_url().'administration/page_list/';
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;
            case 'product_list':
				$config['base_url'] = base_url().'administration/product_list/';
				$config['uri_segment'] = 3;
				$config['num_links'] = 2;                    
				return $config;
				break;
		}
			
    }
    public function get_settings1($id,$case,$total,$limit)
    {
        $config = array();
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
        $config['last_link'] = ' <i class="fa fa-angle-double-right"></i>';
        $config['next_link'] = ' <i class="fa fa-angle-right"></i>';
        $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
        
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
        switch($case)
        {            
            case 'l':
                $config['base_url'] = base_url().'l/'.$id."/";
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;    
			case 'news1':
                $config['base_url'] = base_url().'news/';
                $config['uri_segment'] = 2;
                $config['num_links'] = 2;
                return $config;
                break;  
			case 'tourss':
                $config['base_url'] = base_url().'tourss/';
                $config['uri_segment'] = 3;
                $config['num_links'] = 2;
                return $config;
                break;
			case 'at':
                $config['base_url'] = base_url().'at/';
                $config['uri_segment'] = 2;
                $config['num_links'] = 4;
                return $config;
                break;  			
			case 'ev':
                $config['base_url'] = base_url().'ev/';
                $config['uri_segment'] = 2;
                $config['num_links'] = 4;
                return $config;
                break;  
		//  case 'lists':
        //         $config['base_url'] = base_url().'lists/'.$useg."/";
        //         $config['uri_segment'] = 2;
        //         $config['num_links'] = 2;
        //         return $config;
        //         break;
		}
			
    }
	public function get_settings2($id,$total,$limit)
    {	
        $config = array();
		$config['display_pages'] = FALSE;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
        $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
        
        $config['full_tag_open'] = '<div class="btn-group">';     
        $config['full_tag_close'] = '</div>';
        $config['prev_tag_open'] = ' <span class="btn btn-default light">';
        $config['prev_tag_close'] = '</span>';
        $config['next_tag_open'] = '<span class="btn btn-default light">';
        $config['next_tag_close'] = '</span>';       
        switch($id)
        {            
			case 'inbox':
                    $config['base_url'] = base_url().'administration/inbox/';
                    $config['uri_segment'] = 3;
                    $config['num_links'] = 2;                    
                    return $config;
                    break;
			case 'comments':
                    $config['base_url'] = base_url().'administration/comments/';
                    $config['uri_segment'] = 3;
                    $config['num_links'] = 2;                    
                    return $config;
                    break;
		}
			
    }

	
}