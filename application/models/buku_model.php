<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku_model extends MY_Model {

	function __construct()
	{
		parent::__construct();
		parent::set_model("buku", "idbuku", null, array( 'judul','pengarang','penerbit'));		
	}

}