<?php $form_attr = array("id" => "form_{$class_name}", "class" => "form-horizontal") ?>
<?php echo form_open("", $form_attr); ?>    
    <div class="control-group">
        <label class="control-label" for="nama">ID</label>
        <div class="controls">
            <input type="hidden" name="aktif" value="1" />
            <input type="text" name="nama" id="nama" class='span7' value='<?= $nama ?>' />
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
    <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" name="username" id="username" class='span7' value='<?= $username ?>' />
            <?php echo form_error("username", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
	<div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" name="password" id="password" class='span7' />
            <?php echo form_error("password", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password_confirm">Password Confirm</label>
        <div class="controls">
            <input type="password" name="password_confirm" id="password_confirm" class='span7' />
            <?php echo form_error("password_confirm", "<br /><span class='validation label label-important'>", "</span>")?>
        </div>
    </div>      

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn" onclick="history.go(-1);">Batal</button>
    </div>
<?php echo form_close() ?>