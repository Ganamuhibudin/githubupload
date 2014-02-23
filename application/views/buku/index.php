<table class='table table-bordered table-striped'>       
    <thead>
        <tr>            
            <th style='width:100px;'>Action</th>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penerbit</th>            
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $icon_edit = '<i class="icon-pencil"></i>';
            $icon_delete = '<i class="icon-remove-sign icon-white"></i>';
            $active_status = '<span class="label label-success">Active</span>';
            $inactive_status = '<span class="label label-important">Inactive</span>';
        ?>

        <?php foreach ($query->result() as $row) : ?>
        <tr>
            <td>
                <?php echo anchor($class_name . "/edit/" . $row->idbuku, $icon_edit, array('title' => 'Edit user', 'class' => 'btn')); ?>
                <?php echo anchor($class_name . "/delete/" . $row->idbuku, $icon_delete, array('title' => 'Delete user', 'class' => 'btn btn-danger', 'onclick' => 'Are you sure ?')); ?>                
            </td>           
            <td><?php echo $row->idbuku ?></td>
            <td><?php echo $row->idkategori ?></td>
            <td><?php echo $row->judul ?></td>
            <td><?php echo $row->penerbit ?></td>            
            <td><?php echo $row->deskripsi  ?></td>
        </tr>                        
        <?php endforeach; ?>
    </tbody>
</table>

<?= $pagination ?>
