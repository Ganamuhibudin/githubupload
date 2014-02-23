<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends MY_Model {

	function __construct()
	{
		parent::__construct();
		parent::set_model("kategori_buku", "idkategori", null, array('kategori'));		
	}

	public function kategori_options($options = array())
	{
		$query = $this->_get();		

		foreach ($query->result() as $row) {
			$options[$row->idkategori] = $row->kategori;
		}

		return $options;
	}
    

}