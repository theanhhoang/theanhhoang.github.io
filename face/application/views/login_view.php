

<div class="row" style="margin-top:20px;">
<div class="container">


<div class="col-md-7">

    <img src="<?php echo site_url('assets/images/led-city.png');?>">

</div>

<div class="col-md-5">

	<div class="login-panel panel panel-default">
		<div class="panel-body">


                    <?php
                        echo $this->postal->get();
                    ?>

                    <?php echo form_open('',array('class'=>'form-signin'));?>
                    <div class="form-group">
                        <?php echo form_label('Username','identity');?>
                        <?php echo form_error('identity');?>
                        <?php echo form_input('identity','','class="form-control"');?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Password','password');?>
                        <?php echo form_error('password');?>
                        <?php echo form_password('password','','class="form-control"');?>
                    </div>
                    <div class="form-group">
                        <label>
                            <?php echo form_checkbox('remember','1',FALSE); echo $this->lang->line('remember_me')?>

                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit('submit', $this->lang->line('login_title'), 'class="btn btn-primary btn-lg btn-block"');?>
                    </div>
                    <?php echo form_close();?>

		</div>
	</div>

</div>


</div>

</div>
