<header id="topbar" class="alt">
<div class="topbar-left">
  <ol class="breadcrumb">
	<li class="crumb-icon"><a href="<?=base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a></li>
	<li class="crumb-active"><a href="#">Сурталчилгааны Жагсаалт</a></li>
  </ol>
</div>
</header>
<section id="content" class="table-layout animated fadeIn">
<div class="tray tray-center">
  <div class="panel">
	<div class="panel-body pn">
	  <div class="table-responsive">
		<table id="sortthis" data-url="<?=base_url();?>admin/banner_order" class="table table-hover admin-form theme-warning tc-checkbox-1 fs13">
		  <thead>
			<tr class="bg-light">
			  <th class="text-center">№</th>
			  <th class="">Баннер</th>
			  <th class="">Үүссэн <br/> Засагдсан</th>
			  <th class="text-right">Үйлдэл<br/>Төлөв</th>
			</tr>
		  </thead>
		  <tbody>
			<?php foreach($banners as $banner):?>
			<tr data-id="<?=$banner['id'];?>">
			  <td class="text-center order">
				<?=$banner['order'];?>
			  </td>
			  <td class=""><div class="iframe_outer"><?=$banner['content'];?></div></td>
			  <td class=""><?php echo date('Y-m-d H-i-s',$banner['created']);?><br/><?php echo date('Y-m-d H-i-s',$banner['updated']);?></td>
			  <td class="text-right">
				<div class="btn-group text-right">
				  <button type="button" class="btn btn-<?php if($banner['visible']==0) { echo "warning"; } else if($banner['visible']==1) { echo "success"; } ?> br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  <?php if($banner['visible']==0) { echo "<i class=\"fa fa-eye-slash\"></i> Харагдахгүй"; } else if($banner['visible']==1) { echo "<i class=\"fa fa-eye\"></i> Харагдана"; }?>
					<span class="caret ml5"></span>
				  </button>
				   <ul class="dropdown-menu" role="menu">
					<li class="<?php echo (($banner['visible']==1)? "active" : "") ?>">
					  <a href="<?=base_url();?>admin/banner_visible/<?=$banner['id']?>/1"><i class="fa fa-eye"></i> Харагдана</a>
					</li>
					<li class="<?php echo (($banner['visible']==0)? "active" : "") ?>">
					  <a href="<?=base_url();?>admin/banner_visible/<?=$banner['id']?>/0"><i class="fa fa-eye-slash"></i> Харагдахгүй</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href="<?=base_url();?>admin/banner_edit/<?=$banner['id']?>"><i class="fa fa-wrench"></i> Засах</a>
					</li>
					<li class="divider"></li>
					<li>
					  <a href="#removeModal<?=$banner['id'];?>" data-target="#removeModal<?=$banner['id'];?>"  data-toggle="modal"><i class="fa fa-trash"></i> Устгах</a>
						<div id="removeModal<?=$banner['id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-sm"  style="margin-top:10%;">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Устгахад итгэлтэй байна уу?</h4>
							  </div>
							  <div class="modal-body">
								Та Сурталчилгаа-г устгах гэж байна!
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
								<a href="<?=base_url();?>admin/banner_delete/<?=$banner['id']?>" class="btn btn-danger">Устгах</a>
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