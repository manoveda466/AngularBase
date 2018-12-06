<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prefs extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	/***************** GET CITY DATA ********************************/

	public function getCityData($city_id='')
	{
		$this->db->select('ci.*, s.country_id');
		$this->db->from('cities as ci');
		$this->db->join('states as s', 's.state_id = ci.state_id', 'left');
		if($city_id)
		{
			$this->db->where('ci.city_id', $city_id);
		}
		$result  = $this->db->get()->row();
		return json_encode($result);
	}
}
?>