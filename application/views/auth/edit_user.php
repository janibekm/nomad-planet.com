<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#"><?php echo lang('edit_user_heading');?></a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<?php echo form_open(uri_string());?>
		<div class="panel-body bg-light">
			<div class="section-divider mb40" id="spy1"><span><?php echo lang('edit_user_subheading');?></span></div>
			<div class="row">
			<?php if(isset($message)):?>
				<div class="alert alert-info pastel alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-info pr10"></i><?php echo $message;?>
				</div>
			<?php endif;?>
			<div class="row form-horizontal ">
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
					<div class="col-lg-8">
						<?php echo form_input($first_name);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_lname_label', 'last_name');?></label>
					<div class="col-lg-8">
						<?php echo form_input($last_name);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_company_label', 'company');?></label>
					<div class="col-lg-8">
						<?php echo form_input($company);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_phone_label', 'phone');?></label>
					<div class="col-lg-8">
						<?php echo form_input($phone);?>
					</div>
				</div>
				<?php if ($this->ion_auth->is_admin()): ?>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_password_label', 'password');?></label>
					<div class="col-lg-8">
						<?php echo form_input($password);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
					<div class="col-lg-8">
						<?php echo form_input($password_confirm);?>
					</div>
				</div>
					<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label"><?php echo lang('edit_user_groups_heading');?></label>
					<div class="col-lg-8">
					  <?php foreach ($groups as $key=>$group):?>
						  <label class="">
						  <?php
							  $gID=$group['id'];
							  $checked = null;
							  $item = null;
							  foreach($currentGroups as $grp) {
								  if ($gID == $grp->id) {
									  $checked= ' checked="checked"';
								  break;
								  }
							  }
						  ?>
							<label class="switch block mt15 switch-primary">
							  <input name="groups[]" id="event<?=$key;?>" value="<?php echo $group['id'];?>" type="checkbox" <?php echo $checked;?> />
							  <label for="event<?=$key;?>" data-on="Yes" data-off="No"></label>
							  <span><?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?></span>
							</label>
						  </label>
					  <?php endforeach?>
					  </div>
					  </div>
				<?php endif ?>
				<?php echo form_hidden('id', $user->id);?>
				<?php echo form_hidden($csrf); ?>
			</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-6">
				<a href="<?=base_url();?>auth" class="button block pushed expand"> Cancel </a>
				</div>
				<div class="col-md-6">
				<button type="submit" class="button btn-primary btn-block pushed expand"> <?=lang('edit_user_submit_btn');?> </button>
				</div>
			</div>
		</div>
		<?php echo form_close();?>
	  </div>
	</div>
  </div>
</div>
</section>