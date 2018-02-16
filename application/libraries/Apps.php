<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps {
        public function check_session()
        {
			$CI =& get_instance();

        	if (!$CI->session->userdata('status')) {
        		redirect(base_url().'user/session_timeout/');
			}
        }

        public function userInfo() {
		 	$CI =& get_instance();

        	$data['nama'] = $CI->session->userdata('nama');
        	$data['level'] = $CI->session->userdata('level');
        	$data['username'] = $CI->session->userdata('username');

        	return $data;
        }
}