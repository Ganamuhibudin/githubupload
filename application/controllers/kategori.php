<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::set_module(
			array("buku_model", "kategori_model"), "Buku", 0,
			array(
				'add' => array(
					'aktif'      => array('Aktif', 'trim|required'),
					'idkategori' => array('ID Kategori', 'trim|required'),
					'judul'      => array('Judul', 'trim|required'),
					'pengarang'  => array('Pengarang', 'trim|required'),
					'penerbit'   => array('Penerbit', 'trim|required'),
					'deskripsi'  => array('Deskripsi', 'trim|required')
				),
				'edit' => array(
					'aktif' => array ('Aktif', 'trim|required'),
					'username' => array('Username', 'trim|required'),
					'nama' => array('Name', 'trim|required'),
					'email' => array('Email', 'trim|required|valid_email'),
					'password' => array('Password', 'trim|required|sha1'),
					'password_confirm' => array('Password', 'trim|required|matches[password]|sha1')
				)			
			)
		);
		parent::set_data('kategori_buku', $this->kategori_model->kategori_options());
        
	}

}