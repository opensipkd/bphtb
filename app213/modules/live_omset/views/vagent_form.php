<? $this->load->view('_head'); ?>
<? $this->load->view(active_module().'/_navbar'); ?>

<style>
.nav-tabs > .active > a, .nav-pills > .active > a:hover {
    color: blue;
}
.form-horizontal .controls {
  margin-left: 120px;  /* changed from 180px to 140px */
}
.form-horizontal .control-group {
    margin-bottom: 1px;
}
.form-horizontal .control-label{
	text-align:left;
	width: 120px; /* changed from 160px to 120px */
}
.form-horizontal input  {
	height: 14px !important;
	border-radius: 2px 2px 2px 2px !important;
	margin-bottom: 1px !important;
}
.form-horizontal select  {
	height: 24px !important;
	padding: 2px !important;
	border-radius: 2px 2px 2px 2px !important;
	margin-bottom: 1px !important;
}

button {
	height: 24px !important;
	padding: 4px 8px !important;
	border-radius: 2px 2px 2px 2px !important;
	margin-bottom: 1px !important;
}

hr {
  border: 0;
  border-bottom: 1px solid #dddddd;
}
</style>

<script>
$(document).ready(function() {
	$('#btn_cancel').click(function() {
		window.location = '<?=active_module_url($this->uri->segment(2));?>';
	});
	
	$('#lastjob, #startup').datepicker({
        dateFormat: 'dd-mm-yy'
	});
});

$(document).keypress(function(event){
	if (event.which == '13') {
		event.preventDefault();
	}
});
</script>

<div class="content">
    <div class="container-fluid">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#"><strong>AGENT</strong></a>
			</li>
		</ul>
		
		<? 
		echo msg_block();
		if(validation_errors()){
			echo '<blockquote><strong>Harap melengkapi data berikut :</strong>';
			echo validation_errors('<small>','</small>');
			echo '</blockquote>';
		} 
		?>
		
		<?php echo form_open($faction, array('id'=>'myform','class'=>'form-horizontal'));?>
            <div class="control-group">
                <label class="control-label" for="id">ID Agent</label>
                <div class="controls">
                    <input class="input" style="width:100px;" type="text" name="id" id="id" value="<?=$dt['id']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="jalur">Jalur</label>
                <div class="controls">
                    <input class="input" style="width:40px;" type="text" name="jalur" id="jalur" value="<?=$dt['jalur']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="status">Status</label>
                <div class="controls">
                    <input class="input" style="width:40px;" type="text" name="status" id="status" value="<?=$dt['status']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="job">Job</label>
                <div class="controls">
                    <input class="input" style="width:40px;" type="text" name="job" id="job" value="<?=$dt['job']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="lastjob">Last Job</label>
                <div class="controls">
                    <input class="input" style="width:77px;" type="text" name="lastjob" id="lastjob" value="<?=$dt['lastjob']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="startup">Start Up</label>
                <div class="controls">
                    <input class="input" style="width:77px;" type="text" name="startup" id="startup" value="<?=$dt['startup']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="ket">Notes</label>
                <div class="controls">
                    <input class="input" type="text" name="ket" id="ket" value="<?=$dt['ket']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="lasterr">Last Err</label>
                <div class="controls">
                    <input class="input" type="text" name="lasterr" id="lasterr" value="<?=$dt['lasterr']?>" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="url">URL</label>
                <div class="controls">
                    <input class="input" type="text" name="url" id="url" value="<?=$dt['url']?>" />
                </div>
            </div>
            <br>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn" id="btn_cancel">Batal</button>
                </div>
            </div>
		<?php echo form_close();?>
    </div>
</div>
<? $this->load->view('_foot'); ?>