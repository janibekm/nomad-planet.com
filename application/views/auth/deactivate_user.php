<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#"><?php echo lang('deactivate_heading');?></a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<?php echo form_open("auth/deactivate/".$user->id);?>
		<div class="panel-body bg-light">
			<div class="section-divider mb40" id="spy1"><span>Deactivate user</span></div>
			<div class="row">
			<?php if(isset($message)):?>
				<div class="alert alert-info pastel alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-info pr10"></i><?php echo $message;?>
				</div>
			<?php endif;?>
			<div class="row form-horizontal">
				<div class="form-group">
					<label for="inputStandard" class="col-lg-8 control-label"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></label>
					<div class="col-lg-3">
						<label class="switch block mt15 switch-primary">
						  <input name="confirm" id="event" value="yes" type="checkbox" />
						  <label for="event" data-on="Yes" data-off="No"></label>
						  <span></span>
						</label>
					</div>
				</div>
				<?php echo form_hidden($csrf); ?>
				<?php echo form_hidden(array('id'=>$user->id)); ?>
			</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-6">
				<a href="<?=base_url();?>auth" class="button block pushed expand"> Cancel </a>
				</div>
				<div class="col-md-6">
				<button type="submit" class="button btn-primary btn-block pushed expand"> <?=lang('deactivate_submit_btn');?> </button>
				</div>
			</div>
		</div>
		<?php echo form_close();?>
	  </div>
	</div>
  </div>
</div>
</section>