<header id="topbar" class="alt">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	<li class="crumb-active"><a href="#">Үгийн сан</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="panel">
	<div class="panel-menu admin-form theme-primary">
	  <div class="row">
		<form action="<?=base_url();?>admin/words/0/0" method="post">
		<div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="w_0" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			 text</span>
		  </label>
		</div>
		<!-- <div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="w_1" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			Germany text</span>
		  </label>
		</div>
		<div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="w_2" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			Japan text</span>
		  </label>
		</div>
		<div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="w_3" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			Korea text</span>
		  </label>
		</div>
		<div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="w_4" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			China text</span>
		  </label>
		</div> -->
		<div class="col-md-3">
		  <label class="field prepend-icon">
			<textarea class="gui-textarea" name="desc" placeholder="..."></textarea>
			<label for="comment" class="field-icon">
			<i class="fa fa-language"></i>
			</label>
			<span class="input-footer">
			Тайлбар текст</span>
		  </label>
		</div>
		<div class="col-md-3">
		  <button name="action" value="add" type="submit" class="btn btn-primary">
			<i class="fa fa-search"></i> Нэмэх
		  </button>
		</div>
		</form>
	  </div>
	</div>
	<div class="panel-body pn">
	  <div class="table-responsive">
		<table class="table table-hover admin-form theme-warning tc-checkbox-1 fs13">
		  <thead>
			<tr class="bg-light">
			  <th class="text-center">
			  №
			  </th>
			  <th class="">text</th>
			  <!-- <th class="">Germany text</th>
			  <th class="">Japan text</th>
			  <th class="">Korea text</th>
			  <th class="">China text</th> -->
			  <th class="">Description</th>
			  <th class="text-right">Үйлдэл/Төлөв</th>
			</tr>
		  </thead>
		  <tbody class="words">
			<?php foreach($words as $word):?>
			<tr>
			  <td class="text-center">
				<?=$word['id']-1;?>
			  </td>
			  <td class=""><?=$word['w_0'];?></td>
			  <!-- <td class=""><?=$word['w_1'];?></td>
			  <td class=""><?=$word['w_2'];?></td>
			  <td class=""><?=$word['w_3'];?></td>
			  <td class=""><?=$word['w_4'];?></td> -->
			  <td class=""><?=$word['desc'];?></td>
			  <td class="text-right">
				<div class="btn-group">
					<a style="margin-right:10px" class="btn btn-primary" href="#editModal<?=$word['id'];?>" data-target="#editModal<?=$word['id'];?>"  data-toggle="modal"><i class="fa fa-wrench"></i> Засах</a>
					<div id="editModal<?=$word['id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-md text-left"  style="margin-top:10%;">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Засах</h4>
						  </div>
						  <div class="modal-body">
								<form id="editForm<?=$word['id'];?>" action="<?=base_url();?>admin/words/1/<?=$word['id'];?>" method="post">
									<div class="form-inline">
										<label class="field prepend-icon">
											<textarea class="gui-textarea" name="w_0" placeholder="..."><?=$word['w_0'];?></textarea>
											<label for="comment" class="field-icon">
											<i class="fa fa-language"></i>
											</label>
											<span class="input-footer">
											 text</span>
										</label>
										<br/>
										<!-- <label class="field prepend-icon">
											<textarea class="gui-textarea" name="w_1" placeholder="..."><?=$word['w_1'];?></textarea>
											<label for="comment" class="field-icon">
											<i class="fa fa-language"></i>
											</label>
											<span class="input-footer">
											Germany text</span>
										</label>
										<label class="field prepend-icon">
											<textarea class="gui-textarea" name="w_2" placeholder="..."><?=$word['w_2'];?></textarea>
											<label for="comment" class="field-icon">
											<i class="fa fa-language"></i>
											</label>
											<span class="input-footer">
											Japan text</span>
										</label>
										<label class="field prepend-icon">
											<textarea class="gui-textarea" name="w_3" placeholder="..."><?=$word['w_3'];?></textarea>
											<label for="comment" class="field-icon">
											<i class="fa fa-language"></i>
											</label>
											<span class="input-footer">
											Korea text</span>
										</label>
										<label class="field prepend-icon">
											<textarea class="gui-textarea" name="w_4" placeholder="..."><?=$word['w_4'];?></textarea>
											<label for="comment" class="field-icon">
											<i class="fa fa-language"></i>
											</label>
											<span class="input-footer">
											China text</span>
										</label> -->
										<label class="field prepend-icon">
											<textarea class="gui-textarea" id="comment" name="desc" placeholder="..."><?=$word['desc'];?></textarea>
											<label for="comment" class="field-icon">
												<i class="fa fa-comments"></i>
											</label>
											<span class="input-footer">
											<strong>Тайлбар:</strong> тайлбар текст</span>
										</label>
									</div>
								</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
							<a href="#"  onclick="document.getElementById('editForm<?=$word['id'];?>').submit();" class="btn btn-primary">Засах</a>
						  </div>
						</div>
					  </div>
					</div>
					<!--
					<a class="btn btn-warning" href="#removeModal<?=$word['id'];?>" data-target="#removeModal<?=$word['id'];?>"  data-toggle="modal"><i class="fa fa-trash"></i> Устгах</a>
					-->
					<div id="removeModal<?=$word['id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-sm text-left"  style="margin-top:10%;">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Устгахад итгэлтэй байна уу?</h4>
						  </div>
						  <div class="modal-body">
							Та <?=$word['w_0'];?> -г устгах гэж байна!
							<form id="deleteForm<?=$word['id'];?>" action="<?=base_url();?>admin/words/2/<?=$word['id'];?>" method="post"></form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
							<a href="#" onclick="document.getElementById('deleteForm<?=$word['id'];?>').submit();" class="btn btn-danger">Устгах</a>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			  </td>
			</tr>
			<?php endforeach;?>
		  </tbody>
		</table>
	  </div>
	</div>
  </div>
</div>
</section>
