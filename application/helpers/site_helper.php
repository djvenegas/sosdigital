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
		$menu .= '<li class="'.($s=='inicio'? ' activate':'').'"><a href="'.base_url().'" >SOS</a><span></span></li>';
		$menu .= '<li><a href="'.base_url().'rescatistas" class="'.($s=='rescatistas'? ' activate':'').'">Rescatistas</a><span></span></li>';
		$menu .= '<li><a href="'.base_url().'servicios" class="'.($s=='servicios'? ' activate':'').'">Servicios</a><span></span></li>';
		$menu .= '<li><a href="'.base_url().'marcas" class="'.($s=='marcas'? ' activate':'').'">Marcas Salvadas</a><span></span></li>';
		$menu .= '<li><a href="'.base_url().'contacto" class="'.($s=='contacto'? ' activate':'').'">Llamada de Auxilio</a><span></span></li>';
		$menu .= '</ul>';
		return $menu;
	}
}