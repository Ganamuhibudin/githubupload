<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::set_module(
			array("buku_model", "kategori_model"), "Buku", 0,
			array(
				'add' => array(
					'idkategori' => array('ID Kategori', 'trim|required'),
					'judul'      => array('Judul', 'trim|required'),
					'pengarang'  => array('Pengarang', 'trim|required'),
					'penerbit'   => array('Penerbit', 'trim|required'),
					'deskripsi'  => array('Deskripsi', 'trim|required')
				),
				'edit' => array(
					'idkategori' => array('ID Kategori', 'trim|required'),
					'judul'      => array('Judul', 'trim|required'),
					'pengarang'  => array('Pengarang', 'trim|required'),
					'penerbit'   => array('Penerbit', 'trim|required'),
					'deskripsi'  => array('Deskripsi', 'trim|required')
				)			
			)
		);
		parent::set_data('kategori_buku', $this->kategori_model->kategori_options());
        
	}

}