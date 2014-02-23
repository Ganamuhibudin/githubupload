<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::set_module(
			array("member_model", "groups_model"), "Users", 0,
			array(
				'add' => array(
					'aktif' => array ('Aktif', 'trim|required'),
					'username' => array('Username', 'trim|required'),
					'alamat' => array('Alamat', 'trim|required'),
					'notelp' => array('Notelp', 'trim|required'),
					'email' => array('Email', 'trim|required|valid_email')
				),
				'edit' => array(
					'aktif' => array ('Aktif', 'trim|required'),
					'username' => array('Usernam', 'trim|required'),
					'alamat' => array('Alamat', 'trim|required'),
					'notelp' => array('Notelp', 'trim|required'),
					'email' => array('Email', 'trim|required|valid_email')
				)			
			)
            
		);
		parent::set_data('group_options', $this->groups_model->group_options());
	}

}