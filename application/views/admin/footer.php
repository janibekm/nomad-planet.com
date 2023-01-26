     <footer id="content-footer" class="affix">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">© <?php echo date('Y')." ".site_url();?></span>
          </div>
          <div class="col-md-6 text-right">
            <span class="footer-meta">Developed by <b><a href="mailto:m.janibek@gmail.com">Jani</a></b></span>
            <a href="#content" class="footer-return-top">
              <span class="fa fa-arrow-up"></span>
            </a>
          </div>
        </div>
      </footer>
    </section> 
  </div>
  <!-- FileUpload JS -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/fileupload/fileupload.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/holder/holder.min.js"></script>
  
   <!-- Dropzone JS -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/dropzone/dropzone.min.js"></script>
  
  <!-- Cropper Image Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/cropper/cropper.min.js"></script>
  <!--<script src="<?=base_url();?>assets/admin/vendor/plugins/cropper/cropper.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/cropper/crop-avatar/js/main.js"></script>-->
  <!-- Summernote Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/summernote/summernote.min.js"></script>

   <!-- Select2 Plugin Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/select2/select2.min.js"></script>
  
   <!-- Time/Date Plugin Dependencies -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/globalize/src/core.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/moment/moment.min.js"></script>
  <!-- DateTime Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
  <!-- PNotify -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/pnotify/pnotify.js"></script>
   <!-- Mixitup Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/mixitup/jquery.mixitup.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/magnific/jquery.magnific-popup.js"></script>
  <!-- Bootstrap colorpicker -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- HighCharts Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/highcharts/highcharts.js"></script>

  <!-- JvectorMap Plugin + US Map (more maps in plugin/<?=base_url();?>assets/admin/tools folder) -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/jvectormap/jquery.jvectormap.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script> 

  <!-- Bootstrap Tabdrop Plugin -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/tabdrop/bootstrap-tabdrop.js"></script>

  <!-- FullCalendar Plugin + moment Dependency -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/fullcalendar/lib/moment.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- Theme Javascript -->
  <script src="<?=base_url();?>assets/admin/tools/js/utility/utility.js"></script>
  <script src="<?=base_url();?>assets/admin/tools/js/demo/demo.js"></script>
  <script src="<?=base_url();?>assets/admin/tools/js/main.js"></script>
  <!-- Ckeditor JS -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/ckeditor/ckeditor.js"></script>  
  <!-- Widget Javascript -->
  <script src="<?=base_url();?>assets/admin/tools/js/demo/widgets.js"></script>
  <style>
  /*dropzone demo css*/
  .dz-demo .dz-message {
	opacity: 0 !important;
  }
  .dropzone .dz-preview.example-preview .dz-success-mark,
  .dropzone-previews .dz-preview.example-preview .dz-success-mark {
	opacity: 1;
  }
  .dropzone .dz-preview.example-preview .dz-error-mark,
  .dropzone-previews .dz-preview.example-preview .dz-error-mark {
	opacity: 0;
  }
  </style> 
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    // Init Demo JS  
    Demo.init();
    // Init Theme Core    
    Core.init();
	var base_url = '<?=base_url();?>';
    $('.demo-auto').colorpicker();
	//var previewImg = $('.fileupload-preview > img');
	var previewImg = $('#previewImg');
	$("#imgUrl").bind("change paste keyup", function() {
	   previewImg.attr('src',base_url+$(this).val());
	});
	$("#imgUrl1").bind("change paste keyup", function() {
	   $("#previewImg1").attr('src',base_url+$(this).val());
	});
	$("#imgUrl2").bind("change paste keyup", function() {
	   $("#previewImg2").attr('src',base_url+$(this).val());
	});
	$('.summernote_init').summernote({
	  height: 100, //set editable area's height
	  focus: false, //set focus editable area after Initialize summernote
	  airmode:true,
	  oninit: function() {},
	  onChange: function(contents, $editable) {},
	  toolbar: [
		['style', ['bold', 'italic', 'underline', 'clear']],
		['para', ['ul', 'ol']]
	]
	});
	
	$('#summernote_iframe').summernote({
	  height: 400, //set editable area's height
	  focus: false, //set focus editable area after Initialize summernote
	  enterHtml: '<br>',
	  //airmode:true,
	  oninit: function() {},
	  onChange: function(contents, $editable) {},
	  onImageUpload: function(files, editor, welEditable) {
			var data = new FormData();
			data.append("path", 'img/banners/');
            data.append("file", files[0]);
            $.ajax({
                data: data,
                type: "POST",
                url: base_url+"admin/upload2",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, base_url+url);
                }
            });
	  },
	  toolbar: [
		 ['insert', ['picture','video']],
		 ['view', ['fullscreen', 'codeview']]
	]
	});
	
	CKEDITOR.disableAutoInline = true;
	CKEDITOR.baseHref  = '<?=base_url();?>';
	var editor, html = '';
	function editors(type){
		if(type==1){
			if(editor){
			editor.destroy();
			editor = null;
			}
			//$('#editor').val(""+editor.getData());
			$('.summernote').summernote({
			  height: 255, //set editable area's height
			  focus: false, //set focus editable area after Initialize summernote
			  airmode:true,
			  oninit: function() {},
			  onChange: function(contents, $editable) {},
			});
		}
		else {
			var text = $('.summernote').code();
			$('.summernote').destroy();
			$('.summernote').val(text);
			if(!editor){
				if($("#editor").length == 0) {return;}
				editor = CKEDITOR.replace('editor', {
				  height: 210,
				  on: {
					instanceReady: function(evt) {
					  $('.cke').addClass('admin-skin cke-hide-bottom');
					}
				  },
				});
			}
		}
	}
	editors(0);
	$('#editor_change').change(function(){
		if($(this).is(':checked')){	editors(0);	}
		else {	editors(1);	}
	});
	Dropzone.options.dropZone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 40, // MB
      addRemoveLinks: true,
      dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
      dictResponseError: 'Server not Configured',
	  init: function() {
		this.on("success", function(file,response) {
		$('#files').val($('#files').val() + response + "*");
		fileList[i] = {"serverFileName" : response, "fileName" : file.name,"fileId" : i };
        i++;
		console.log('url: '+ $('#fileList').data('url'));
		$.ajax({
			type: 'POST',
			url: $('#fileList').data('url'),
			data: {'refresh':$('#fileList').data('url')},
			success: function(msg){
				$('#fileList').html(msg);
						new PNotify({
						title: 'Үйлдэл амжилттай хийгдлээ!',
						text: 'Жагсаалтаас холбоосоо хуулж авна уу',
						shadow: true,
						opacity: 0.8,
						addclass: 'stack_top_right',
						type: 'success',
						//stack: Stacks['stack_top_right'],
						width: '400px',
						delay: 1400
					  });},
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
			  });}
		});
		});
		this.on("removedfile", function(file) {
			var rmvFile = "";
			for(var f=0;f<fileList.length;f++){
				if(fileList[f].fileName == file.name){
					rmvFile = fileList[f].serverFileName;
				}
			}
			if (rmvFile){
				var picsArray = $('#files').val().split('*');
				var newpics = "";
				for(f=0;f<picsArray.length;f++){
					if(picsArray[f]!=rmvFile && picsArray[f]!=""){
						newpics +=picsArray[f] + "*";
					}
				}
				$('#files').val(newpics);
				$.ajax({
					url: $("#dropZone").data('rmurl'),
					type: "POST",
					data: { "rmfile" : rmvFile,"path":$("#dropZone").data('rmpath')}
				});
			}
		});
	  }
		
    };
    var fileList = new Array;
	var i =0;
    Dropzone.options.dropZone2 = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 30, // MB
	  acceptedFiles: 'image/*',
      addRemoveLinks: true,
      dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
      dictResponseError: 'Server not Configured',
	  init: function() {
		this.on('sending', function(file, xhr, formData){
			formData.append('path', $("#dropZone2").data('rmpath'));
		});
		this.on("success", function(file,response) { $('#pics').val($('#pics').val() + response + "*");
		fileList[i] = {"serverFileName" : response, "fileName" : file.name,"fileId" : i };
        i++;
		});
		this.on("removedfile", function(file) {
		var rmvFile = "";
		for(var f=0;f<fileList.length;f++){
			if(fileList[f].fileName == file.name)
			{
				rmvFile = fileList[f].serverFileName;
			}
		}
		if (rmvFile){
			var picsArray = $('#pics').val().split('*');
			var newpics = "";
			for(f=0;f<picsArray.length;f++){
				if(picsArray[f]!=rmvFile && picsArray[f]!=""){
					newpics +=picsArray[f] + "*";
				}
			}
			$('#pics').val(newpics);
			$.ajax({
				url: $("#dropZone2").data('rmurl'),
				type: "POST",
				data: { "rmfile" : rmvFile,"path":$("#dropZone2").data('rmpath')}
			});
		}
		});
	  }
    };
    // DEMO CODE - creates mock uploads upon pageload
	if ( $( ".example-preview" ).length ) {
    setTimeout(function() {
      var Drop = $('#dropZone2');
      Drop.addClass('dz-started dz-demo');
		
      setTimeout(function() {
        $('.example-preview').each(function(i, e) {
          var This = $(e);

          var thumbOut = setTimeout(function() {
            Drop.append(This);
            This.addClass('animated fadeInRight').removeClass('hidden');
          }, i * 135);

        });
      }, 750);

    }, 800);
	}
    // Demo code 
    $('.example-preview').on('click', 'a.dz-remove', function() {
		var rmvFile = $(this).data('rmimg');
		var picsArray = $('#pics').val().split('*');
		var newpics = "";
		for(var f=0;f<picsArray.length;f++){
			if(picsArray[f]!=rmvFile && picsArray[f]!=""){
				newpics +=picsArray[f] + "*";
			}
		}
		$('#pics').val(newpics);
		$.ajax({
			url: $("#dropZone2").data('rmurl'),
			type: "POST",
			data: { "rmfile" : rmvFile,"path":$("#dropZone2").data('rmpath')}
		});	
      $(this).parent('.example-preview').remove();
	  if ( $( ".example-preview" ).length == 0) {
		var Drop = $('#dropZone2');
      Drop.removeClass('dz-started dz-demo');
	  }
    });
	
	 // Init Select2 - Basic Single
    $(".select2-single").select2();
	
    // Init Select2 - Basic Multiple
    $(".select2-multiple").select2({
      placeholder: $(this).data('placeholder'),
       allowClear: true,
	   multiple:true,
	   tags: true
    });
	
	$("#selectShow").change(function(){
		var value = $("#selectShow option:selected").val();
		var theDiv = $(".show" + value);
		theDiv.slideDown().removeClass("hidden");
		theDiv.siblings('[class*=show]').slideUp(function() { $(this).addClass("hidden"); });
		var theDiv1 = $(".all");
		$('.fac').each(function(){
			$(this).hide();
		});
		if(value==0){
			theDiv1.slideDown().slideUp(function() { $(this).addClass("hidden"); });
		}
		else {
			theDiv1.slideDown().removeClass("hidden");
			$('.fac'+value).each(function(){
				$(this).show();
			});
		}
	});
	
	// Init DateTimepicker - fields
    $('#datetimepicker1').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss',
		defaultDate: new Date()
	});
	
	$("#menutype").change(function(){
		var change = $(this).data('change');
		$.ajax({
			url:$(this).data('url'),
			type:'POST',
			data: {type:$(this).val(),current:$(this).data('current'),select:$(this).data('select')},
			success: function( data ) {
				$("#menus").html(data);
			}
		});
	});
	var Stacks = {
      stack_top_right: {
        "dir1": "down",
        "dir2": "left",
        "push": "top",
        "spacing1": 10,
        "spacing2": 10
      },
      stack_top_left: {
        "dir1": "down",
        "dir2": "right",
        "push": "top",
        "spacing1": 10,
        "spacing2": 10
      },
      stack_bottom_left: {
        "dir1": "right",
        "dir2": "up",
        "push": "top",
        "spacing1": 10,
        "spacing2": 10
      },
      stack_bottom_right: {
        "dir1": "left",
        "dir2": "up",
        "push": "top",
        "spacing1": 10,
        "spacing2": 10
      },
      stack_bar_top: {
        "dir1": "down",
        "dir2": "right",
        "push": "top",
        "spacing1": 0,
        "spacing2": 0
      },
      stack_bar_bottom: {
        "dir1": "up",
        "dir2": "right",
        "spacing1": 0,
        "spacing2": 0
      },
      stack_context: {
        "dir1": "down",
        "dir2": "left",
        "context": $("#stack-context")
      },
    }
	$("#delete_selected").click(function(){
		$.ajax({
			type: "POST",
			url: $('form#delete_selected').attr('action'),
			data: $('form#delete_selected').serialize(),
				success: function(msg){
				 window.location.href=$('form#delete_selected').data('reload');
				},
				error: function(){
				 new PNotify({
					title: 'Сервертэй холбогдож чадсангүй!',
					text: 'Та дахин оролдоно уу',
					shadow: true,
					opacity: 0.8,
					addclass: 'stack_top_right',
					type: 'danger',
					stack: Stacks['stack_top_right'],
					width: '400px',
					delay: 1400
				  });
			}
		});
	});
	
	
	
    $('#selecctall').change(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
	
	 var msgListing = $('#message-table > tbody > tr > td');
    var msgCheckbox = $('#message-table > tbody > tr input[type=checkbox]');

    // on message table checkbox click, toggle highlighted class
    msgCheckbox.on('click', function() {
      $(this).parents('tr').toggleClass('highlight');
    });

    // on message table row click, redirect page. Unless target was a checkbox
    msgListing.not(":first-child").on('click', function(e) {

      // stop event bubble if clicked item is not a checkbox
      e.stopPropagation();
      e.preventDefault();

      // Redirect to message compose page if clicked item is not a checkbox
      window.location = $(this).parents('tr').data('url');
    });
	
	
	//Sort Table
		//Helper function to keep table row from collapsing when being sorted
	var fixHelperModified = function(e, tr) {
		var $originals = tr.children();
		var $helper = tr.clone();
		$helper.children().each(function(index)
		{
		  $(this).width($originals.eq(index).width())
		});
		return $helper;
	};
	
	//Make diagnosis table sortable
	$("#sortthis tbody").sortable({
    	helper: fixHelperModified,
		stop: function(event,ui) {
			renumber_table('#sortthis');
		}
		}).disableSelection();
	//Sort Table End
	
	
	
	
	
    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish 
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before 
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        //demoHighCharts.init();
        //runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });


    // Init plugins for ".task-widget"
    // plugins: Custom Functions + jQuery Sortable
    //
    var taskWidget = $('div.task-widget');
    var taskItems = taskWidget.find('li.task-item');
    var currentItems = taskWidget.find('ul.task-current');
    var completedItems = taskWidget.find('ul.task-completed');

    // Init jQuery Sortable on Task Widget
    taskWidget.sortable({
      items: taskItems, // only init sortable on list items (not labels)
      handle: '.task-menu',
      axis: 'y',
      connectWith: ".task-list",
      update: function( event, ui ) {
        var Item = ui.item;
        var ParentList = Item.parent();

        // If item is already checked move it to "current items list"
        if (ParentList.hasClass('task-current')) {
            Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
        }
        if (ParentList.hasClass('task-completed')) {
            Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
        }
      }
    });

    // Custom Functions to handle/assign list filter behavior
    taskItems.on('click', function(e) {
      e.preventDefault();
      var This = $(this);
      var Target = $(e.target);

      if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
        This.remove();
        return;
      }

      if (Target.parents('.task-handle').length) {
		      // If item is already checked move it to "current items list"
		      if (This.hasClass('item-checked')) {
		        This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
		      }
		      // Otherwise move it to the "completed items list"
		      else {
		        This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
		      }
      }

    });

	 // Cropper Demo
	  var cropimage = $("#cropimage");
	  var imagePrev = $("#imagePrev");
	  var URL = window.URL || window.webkitURL;
	  $('#backcrop').click(function() {
		  $(cropimage).fadeOut().promise().done(function(){
			$(imagePrev).fadeIn();
			});
	  });
	    
	  /*Crop starts here*/
  var sendcropdata = null;
  var console = window.console || { log: function () {} };
  var $image = $('.img-container > img');
  var $download = $('#download');
  var $dataX = $('#dataX');
  var $dataY = $('#dataY');
  var $dataHeight = $('#dataHeight');
  var $dataWidth = $('#dataWidth');
  var $dataRotate = $('#dataRotate');
  var $dataScaleX = $('#dataScaleX');
  var $dataScaleY = $('#dataScaleY');
  var size = $('button[data-method="getCroppedCanvas"]').data('option');
  var options = {
        aspectRatio: size.width / size.height,
		viewMode:2,
        preview: '.img-preview',
        crop: function (e) {
          $dataX.val(Math.round(e.x));
          $dataY.val(Math.round(e.y));
          $dataHeight.val(Math.round(e.height));
          $dataWidth.val(Math.round(e.width));
          $dataRotate.val(e.rotate);
          $dataScaleX.val(e.scaleX);
          $dataScaleY.val(e.scaleY);
        },
		//zoomable:false,
	    //dragCrop: false,
	    //cropBoxMovable: true,
		built: function () {
		  // Width and Height params are number types instead of string
			$image.cropper("setCropBoxData", {left:0,top:0, width: '50%'});
			//$image.cropper("setCanvasData", {left:0,top:0});
		}
      };


  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();


  // Cropper
  $image.on({
    'build.cropper': function (e) {
    //  console.log(e.type);
    },
    'built.cropper': function (e) {
    //  console.log(e.type);
    },
    'cropstart.cropper': function (e) {
    //  console.log(e.type, e.action);
    },
    'cropmove.cropper': function (e) {
    //  console.log(e.type, e.action);
    },
    'cropend.cropper': function (e) {
    //  console.log(e.type, e.action);
    },
    'crop.cropper': function (e) {
    //  console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
    },
    'zoom.cropper': function (e) {
    //  console.log(e.type, e.ratio);
    }
  }).cropper(options);


  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }

  // Options
  $('.docs-toggles').on('change', 'input', function () {
    var $this = $(this);
    var name = $this.attr('name');
    var type = $this.prop('type');
    var cropBoxData;
    var canvasData;

    if (!$image.data('cropper')) {
      return;
    }

    if (type === 'checkbox') {
      options[name] = $this.prop('checked');
      cropBoxData = $image.cropper('getCropBoxData');
      canvasData = $image.cropper('getCanvasData');

      options.built = function () {
        $image.cropper('setCropBoxData', cropBoxData);
        $image.cropper('setCanvasData', canvasData);
      };
    } else if (type === 'radio') {
      options[name] = $this.val();
    }

    $image.cropper('destroy').cropper(options);
  });


  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if ($image.data('cropper') && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      result = $image.cropper(data.method, data.option, data.secondOption);
      switch (data.method) {
        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {

            // Bootstrap's Modal
            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);
			sendcropdata = result.toDataURL();
            /*if (!$download.hasClass('disabled')) {
              $download.attr('href', result.toDataURL());
            }*/
          }
          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }

    }
  });


  // Keyboard
  $(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });


  // Import image
  var $inputImage = $('#inputImage');
  var URL = window.URL || window.webkitURL;
  var blobURL;

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;

      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          blobURL = URL.createObjectURL(file);
          $image.one('built.cropper', function () {

            // Revoke when load complete
            URL.revokeObjectURL(blobURL);
          }).cropper('reset').cropper('replace', blobURL);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }
	$(document).on('click', '#sendcrop', function(){
		$('#pic').val(sendcropdata);
		$('.modal').modal('hide');
	});
	  /*Crop end*/
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  $('#cropimageinput').click(function() {
		  $(imagePrev).fadeOut().promise().done(function(){
			$(cropimage).fadeIn();
			
			/*crop*/
		
	  
	  
			});
		});
	
	// To keep our code clean and modular, all custom functionality will be
    // contained inside a single object literal called "dropdownFilter".
    var dropdownFilter = {
      // Declare any variables we will need as properties of the object
      $filters: null,
      $reset: null,
      groups: [],
      outputArray: [],
      outputString: '',

      // The "init" method will run on document ready and cache any jQuery objects we will need.
      init: function() {
        var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "dropdownFilter" object so that we can share methods and properties between all parts of the object.
        self.$filters = $('#select-filters');
        self.$reset = $('#mix-reset');
        self.$container = $('#mix-container');
        self.$filters.find('fieldset').each(function() {
          self.groups.push({
            $dropdown: $(this).find('select'),
            active: ''
          });
        });
        self.bindHandlers();
      },

      // The "bindHandlers" method will listen for whenever a select is changed. 
      bindHandlers: function() {
        var self = this;
        // Handle select change    
        self.$filters.on('change', 'select', function(e) {
          e.preventDefault();
          self.parseFilters();
        });
        // Handle reset click
        self.$reset.on('click', function(e) {
          e.preventDefault();
          self.$filters.find('select').val('');
          self.parseFilters();
        });
      },

      // The parseFilters method pulls the value of each active select option
      parseFilters: function() {
        var self = this;

        // loop through each filter group and grap the value from each one.
        for (var i = 0, group; group = self.groups[i]; i++) {
          group.active = group.$dropdown.val();
        }

        self.concatenate();
      },

      // The "concatenate" method will crawl through each group, concatenating filters as desired:
      concatenate: function() {
        var self = this;

        self.outputString = ''; // Reset output string

        for (var i = 0, group; group = self.groups[i]; i++) {
          self.outputString += group.active;
        }

        // If the output string is empty, show all rather than none:
        !self.outputString.length && (self.outputString = 'all');

        //console.log(self.outputString); 
        // ^ we can check the console here to take a look at the filter string that is produced

        // Send the output string to MixItUp via the 'filter' method:
        if (self.$container.mixItUp('isLoaded')) {
          self.$container.mixItUp('filter', self.outputString);
        }
      }
    };

    // To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "checkboxFilter".
    var checkboxFilter = {

      // Declare any variables we will need as properties of the object
      $filters: null,
      $reset: null,
      groups: [],
      outputArray: [],
      outputString: '',

      // The "init" method will run on document ready and cache any jQuery objects we will need.
      init: function() {
        var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.

        self.$filters = $('#checkbox-filters');
        self.$reset = $('#mix-reset2');
        self.$container = $('#mix-container');

        self.$filters.find('fieldset').each(function() {
          self.groups.push({
            $inputs: $(this).find('input'),
            active: [],
            tracker: false
          });
        });

        self.bindHandlers();
      },

      // The "bindHandlers" method will listen for whenever a form value changes. 
      bindHandlers: function() {
        var self = this;

        self.$filters.on('change', function() {
          self.parseFilters();
        });

        self.$reset.on('click', function(e) {
          e.preventDefault();
          self.$filters[0].reset();
          self.parseFilters();
        });
      },

      // The parseFilters method checks which filters are active in each group:
      parseFilters: function() {
        var self = this;

        // loop through each filter group and add active filters to arrays
        for (var i = 0, group; group = self.groups[i]; i++) {
          group.active = []; // reset arrays
          group.$inputs.each(function() {
            $(this).is(':checked') && group.active.push(this.value);
          });
          group.active.length && (group.tracker = 0);
        }

        self.concatenate();
      },

      // The "concatenate" method will crawl through each group, concatenating filters as desired:
      concatenate: function() {
        var self = this,
          cache = '',
          crawled = false,
          checkTrackers = function() {
            var done = 0;

            for (var i = 0, group; group = self.groups[i]; i++) {
              (group.tracker === false) && done++;
            }

            return (done < self.groups.length);
          },
          crawl = function() {
            for (var i = 0, group; group = self.groups[i]; i++) {
              group.active[group.tracker] && (cache += group.active[group.tracker]);

              if (i === self.groups.length - 1) {
                self.outputArray.push(cache);
                cache = '';
                updateTrackers();
              }
            }
          },
          updateTrackers = function() {
            for (var i = self.groups.length - 1; i > -1; i--) {
              var group = self.groups[i];

              if (group.active[group.tracker + 1]) {
                group.tracker++;
                break;
              } else if (i > 0) {
                group.tracker && (group.tracker = 0);
              } else {
                crawled = true;
              }
            }
          };

        self.outputArray = []; // reset output array

        do {
          crawl();
        }
        while (!crawled && checkTrackers());

        self.outputString = self.outputArray.join();

        // If the output string is empty, show all rather than none:
        !self.outputString.length && (self.outputString = 'all');

        //console.log(self.outputString); 
        // ^ we can check the console here to take a look at the filter string that is produced

        // Send the output string to MixItUp via the 'filter' method:
        if (self.$container.mixItUp('isLoaded')) {
          self.$container.mixItUp('filter', self.outputString);
        }
      }
    };

    // Init multiselect plugin on filter dropdowns
    $('#filter1').multiselect({
      buttonClass: 'btn btn-default',
    });
    $('#filter2').multiselect({
      buttonClass: 'btn btn-default',
    });

    // Init checkboxFilter code
    checkboxFilter.init();

    // Init dropdownFilter code
    dropdownFilter.init();

    var $container = $('#mix-container'), // mixitup container
      $toList = $('.to-list'), // list view button
      $toGrid = $('.to-grid'); // list view button

    // Instantiate MixItUp
    $container.mixItUp({
      controls: {
        enable: false // we won't be needing these
      },
      animation: {
        duration: 400,
        effects: 'fade translateZ(-360px) stagger(45ms)',
        easing: 'ease'
      },
      callbacks: {
        onMixFail: function() {}
      }
    });

    $toList.on('click', function() {
      if ($container.hasClass('list')) {
        return
      }
      $container.mixItUp('changeLayout', {
        display: 'block',
        containerClass: 'list'
      }, function(state) {
        // callback function
      });
    });
    $toGrid.on('click', function() {
      if ($container.hasClass('grid')) {
        return
      }
      $container.mixItUp('changeLayout', {
        display: 'inline-block',
        containerClass: 'grid'
      }, function(state) {
        // callback function
      });
    });

    // Add Gallery Item to Lightbox
    $('.mix img').magnificPopup({
      type: 'image',
      callbacks: {
        beforeOpen: function(e) {
          // we add a class to body to indicate overlay is active
          // We can use this to alter any elements such as form popups
          // that need a higher z-index to properly display in overlays
          $('body').addClass('mfp-bg-open');

          // Set Magnific Animation
          this.st.mainClass = 'mfp-zoomIn';

          // Inform content container there is an animation
          this.contentContainer.addClass('mfp-with-anim');
        },
        afterClose: function(e) {

          setTimeout(function() {
            $('body').removeClass('mfp-bg-open');
            $(window).trigger('resize');
          }, 1000)

        },
        elementParse: function(item) {
          // Function will fire for each target element
          // "item.el" is a target DOM element (if present)
          // "item.src" is a source that you may modify
          item.src = item.el.attr('data-src');
        },
      },
      overflowY: 'scroll',
      removalDelay: 200, //delay removal by X to allow out-animation
      prependTo: $('#content_wrapper')
    });
	
	

  });
  //Sorttable
  	//Renumber table rows
function renumber_table(tableID) {
	var order = [];
	$(tableID + " tr").each(function() {
		count = $(this).parent().children().index($(this)) + 1;
		$(this).find('.order').html(count);
		order[count-1] = $(this).data('id');
	});
	 $.ajax({
			type: 'POST',
			url: $(tableID).data('url'),
			data: {'order':order},
			success: function(msg){
						new PNotify({
						title: 'Үйлдэл амжилттай хийгдлээ!',
						text: 'Дараалал засагдсан',
						shadow: true,
						opacity: 0.8,
						addclass: 'stack_top_right',
						type: 'success',
						//stack: Stacks['stack_top_right'],
						width: '400px',
						delay: 1400
					  });},
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
			  });}
	 });
}
  //Sort Table
  </script>
</body>
</html>