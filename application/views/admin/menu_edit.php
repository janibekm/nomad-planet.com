<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#">Мэдээний ангилал засах</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
<div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body bg-light">
		  <form method="post" action="<?=base_url();?>admin/menu_edit/<?=$menu['id'];?>" id="form-ui" enctype="multipart/form-data">
			<div class="section-divider mv40" id="spy2"><span>Main information</span></div>
			<div class="row form-horizontal">
				<div class="form-group">
					<label class="col-lg-3 control-label">Parent Menu</label>
					<div class="col-lg-8">
						<select name="subid" style="display: none;" id="menus" tabindex="-1" class="select2-single select2-primary form-control"><?=$menus;?></select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Menu title Eng:</label>
					<div class="col-lg-8">
						<input type="text" class="gui-input" name="title_0" placeholder="..." value="<?=$menu['title_0'];?>" required />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Menu title Fre:</label>
					<div class="col-lg-8">
						<input type="text" class="gui-input" name="title_1" placeholder="..." value="<?=$menu['title_1'];?>" required />
					</div>
				</div>
				<!-- <div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Ангилалын өнгө:</label>
					<div class="col-lg-8">
						<input type="color" class="gui-input" name="color" placeholder="..." value="<?=$menu['color'];?>" required />
					</div>
				</div> -->
				<!-- <div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Ангилалын Товч тайлбар:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="description" placeholder="..."><?=$menu['description'];?></textarea>
							<label for="comment" class="field-icon">
							<i class="fa fa-comments"></i>
							</label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Ангилалын талаар товч хэдэн өгүүлбэр</span>
						</label>
					</div>
				</div> -->
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Харагдах эсэх</label>
					<div class="col-lg-8">
						<label class="switch block mt15 switch-primary">
						  <input type="checkbox" name="visible" id="visible" value="1" <?php if($menu['visible']==1){echo "checked";}?> />
						  <label for="visible" data-on="Тийм" data-off="Үгүй"></label>
						</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-md-6"><a href="#"  onclick="history.go(-1);" class="button block pushed expand"> Буцах </a></div>
					<div class="col-md-6"><button type="submit" class="button btn-primary btn-block pushed expand"> Засах </button></div>
				</div>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>
</div>
</section>