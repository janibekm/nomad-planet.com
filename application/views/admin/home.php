<header id="topbar" class="alt">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
	<li class="crumb-active"><a href="#">Эхлэл</a></li>
  </ol>
</div>
<div class="topbar-right">
  <div class="ib topbar-dropdown">
	<label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Хийгдсэн үйлдлүүд</label>
	<select id="topbar-multiple" class="hidden" onchange="javascript:location.href = this.value;">
	  <optgroup label="Сонгоно уу:">
		<option value="<?=base_url();?>admin/index/30" <?php if($action==30){ echo "selected=\"selected\""; }?> >Сүүлийн 30</option>
		<option value="<?=base_url();?>admin/index/100" <?php if($action==100){ echo "selected=\"selected\""; }?> >Сүүлийн 100</option>
		<option value="<?=base_url();?>admin/index/1000" <?php if($action==1000){ echo "selected=\"selected\""; }?> >Сүүлийн 1000</option>
	  </optgroup>
	</select>
  </div>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">      
<div class="row mb10">
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel bg-alert light of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="glyphicon glyphicon-duplicate"></i></div>
		<h2 class="mt15 lh15"><b><?=$posts_count;?></b></h2>
		<h5 class="text-muted">Мэдээ Мэдээлэл</h5>
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel bg-info light of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="fa fa-clock-o"></i></div>
		<h2 class="mt15 lh15"><b></b></h2>
		<h5 class="text-muted">Үйл явдал</h5>
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel bg-danger light of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="fa fa-map-marker"></i></div>
		<h2 class="mt15 lh15"><b></b></h2>
		<h5 class="text-muted">Байршил </h5>
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="glyphicon glyphicon-flag"></i></div>
		<h2 class="mt15 lh15"><b></b></h2>
		<h5 class="text-muted">Ирсэн байршил</h5>
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel bg-success of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="glyphicon glyphicon-flag"></i></div>
		<h2 class="mt15 lh15"><b></b></h2>
		<h5 class="text-muted">Аялал</h5>
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
	<div class="panel bg-warning light of-h mb10">
	  <div class="pn pl20 p5">
		<div class="icon-bg"><i class="glyphicon glyphicon-flag"></i></div>
		<h2 class="mt15 lh15"><b><?=$banners_count;?></b></h2>
		<h5 class="text-muted">Сурталчилгаа</h5>
	  </div>
	</div>
  </div>
</div>
  <div class="admin-panels fade-onload">
	 <div class="row">
	  <div class="col-md-6">
		<div class="panel" id="p01">
		  <div class="panel-heading">
			<span class="panel-title">Их хандалттай мэдээ</span>
		  </div>
		  <div class="panel-body pn">
			<table class="table mbn tc-med-1 tc-bold-last">
			  <thead>
				<tr class="hidden">
				  <th>#</th>
				  <th>Гарчиг</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php foreach($posts as $post):?> 
				<tr>
				  <td><?=$post['title'];?></td>
				  <td><a href="<?=base_url();?>admin/post_edit/<?=$post['id'];?>"><?=$post['visited'];?></a></td>
				</tr>
			  <?php endforeach;?>
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6">
		<div class="panel" id="p02">
		  <div class="panel-heading">
			<span class="panel-title">Их хандалттай үйл явдал</span>
		  </div>
		  <div class="panel-body pn">
			<table class="table mbn tc-med-1 tc-bold-2">
			  <thead>
				<tr class="hidden">
				  <th>Нэр</th>
				  <th>Сэтгэгдэл</th>
				</tr>
			  </thead>
			  <tbody>
	
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
		<div class="row">
	  <div class="col-md-6">
		<div class="panel" id="p03">
		  <div class="panel-heading">
			<span class="panel-title">Их хандалттай байршил</span>
		  </div>
		  <div class="panel-body pn">
			<table class="table mbn tc-med-1 tc-bold-last">
			  <thead>
				<tr class="hidden">
				  <th>#</th>
				  <th>Гарчиг</th>
				</tr>
			  </thead>
			  <tbody>
			 
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6">
		<div class="panel" id="p04">
		  <div class="panel-heading">
			<span class="panel-title">Их хандалттай аялал</span>
		  </div>
		  <div class="panel-body pn">
			<table class="table mbn tc-med-1 tc-bold-2">
			  <thead>
				<tr class="hidden">
				  <th>Нэр</th>
				  <th>Сэтгэгдэл</th>
				</tr>
			  </thead>
			  <tbody>
			
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
</div>

</div>
<aside class="tray tray-right tray270 nano affix">
	<div class="nano-content">
	  <ol class="timeline-list pl5 mt5">
		<?php foreach($actions as $action):?>
		<li class="timeline-item">
		  <div class="timeline-icon bg-dark light"> <!-- bg-success bg-warning-->
			<span class="<?=$action['icon'];?>"></span>
		  </div>
		 <div class="timeline-desc">
			<?php if ($this->ion_auth->is_admin()): ?>
			<b><a style="color:#626677;" href="<?=base_url();?>auth/edit_user/<?=$action['user_id'];?>"><?=$action['user_name'];?></a></b><br/>
			<?php else:?>
			<b><?=$action['user_name'];?></b><br/>
			<?php endif;?>
			
			<a href="<?=$action['link'];?>" target="_blank"><?=$action['action'];?></a>
		  </div>
		  <div class="timeline-date"><?=$action['date'];?></div>
		</li>
		<?php endforeach;?>
	  </ol>
	</div>
</aside>
</section>
