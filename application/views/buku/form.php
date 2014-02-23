<?php $form_attr = array("id" => "form_{$class_name}", "class" => "form-horizontal") ?>
<?php echo form_open("", $form_attr); ?>    
    <div class="control-group">
        <label class="control-label" for="nama">Kategori Buku</label>
        <div class="controls">
            <?php echo form_dropdown("idkategori", $kategori_buku,  'class="span3"') ?>
            <?php echo form_error("idkategori", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Judul Buku</label>
        <div class="controls">
            <input type="text" name="judul" id="judul" class='span7' value='<?= $judul ?>' />
            <?php echo form_error("judul", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Pengarang</label>
        <div class="controls">
            <input type="text" name="pengarang" id="pengarang" class='span7' value='<?= $pengarang ?>' />
            <?php echo form_error("pengarang", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Penerbit</label>
        <div class="controls">
            <input type="text" name="penerbit" id="penerbit" class='span7' value='<?= $penerbit ?>' />
            <?php echo form_error("penerbit", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>            
    <div class="control-group">
        <label class="control-label" for="nama">Deskripsi</label>
        <div class="controls">
            <textarea name="deskripsi" id="deskripsi">
                <?= $deskripsi ?>
            </textarea>
            <?php echo form_error("deskripsi", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>      

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn" onclick="history.go(-1);">Batal</button>
    </div>
<?php echo form_close() ?>