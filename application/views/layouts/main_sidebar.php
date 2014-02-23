<div class="well sidebar-nav">
	<ul class="nav nav-list">
	<?php 
    if($this->session->userdata('id')== '1'){
        //menu admin
		$menus = array(
			'<h3>Menu</h3>' => array(
                'users' => 'Menejemen Pengguna ',
                'laporan' => 'Laporan '
                
                
			)			
		);
        }else{
            //menu operator
          $menus = array(
			'<h3>Menu</h3>' => array(
                'members' => 'Menejemen Member ',
                'peminjaman' => 'Peminjaman',
                'pengembalian' => 'Pengembalian',
                'buku' => 'Daftar Buku',
                'kategori' => 'Kategori Buku'
                
                
			)			
		);  
        }
        
		foreach ($menus as $nav => $menu) {
			echo "<li class='nav-header'>{$nav}</li>";
	
			foreach ($menu as $link => $label) {
				$active = $link == $this->uri->segment(1) ? "class='active'" : "";				
				echo "<li {$active}>", anchor($link, $label), "</li>";	
			}						
		}
	?>
	</ul>
</div><!--/.well -->
