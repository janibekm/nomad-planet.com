<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#"><?php echo lang('change_password_heading');?></a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<?php echo form_open("auth/change_password");?>
		<div class="panel-body bg-light">
			<div class="section-divider mb40" id="spy1"><span>Change user password</span></div>
			<div class="row">
			<?php if(isset($message)):?>
				<div class="alert alert-info pastel alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-info pr10"></i><?php echo $message;?>
				</div>
			<?php endif;?>
			<div class="row form-horizontal">
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
					<div class="col-lg-8">
						<?php echo form_input($old_password);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
					<div class="col-lg-8">
						<?php echo form_input($new_password);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
					<div class="col-lg-8">
						<?php echo form_input($new_password_confirm);?>
					</div>
				</div>
				<?php echo form_input($user_id);?>
			</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-6">
				<a href="<?=base_url();?>auth" class="button block pushed expand"> Cancel </a>
				</div>
				<div class="col-md-6">
				<button type="submit" class="button btn-primary btn-block pushed expand"> <?=lang('change_password_submit_btn');?> </button>
				</div>
			</div>
		</div>
		<?php echo form_close();?>
	  </div>
	</div>
  </div>
</div>
</section>