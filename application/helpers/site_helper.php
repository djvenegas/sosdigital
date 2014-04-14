<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('site'))
{
	function view_section($s='', $c='', $data_objects)
	{
		$section = ($c!=''?$c.'/'.$s:$s);
		$CI = get_instance();
		$data['DIR'] = base_url();
		$data['META'] = $CI->site_model->getdescripcion();
		$data['TITLE'] = $CI->site_model->gettitutlo($s);
		$data['MAIN_TITLE'] = $CI->site_model->gettituloprincipal();
		$data['SITE'] = $CI->site_model->getsitename();
		$data['IMAGE_SITE'] = $CI->site_model->getimagesite();
		$data['KEYWORDS'] = $CI->site_model->getkeywords();
		$data['FAVICON'] = $CI->site_model->getfavicon();
		$data['ANALYTICS'] = $CI->site_model->getanalytics();
		$data['CONTENT'] = $CI->parser->parse($section, $data_objects, true);
		$CI->parser->parse('site', $data);
	}
}