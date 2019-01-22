<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('p_error404'))
{
	function p_error($code,$message)
	{
		$ci=& get_instance();
		$ci->session->set_flashdata('p_error_message',$message);
		if ($code == 403) {
			redirect('Errorpage/error403','refresh');
		}
	}  
}