<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#">Мэдээ засах</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
<div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body">
			<h5 class="micro-header fw600 text-left">
			  <i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Нэмэлт зурагнууд /1100px : 600px/
			</h5>
			<form action="<?=base_url();?>admin/upload2" data-rmpath = "img/project" data-rmurl="<?=base_url();?>admin/project_pics/<?=$post['id'];?>" class="dropzone" id="dropZone2" style="min-height: 250px;">
			  <div class="fallback">
				<input name="file" type="file" multiple />
			  </div>
			</form>
			<?php $pics = explode('*',$post['pics']);?>
				<?php foreach($pics as $key=>$pic):?>
				<?php if($pic!==""):?>
				    <div class="dz-preview dz-processing dz-error dz-image-preview hidden example-preview">
						<div class="dz-details">
						  <div class="dz-filename">
							<span data-dz-name="">Зураг <?=$key;?></span>
						  </div>
						  <img data-dz-thumbnail="" alt="зураг олдсонгүй" src="<?=base_url();?><?=$pic;?>" class="img-responsive">
						</div>
						<div class="dz-progress">
						  <span class="dz-upload" data-dz-uploadprogress=""></span>
						</div>
						<div class="dz-success-mark">
						  <span>✔</span>
						</div>
						<div class="dz-error-mark">
						  <span>✘</span>
						</div>
						<div class="dz-error-message">
						  <span data-dz-errormessage="">Server responded with 0 code.</span>
						</div>
						<a class="dz-remove removePic" data-rmimg="<?=$pic;?>" href="javascript:undefined;" data-dz-remove>Remove file</a>
					</div>
				<?php endif;?>
				<?php endforeach;?>
		  <form method="post" action="<?=base_url();?>admin/project_edit/<?=$post['id'];?>" id="form-ui" enctype="multipart/form-data">
		  <input type="hidden" value="<?=$post['pics'];?>" id="pics" name="pics" />
		  <input type="hidden" value="" id="pic" name="cover_image" />
		  <input type="hidden" value="<?=$post['pic'];?>" name="cover_image_url" />
		     <div class="row" id="cropimage">
				<div class="section-divider mb40" id="spy1">
				  <span>Үндсэн Зураг</span>
				</div>
				<div class="panel mt20" id="spy1">
				  <div class="panel-body pn">
					<div class="row table-layout table-clear-xs">
					  <div class="col-xs-12 col-sm-8">
						<div class="img-container pv10">
						 <?php if($post['pic']===""):?>
						 <img id="crop_preview" src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png">
						 <?php else:?>
						 <img id="crop_preview" src="<?=base_url();?><?=$post['pic'];?>" />
						 <?php endif;?>
						</div>
					  </div>
					  <div class="col-xs-12 col-sm-4 bg-light br-l br-grey va-t pv10">
						<div class="">
							<div class="docs-buttons">
							  <div class="btn-group">
								<button class="btn btn-primary btn-sm" data-method="setDragMode" data-option="move" type="button" title="Move">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
									<span class="fa fa-arrows"></span>
								  </span>
								</button>
								<button class="btn btn-primary btn-sm" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
									<span class="fa fa-search-plus"></span>
								  </span>
								</button>
								<button class="btn btn-primary btn-sm" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
									<span class="fa fa-search-minus"></span>
								  </span>
								</button>
								<button class="btn btn-primary btn-sm" data-method="rotate" data-option="-45" type="button" title="Rotate Left">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
									<span class="fa fa-rotate-left"></span>
								  </span>
								</button>
								<button class="btn btn-primary btn-sm" data-method="rotate" data-option="45" type="button" title="Rotate Right">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
									<span class="fa fa-rotate-right"></span>
								  </span>
								</button>
							  </div>
							  <div class="btn-group btn-group-crop">
								<label class="btn btn-primary btn-sm btn-upload" for="inputImage" title="Upload image file">
								  <input class="sr-only" id="inputImage" name="cover_image_crop" type="file" accept="image/*">
								  <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
									Зураг сонгоно уу <span class="fa fa-upload"></span> 
								  </span>
								</label>
							  </div>
							</div>
						</div>
						<div class="clearfix">
						  <?php if($post['pic']===""):?>
						 <div class="img-preview preview-lg crop_preview"><img src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png"></div>
						 <?php else:?>
						 <img class="img-preview preview-lg crop_preview" src="<?=base_url();?><?=$post['pic'];?>" />
						 <?php endif;?>
						</div>
						<div class="">
							<div class="docs-buttons">
							  <div class="btn-group btn-group-crop">
								<button class="btn btn-primary btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: <?=$width;?>, &quot;height&quot;: <?=$height;?> }" type="button">
								  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { &quot;width&quot;: <?=$width;?>, &quot;height&quot;: <?=$height;?> })">
									Болсон (<?=$width;?> &times; <?=$height;?>)
								  </span>
								</button>
							  </div>
								<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
								  <div class="modal-dialog">
									<div class="modal-content">
									<style>canvas {border:2px solid;}</style>
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="getCroppedCanvasTitle">Хайчлагдсан зураг</h4>
									  </div>
									  <div class="modal-body"></div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
										<button type="button" id="sendcrop" data-path="<?=$path;?>" data-url="<?=base_url();?>admin/crop"  class="btn btn-default" >Хадгалах</button>
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
			<div class="section-divider mv40" id="spy2"><span>Үндсэн мэдээлэл</span></div>
			<div class="row form-horizontal">
				<div class="form-group">
					<label class="col-lg-3 control-label">Ангилал</label>
					<div class="col-lg-8">
						<select name="menu" style="display: none;" id="menus" tabindex="-1" class="select2-single select2-primary form-control">
							<?=$menus;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Мэдээний гарчиг :</label>
					<div class="col-lg-8">
						<input type="text" class="gui-input" name="title" value="<?=htmlspecialchars($post['title']);?>" placeholder="..." required />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Товч тайлбар :</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea summernote_init" id="comment" name="description" placeholder="..."><?=$post['description'];?></textarea>
						</label>
						<span class="input-footer">
							<strong>Тайлбар:</strong> Мэдээний талаар хэдхэн өгүүлбэр оруулна уу
						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Үндсэн мэдээлэл:</label>
					<div class="col-lg-8">
						<div class="panel-body pn of-h" id="summer-demo">
						  <textarea id="editor" class="summernote" name="content"><?=$post['content'];?></textarea>
						</div>
						<span class="input-footer">
							<strong>Тайлбар:</strong> Та Youtube,Vimeo -гаас видео оруулахыг хүсвэл 2-р editor-ыг сонгоно уу
							<label class="switch switch-primary pull-right">
							  <input name="tools" id="editor_change" value="1" checked="" type="checkbox">
							  <label for="editor_change" data-on="1" data-off="2"></label>
							  <span>Editor</span>
							</label>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Харагдах эсэх</label>
					<div class="col-lg-8">
						<label class="switch block mt15 switch-primary">
						  <input type="checkbox" name="visible"  id="visible" value="1" <?php if($post['visible']==1) { echo "checked";}?> >
						  <label for="visible" data-on="Тийм" data-off="Үгүй"></label>
						</label>
					</div>
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