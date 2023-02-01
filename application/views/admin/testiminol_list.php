<header id="topbar" class="alt">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon">
	  <a href="<?=base_url();?>admin">
		<span class="glyphicon glyphicon-home"></span>
	  </a>
	</li>
	<li class="crumb-active"><a href="#">Хэрэглэгчийн сэтгэгдэл Жагсаалт</a></li>
  </ol>
</div>
 <div class="topbar-right hidden-xs hidden-sm">
  <a href="<?=base_url();?>admin/testiminol_add" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-user-plus pr5"></span> Нэмэх</a>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="panel">
	<div class="panel-menu admin-form theme-primary">
	  <div class="row">
		<form action="<?=current_url();?>" method="get">
		<div class="col-md-8">
		  <div class="input-group input-hero input-hero-sm">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input id="icon-filter" name="search" value="<?=$search;?>" class="form-control" placeholder="Хайх Хэрэглэгчийн сэтгэгдэл гарчиг эсвэл цэсний төрлийг оруулна уу.." type="text">
		  </div>
		</div>
		<div class="col-md-2"><button name="action" value="search" type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Хайх</button></div>
		<div class="col-md-2">
		   <label class="field select">
			<select id="filter-status" name="limit" onchange="this.form.submit()">
			  <option value="15" <?php echo (($limit==15)? "selected" : "") ?> >15</option>
			  <option value="30"  <?php echo (($limit==30)? "selected" : "") ?> >30</option>
			  <option value="50"  <?php echo (($limit==50)? "selected" : "") ?> >50</option>
			  <option value="2147483647"  <?php echo (($limit==2147483647)? "selected" : "") ?> >Бүгд</option>
			</select>
			<i class="arrow double"></i>
		  </label>
		</div>
		</form>
	  </div>
	</div>
	<div class="panel-body pn">
	  <div class="table-responsive">
		<table <?php if($this->ion_auth->is_admin()):?>id="sortthis" data-url="<?=base_url();?>admin/testiminol_order"<?php endif;?> class="table table-hover admin-form theme-warning tc-checkbox-1 fs13">
		  <thead>
			<tr class="bg-light">
			  <th class="text-center">№</th>
			  <th class="">Гарчиг</th>
			  <th class="">Товч тайлбар</th>
			  <th class="">Үүссэн <br/> Засагдсан</th>
			  <th class="">Зураг</th>
			  <th class="text-right">Үйлдэл<br/>Төлөв</th>
			</tr>
		  </thead>
		  <tbody>
			<?php foreach($testiminols as $testiminol):?>
			<tr data-id="<?=$testiminol['id'];?>">
			  <td class="text-center order">
				<?=$testiminol['id'];?>
			  </td>
			  <td class=""><?=$testiminol['title_0'];?></td>
			  <td class=""><?=$testiminol['content_0'];?></td>
			  <td class=""><?php echo date('Y-m-d H-i-s',$testiminol['created']);?><br/><?php echo date('Y-m-d H-i-s',$testiminol['updated']);?></td>
			<!--  <td class=""><?php echo (($testiminol['pic']==="")?"<img data-src='holder.js/100x100/text:зураггүй'>":"<img src='".base_url().$testiminol['pic']."' style='height:100px;width:100px;'>")?></td>-->
			<td class=""><i style="font-size:60px;background:#f6891f;color:white;padding:10px" class="fa <?=$testiminol['menu'];?>"></i></td>
			  <td class="text-right">
				<div class="btn-group text-right">
				  <button type="button" class="btn btn-<?php echo (($testiminol['visible']==0)?"warning":"success")?> br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  <?php echo (($testiminol['visible']==0)?"<i class=\"fa fa-eye-slash\"></i> Харагдахгүй":"<i class=\"fa fa-eye\"></i> Харагдана")?>
					<span class="caret ml5"></span>
				  </button>
				   <ul class="dropdown-menu" role="menu">
					<li class="<?php echo (($testiminol['visible']==1)? "active" : "") ?>">
					  <a href="<?=base_url();?>admin/testiminol_visible/<?=$testiminol['id']?>/1"><i class="fa fa-eye"></i> Харагдана</a>
					</li>
					<li class="<?php echo (($testiminol['visible']==0)? "active" : "") ?>">
					  <a href="<?=base_url();?>admin/testiminol_visible/<?=$testiminol['id']?>/0"><i class="fa fa-eye-slash"></i> Харагдахгүй</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href="<?=base_url();?>admin/testiminol_edit/<?=$testiminol['id']?>"><i class="fa fa-wrench"></i> Засах</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href="#removeModal<?=$testiminol['id'];?>" data-target="#removeModal<?=$testiminol['id'];?>"  data-toggle="modal"><i class="fa fa-trash"></i> Устгах</a>
						<div id="removeModal<?=$testiminol['id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-sm"  style="margin-top:10%;">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Устгахад итгэлтэй байна уу?</h4>
							  </div>
							  <div class="modal-body">
								Та <?=$testiminol['title_0'];?>-г устгах гэж байна!
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
								<a href="<?=base_url();?>admin/testiminol_delete/<?=$testiminol['id']?>" class="btn btn-danger">Устгах</a>
							  </div>
							</div>
						  </div>
						</div>
					</li>
				  </ul>
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