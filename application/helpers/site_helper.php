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
		$data['MENU'] = menu($s);
		$CI->parser->parse('site', $data);
	}
	function menu($s) {
		$menu ='<ul>';
		$menu .= '<li><a href="#home" class="nav-button" >SOS</a><span></span></li>';
		$menu .= '<li><a href="#rescatistas" class="nav-button">Rescatistas</a><span></span></li>';
		$menu .= '<li><a href="#servicios" class="nav-button">Servicios</a><span></span></li>';
		$menu .= '<li><a href="#" class="nav-button">Marcas Salvadas</a><span></span></li>';
		$menu .= '<li><a href="#" class="nav-button">Llamada de Auxilio</a><span></span></li>';
		$menu .= '</ul>';
		return $menu;
	}
}