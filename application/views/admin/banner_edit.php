<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#">Шинэ Сурталчилгаа ангилал</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
<div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body bg-light">
		  <form method="post" action="<?=base_url();?>admin/banner_edit/<?=$banner['id'];?>" id="form-ui" enctype="multipart/form-data">
			<input type="hidden" name="visible" value="<?=$banner['visible'];?>" />
			<div class="row" id="imagePrev">
				<div class="col-md-12">
					<div class="section-divider mb40" id="spy1"><span>Видео</span></div>
					<textarea class="gui-textarea" id="summernote_iframe" name="content" placeholder="..."><?=$banner['content'];?></textarea>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-md-6">
					<a href="#"  onclick="history.go(-1);" class="button block pushed expand"> Буцах </a>
					</div>
					<div class="col-md-6">
					<button type="submit" class="button btn-primary btn-block pushed expand"> Засах </button>
					</div>
				</div>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>
</div>
</section>