<?php /* Smarty version Smarty-3.1.14, created on 2013-11-11 03:19:12
         compiled from "post.html" */ ?>
<?php /*%%SmartyHeaderCode:47475267b28d984e64-40632751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ab422652129f8ef4890c7d39ce98230e568bc5' => 
    array (
      0 => 'post.html',
      1 => 1384139922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47475267b28d984e64-40632751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5267b28da77194_32222220',
  'variables' => 
  array (
    'name' => 0,
    'navBarColor' => 0,
    'groups' => 0,
    'scroll' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267b28da77194_32222220')) {function content_5267b28da77194_32222220($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>L & D - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>
		 <style>
		.navbar { background: <?php echo $_smarty_tpl->tpl_vars['navBarColor']->value;?>
; }
        </style>		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
			
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
						        L & D - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
			 
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			 
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						 
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					 
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

						<?php echo $_smarty_tpl->getSubTemplate ('secure_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('groups'=>$_smarty_tpl->tpl_vars['groups']->value), 0);?>
	

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Upload</a>
							</li>
						
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

		<div class="page-content">
		
		 <div class="page-header">
		   <h1> Upload <small><i class="icon-double-angle-right"></i></small></h1>
		 </div>
		 <div class="row" style="min-height:1200px;">
		 <div class="col-xs-7" >
								<!-- PAGE CONTENT BEGINS -->
								
                                <iframe id="slideshow_frame" border="1" src="/learnnow/app/ui/preview.html" frameborder="0" width="100%" height="400px" marginheight="0" marginwidth="0"  scrolling="<?php echo $_smarty_tpl->tpl_vars['scroll']->value;?>
">
								
								</iframe>
							    <!-- <div >Views 3000 | like 250</div> -->
								<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
	       <div class="col-xs-5 " style="box-sizing:border-box;">
			<form role="form" class="form form-vertical"  name="contentForm" id="contentForm" method="POST" action="/learnnow/app/ui/forms/content-upload.php">
				<div class="form-group ">
				<label class="" for="contentType">Content type</label>
				<div class="">
					<select name="contentType" id="contentType"> 
						<option value="blog" selected="selected">Blog</option> 
						<option value="html5">HTML5 presentation</option> 
						<option value="youtube">Youtube</option> 
					</select>
				
					<!-- <span><img src="assets/images/gallery/blog.png"  height="35px" id="content-type-icon"/></span> -->
				</div>
				</div>
				 <div class="form-group">
					 <label class=" " for="contentUrl"> URL</label>
						 <div class="">
						   <input type="text" id="contentUrl" name="contentUrl" placeholder="Enter blog / Post url" size="40"/>
						</div>
				</div>
				 <div class="form-group">
					<label class="" for="contentTitle">Title</label>
					 <div class="">
					   <input type="text" id="contentTitle" name="contentTitle" placeholder="Eg: Android Vs iOS" size="40" />
					</div>
				</div>
				<div class="form-group">
				<label class="" for="tags">Tags</label>
					<div class="">
						<input type="text" name="tags[]"  id="tags"   placeholder="Add tags here..hit enter" rows="4"/>
					</div>
				</div>
		
			  <!-- <div class="form-group">
				  <label class="" for="groups">Groups</label>
				  <div class="">
				   <select multiple="" class="width-80 chosen-select tag-input-style" name="groups[]" size="40" id="groups" data-placeholder="Choose the Groups...">
					<option value="">&nbsp;</option>
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
					<?php } ?>
				   </select>
				  </div>												
			   </div> -->
				
			  
			
				
			   <div class="form-group">
				  
					<div class="">
						<button class="btn btn-primary">Submit content</button>
						 <br/><br/>
						<div class="" id="submitResults"></div>
					 </div>
			   </div>	
			  
				<div class="form-group">
								
							
										
			   </div>	
			
			</form>
		  </div>
	   </div><!-- /.row -->
			
			    
			 
				</div><!-- /.page-content -->
				</div><!-- /.main-content -->
			 </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
 
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/underscore.string.min.js"></script>
		<script src="assets/js/purl.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script>
		var groups = [];
		
		$( document ).ready(function() {
		
		   $('#contentType').val("blog").change();
		  $(".chosen-select").chosen(); 
		  
		  $( "#content-type" ).change(function() {
		     $selectedType = this.value;
			 $("#content-type-icon").attr("src","assets/images/gallery/"+this.value + ".png");
           });
		
		  var tag_input = $('#tags');
		  if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
		  {
			tag_input.tag(
			  {
				placeholder:tag_input.attr('placeholder'),
				//enable typeahead by specifying the source array
				 
				
			  }
			);
		  }
		  else {
			//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
			tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="8">'+tag_input.val()+'</textarea>').remove();
			//$('#form-field-tags').autosize({append: "\n"});
		  }
		
		
		 $( "#contentUrl" ).change(function() {
			 var url = $(this).val();
			 var modifiedUrl = url;
			
             if(_.string.startsWith(url,"http://www.youtube.com/watch?v="))	{
			  
			  var parsedUrl = $.url(url);
			 
              modifiedUrl = "http://www.youtube.com/embed/"+parsedUrl.param("v");
			  $('#contentType').val("youtube").change();
			  $(this).val(modifiedUrl);
            }
			else if(_.string.startsWith(url,"http://slid.es")){
			
			  modifiedUrl = url + "/fullscreen#/";
			  $(this).val(modifiedUrl);
			  $('#contentType').val("html5").change();
			}

               $("#slideshow_frame").attr('src',modifiedUrl);			  
		  });
		  
		  	$("#contentForm").on("submit",function(e){
			   // $("#submitResults").html("");
			    e.preventDefault();
			   
			    uploadContent();
				return false;
			});	
		  
	   });
	   
	    function uploadContent(){
         
		
		 var contentInfo = new Object();
		 
		 contentInfo.xtype = $("#contentType").val();
		 contentInfo.contentUrl = $("#contentUrl").val();
		 contentInfo.title = $("#contentTitle").val();
		 contentInfo.tags = $("#tags").val();
		 //contentInfo.groups = $("#groups").val();
		 contentInfo.clipThumbnailUrl = "";
		// contentInfo.intro = $("#intro").val();
		contentInfo.uploadDate = new Date();
		contentInfo.contributor = "Admin";
		 
		 
         var json = JSON.stringify(contentInfo);
		 

		  $.ajax({
		  type: "POST",
		  url: "/learnnow/app/ui/forms/content-upload.php",
		  data: { contentInfo: json },
		  success: successFn,
		  dataType: "json"
		});

        
       }
	   
	    function successFn(data){
		 
		 
		
		 str = "<font color=black size=4>" + "Content Submitted successfully" + "</font>";
		 
		 
		 if(data.code != 200){
		  str = data.statusDesc;
		  str = "<font color=red size=4>"+str + "</font>";
		 }
		 $("#submitResults").html(str);
	   }	   
		  
		</script>
 
		<!-- inline scripts related to this page -->
	</body>
</html>
<?php }} ?>