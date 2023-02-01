      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
			<li class="crumb-icon">
              <a href="<?=base_url();?>admin">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-active">
              <a href="#">Цэсний жагсаалт</a>
            </li>
          </ol>
        </div>
         <div class="topbar-right hidden-xs hidden-sm">
          <!-- <a href="<?=base_url();?>admin/menu_add" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> Нэмэх</a> -->
        </div>
      </header>
      <section id="content" class="table-layout animated fadeIn">
<?php
	function get_menus($id=0,$class="",$list = ""){
		$CI = & get_instance();
		$CI->db->where('subid',$id);
		$CI->db->order_by('order','asc');
		$result = $CI->db->get('lang');
				$list =  "<ol class=\"dd-list pb15\">";
					foreach($result->result_array() as $row) {
						$list .=  "<li class=\"dd-item {$class}\" data-id=\"{$row['id']}\">";
							$list .=  "<div class=\"dd-handle\">{$row['order']}: {$row['title_0']}</div>
							<div class=\"dd-content\">
								<div class=\"media\">
								<div class=\"pull-right fs11 fw600 btn-group text-right\">
								<button type=\"button\" class=\"btn btn-warning br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
								  <i class=\"fa fa-cogs\"></i> Үйлдэл
									<span class=\"caret ml5\"></span>
								  </button>
								<ul class=\"dropdown-menu\" role=\"menu\">
									<li>
									  <a href=\"".base_url()."admin/lang_edit/".$row['id']."\"><i class=\"fa fa-wrench\"></i> Засах</a>
									</li>
									<li class=\"divider\"></li>
									<li>
									  <!--<a href=\"#removeModal".$row['id']."\" data-target=\"#removeModal".$row['id']."\"  data-toggle=\"modal\"><i class=\"fa fa-trash\"></i> Устгах</a>-->
										<div id=\"removeModal".$row['id']."\"  class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
										  <div class=\"modal-dialog modal-sm\"  style=\"margin-top:10%;\">
											<div class=\"modal-content\">
											  <div class=\"modal-header\">
												<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
												<h4 class=\"modal-title\" id=\"myModalLabel\">Устгахад итгэлтэй байна уу?</h4>
											  </div>
											  <div class=\"modal-body\">
												Та ".$row['title_0']."-г устгах гэж байна!
											  </div>
											  <div class=\"modal-footer\">
												<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Болих</button>
												<a href=\"".base_url()."admin/menu_delete/".$row['id']."\" class=\"btn btn-danger\">Устгах</a>
											  </div>
											</div>
										  </div>
										</div>
									</li>
								  </ul>
								</div>
								<a class=\"media-left\" href=\"#\">
									<img ".(($row['pic']==="")?"":"src='".base_url().$row['pic']."'")." style=\"width:46px;height:42px;\" data-src=\"holder.js/46x42/text:зураг\" alt=\"holder-img\">
								</a>
								<div class=\"media-body\">
								  <h4 class=\"media-heading\">{$row['title_0']}
									<small class=\"text-muted\">- ".date('Y-m-d H-i-s',$row['created'])."</small>
								  </h4>
								  <p class=\"mb5\">{$row['description']}</p>
								  <p class=\"mb5\">
									<a class=\"text-system\" target=\"_blank\" href=\"{$row['id']}\"> Гадаад холбоос</a>
								  </p>
								  <p class=\"mb5\">Сүүлд засагдсан - ".date('Y-m-d H-i-s',$row['updated'])."</p>
								  <p class=\"mb5 ".(($row['visible']==1)?"text-success":"text-warning")."\">".(($row['visible']==1)?"<i class='fa fa-eye'></i> харагдана":"<i class='fa fa-eye-slash'></i> харагдахгүй")."</p>
								</div>
								</div>
							</div>";
						$list .= get_menus($row['id'],$class,$list);
						$list .=  "</li>";
				/*		echo $row['id']."-".$row['name_mn']."<br/>";
						$CI->menu_showNested($row['id'],0);*/
					}
				$list .=  "</ol>";
		return $list;
	}
?>
        <div class="tray tray-center">
          <div class="row mt5">
			<div class="col-md-12"> 
			  <h5 class="text-muted">Үндсэн цэс</h5>
              <hr class="short alt">
                <div class="dd" id="nestable">
				<?php echo get_menus(0,0,"dd-primary","");?>
				</div>
			</div>
			  <div class="nestable-output hidden">
				<form action="<?=base_url();?>admin/menu_order" id="order_menu">
				<textarea id="nestable-output0" name="menu0" class="form-control hidden"></textarea>
				</form>
			  </div>	
				<script src="<?=base_url();?>assets/admin/vendor/plugins/nestable/jquery.nestable.js"></script>
<script>
   /* var updateOutput = function(e,n) {
      var list = e.length ? e : $(e.target),
        output = list.data('output');
      if (window.JSON) {
        output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
		if(n!=1){
		$.ajax({
			type: "POST",
			url: $('form#order_menu').attr('action'),
			data: $('form#order_menu').serialize(),
				success: function(msg){
						new PNotify({
						title: 'Үйлдэл амжилттай хийгдлээ!',
						text: 'Цэсний дараалал засагдсан',
						shadow: true,
						opacity: 0.8,
						addclass: 'stack_top_right',
						type: 'success',
						//stack: Stacks['stack_top_right'],
						width: '400px',
						delay: 1400
					  });
				},
				error: function(){
				 new PNotify({
					title: 'Сервертэй холбогдож чадсангүй!',
					text: 'Та дахин оролдоно уу',
					shadow: true,
					opacity: 0.8,
					addclass: 'stack_top_right',
					type: 'danger',
					//stack: Stacks['stack_top_right'],
					width: '400px',
					delay: 1400
				  });
			}
		});
		}
      } else {
        output.val('JSON browser support required for this demo.');
      }
    };

    // Init Nestable on list 1
    $('#nestable').nestable({
      group: 1
    }).on('change', updateOutput);

    // nestable serialized output functionality
    updateOutput($('#nestable').data('output', $('#nestable-output0')),1);

    // nestable menu functionality
    $('#nestable-menu').on('change', function(e) {
      var target = $(e.target),
        action = target.data('action');
      if (action === 'expand-all') {
        $('.dd').nestable('expandAll');
      }
      if (action === 'collapse-all') {
        $('.dd').nestable('collapseAll');
      }
    });*/
</script>
          </div>
        </div>
      </section>