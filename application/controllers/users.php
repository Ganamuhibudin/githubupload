<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::set_module(
			array("users_model", "groups_model"), "Users", 0,
			array(
				'add' => array(
					'aktif' => array ('Aktif', 'trim|required'),
					'username' => array('Username', 'trim|required|is_unique[users.username]'),
					'nama' => array('Name', 'trim|required'),
					'email' => array('Email', 'trim|required|valid_email'),
					'pass' => array('Pass', 'trim|required|md5'),
					'password_confirm' => array('Pass', 'trim|required|matches[pass]|md5')
				),
				'edit' => array(
					'aktif' => array ('Aktif', 'trim|required'),
					'username' => array('Username', 'trim|required'),
					'nama' => array('Name', 'trim|required'),
					'email' => array('Email', 'trim|required|valid_email'),
					'pass' => array('Pass', 'trim|required|md5'),
					'password_confirm' => array('Pass', 'trim|required|matches[pass]|md5')
				)			
			)
		);
		parent::set_data('group_options', $this->groups_model->group_options());
	}

}