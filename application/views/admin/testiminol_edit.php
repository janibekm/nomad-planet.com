<header id="topbar">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	 <li class="crumb-active"><a href="#">Хэрэглэгчийн сэтгэгдэл засах</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
<div class="mw1200 center-block">
	<div class="admin-form theme-primary">
	  <div class="panel heading-border panel-primary">
		<div class="panel-body">
		  <form method="post" action="<?=base_url();?>admin/testiminol_edit/<?=$testiminol['id'];?>" id="form-ui" enctype="multipart/form-data">
		  <input type="hidden" value="" id="pic" name="cover_image" />
		  <input type="hidden" value="<?=$testiminol['pic'];?>" name="cover_image_url" />
		    <!-- <div class="row" id="cropimage">
				<div class="section-divider mb40" id="spy1"><span>Үндсэн Зураг</span></div>
				<div class="panel mt20" id="spy1">
				  <div class="panel-body pn">
					<div class="row table-layout table-clear-xs">
					  <div class="col-xs-12 col-sm-8">
						<div class="img-container pv10">
						 <?php if($testiminol['pic']===""):?>
						 <img id="crop_preview" src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png">
						 <?php else:?>
						 <img id="crop_preview" src="<?=base_url();?><?=$testiminol['pic'];?>" />
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
						  <?php if($testiminol['pic']===""):?>
						 <div class="img-preview preview-lg crop_preview"><img src="<?=base_url();?>assets/admin/tools/img/plugins/noimage.png"></div>
						 <?php else:?>
						 <img class="img-preview preview-lg crop_preview" src="<?=base_url();?><?=$testiminol['pic'];?>" />
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
			</div>-->
			<div class="section-divider mv40" id="spy2"><span>Үндсэн мэдээлэл</span></div>
			<div class="row form-horizontal">
				<div class="form-group">
					<div class="col-lg-12" style="height:400px;overflow:scroll">
				<?php foreach($iconm as $icon1):?>
					<div class="col-md-1" >
					<label style="margin:5px"><input type="radio" name="menu" <?php if($icon1['name'] == $testiminol['menu']):?><?php echo "checked=\"checked\"";?><?php endif;?> value="<?=$icon1['name'];?>"><i style="font-size:30px; <?php if($icon1['name'] == $testiminol['menu']):?><?php echo "background:red;padding:5px";?><?php endif;?>" class="fa <?=$icon1['name'];?>"></i></label>
					</div>
				 <?php endforeach;?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Гарчиг MN:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_0" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_0']);?>" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Гарчиг EN:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_1" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_1']);?>" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Гарчиг CN:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_2" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_2']);?>" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Гарчиг JP:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_3" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_3']);?>" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Гарчиг KO:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_4" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_4']);?>" type="text" />
					</div>
				</div>
				<!--<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Name:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="title_1" class="form-control" placeholder="..." value="<?=htmlspecialchars($testiminol['title_1']);?>" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Ажлын газар / Албан тушаал:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="description_0" class="form-control" placeholder="..." value="<?=$testiminol['description_0'];?>" type="text" />
					</div>
				</div>-->
				<!--<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Work / Job:</label>
					<div class="col-lg-8">
						<input id="inputStandard" name="description_1" class="form-control" placeholder="..." value="<?=$testiminol['description_1'];?>" type="text" />
					</div>
				</div>-->
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Тайлбар MN:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_0" placeholder="..."><?=$testiminol['content_0'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Тайлбар</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Тайлбар ENG:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_1" placeholder="..."><?=$testiminol['content_1'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Тайлбар</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Тайлбар CN:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_2" placeholder="..."><?=$testiminol['content_2'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Тайлбар</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Тайлбар JP:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_3" placeholder="..."><?=$testiminol['content_3'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Тайлбар</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Тайлбар KO:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_4" placeholder="..."><?=$testiminol['content_4'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Тайлбар:</strong> Тайлбар</span>
						</label>
					</div>
				</div>
				<!--<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Comment:</label>
					<div class="col-lg-8">
						<label class="field prepend-icon">
							<textarea class="gui-textarea" id="comment" name="content_1" placeholder="..."><?=$testiminol['content_1'];?></textarea>
							<label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
							<span class="input-footer">
							<strong>Description:</strong> Testiminol comment</span>
						</label>
					</div>
				</div>-->
				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Харагдах эсэх</label>
					<div class="col-lg-8">
						<label class="switch block mt15 switch-primary">
						  <input type="checkbox" name="visible"  id="visible" value="1" <?php if($testiminol['visible']==1) { echo "checked";}?> >
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