<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends MY_Model {

	function __construct()
	{
		parent::__construct();
		parent::set_model("member","id", null, array('username', 'email'));		
	}

}