<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends MY_Model {

	function __construct()
	{
		parent::__construct();
		parent::set_model("pengguna", "id", null, array('nama', 'username', 'email'));		
	}

}