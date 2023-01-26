<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#"><?php echo lang('index_heading');?></a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body bg-light">
			<div class="section-divider mb40" id="spy1">
			  <span><?php echo lang('index_subheading');?></span>
			</div>
			<div class="row">
			<?php if(isset($message)):?>
				<div class="alert alert-info pastel alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-info pr10"></i><?php echo $message;?></div>
			<?php endif;?>
				<table class="table table-hover admin-form theme-warning tc-checkbox-1 fs13">
					<thead>
						<tr class="bg-light">
							<th class="text-center">№</th>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_groups_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th><?php echo lang('index_action_th');?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($users as $key=>$user):?>
						<tr>
							<td class="text-center"><?=$key;?></td>
							<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
				<a href="<?=base_url();?>auth/create_user" type="button" class="btn btn-lg btn-primary "><?=lang('index_create_user_link')?></a>
				<a href="<?=base_url();?>auth/create_group" type="button" class="btn btn-lg btn-info"><?=lang('index_create_group_link')?></a>
			</div>
		</div>
	  </div>
	</div>
  </div>
</div>
</section>