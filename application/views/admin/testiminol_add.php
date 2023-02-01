<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#">Шинэ Хэрэглэгчийн сэтгэгдэл Нэмэх</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
<div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body">
		  <form method="post" action="<?=base_url();?>admin/testiminol_add" id="form-ui" enctype="multipart/form-data">
		  <input type="hidden" value="" id="pic" name="cover_image" />
		    <!--<div class="row" id="cropimage">
				<div class="section-divider mb40" id="spy1"><span>Үндсэн Зураг</span></div>
				<div class="panel mt20" id="spy1">
				  <div class="panel-body pn">
					<div class="row table-layout table-clear-xs">
					  <div class="col-xs-12 col-sm-8">
						<div class="img-container pv10">
						  <img id="crop_preview" class="crop_preview" src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png">
						 
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
						  <div class="img-preview preview-lg crop_preview"><img src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png"></div>
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
			</div>-->
			<div class="section-divider mv40" id="spy2"><span>Үндсэн мэдээлэл</span></div>
			<div class="row form-horizontal">
				<div class="form-group">
					<div class="col-lg-12" style="height:400px;overflow:scroll">
				<?php foreach($iconm as $icon):?>
					<div class="col-md-1" >
					<label style="margin:5px"><input type="radio" name="menu" value="<?=$icon['name'];?>"><i style="font-size:30px" class="fa <?=$icon['name'];?>"></i></label>
					</div>
				  <?php endforeach;?>
					</div>
				</div>
					<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Гарчиг:</label>
						<div class="col-lg-8">
							<input id="inputStandard" name="title_0" class="form-control" placeholder="..." type="text" />
						</div>
					</div>
					<!--<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Name:</label>
						<div class="col-lg-8">
							<input id="inputStandard" name="title_1" class="form-control" placeholder="..." type="text" />
						</div>
					</div>-->
					<!--<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Where From:</label>
						<div class="col-lg-8">
							<input id="inputStandard" name="description_0" class="form-control" placeholder="..." type="text" />
						</div>
					</div>-->
					<!--<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Work / Job:</label>
						<div class="col-lg-8">
							<input id="inputStandard" name="description_1" class="form-control" placeholder="..." type="text" />
						</div>
					</div>-->
					<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Тайлбар:</label>
						<div class="col-lg-8">
							<label class="field prepend-icon">
								<textarea class="gui-textarea" id="comment" name="content_0" placeholder="..."></textarea>
								<label for="comment" class="field-icon">
								<i class="fa fa-comments"></i>
								</label>
								<span class="input-footer">
								<strong>Тайлбар:</strong> Тайлбар</span>
							</label>
						</div>
					</div>
					<!--<div class="form-group">
						<label for="inputStandard" class="col-lg-3 control-label">Comment:</label>
						<div class="col-lg-8">
							<label class="field prepend-icon">
								<textarea class="gui-textarea" id="comment" name="content_1" placeholder="..."></textarea>
								<label for="comment" class="field-icon">
								<i class="fa fa-comments"></i>
								</label>
								<span class="input-footer">
								<strong>Description:</strong> Testiminol comment</span>
							</label>
						</div>
					</div>-->
				</div>
				
			<div class="panel-footer">
				<div class="row">
					<div class="col-md-6">
					<a href="#"  onclick="history.go(-1);" class="button block pushed expand"> Буцах </a>
					</div>
					<div class="col-md-6">
					<button type="submit" class="button btn-primary btn-block pushed expand"> Нэмэх </button>
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