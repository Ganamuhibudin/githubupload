<?php $form_attr = array("id" => "form_{$class_name}", "class" => "form-horizontal") ?>
<?php echo form_open("", $form_attr); ?>    
    <div class="control-group">
        <label class="control-label" for="nama">Full Name</label>
        <div class="controls">
            <input type="hidden" name="aktif" value="1" /> 
            <input type="text" name="username" id="username" class='span7' value='<?= $username ?>' />
            <?php echo form_error("nama", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Alamat</label>
        <div class="controls">
            <input type="text" name="alamat" id="alamat" class='span7' value='<?= $alamat ?>' />
            <?php echo form_error("alamat", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Nomor Telepon</label>
        <div class="controls">
            <input type="text" name="notelp" id="notelp" class='span7' value='<?= $notelp ?>' />
            <?php echo form_error("nama", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" name="email" id="email" class='span7' value='<?= $email ?>' />
            <?php echo form_error("email", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>      

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn" onclick="history.go(-1);">Batal</button>
    </div>
<?php echo form_close() ?>