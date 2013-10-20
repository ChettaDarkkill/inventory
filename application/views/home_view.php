<!--
<h1>Home</h1>
<h2>Welcome <?php echo $username; ?>!</h2>
<a href="home/logout">Logout</a>
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<title>Inventory System, IT-Helpdesk</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.css" type="text/css" />
	
	<!-- Store Table -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/table/css/demo_page.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/table/css/demo_table.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/table/css/themes/base/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/table/css/themes/smoothness/jquery-ui-1.7.2.custom.css" />
	<script src="<?php echo base_url(); ?>assets/table/js/jquery-1.7.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/table/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/table/js/jquery.jeditable.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/table/js/jquery-ui.js" type="text/javascript"></script>
	<!--<script src="<?php echo base_url(); ?>assets/table/js/jquery.validate.js" type="text/javascript"></script> -->
	<!--<script src="<?php echo base_url(); ?>assets/table/js/jquery.dataTables.editable.js" type="text/javascript"></script> -->
	<!-- end store table -->
	<!-- logout -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logout_drop/pro_drop_1.css" />
	<script src="<?php echo base_url(); ?>assets/logout_drop/stuHover.js" type="text/javascript"></script>
	<!-- end logout -->
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready( function () {
			var oTable = $('#example').dataTable().makeEditable({
								sUpdateURL: "UpdateData.php",
											sAddURL: "AddData.php",
											sDeleteURL: "DeleteData.php"
									});
			
		} );
		
		function popup(url,name,windowWidth,windowHeight){   
			myleft=(screen.width)?(screen.width-windowWidth)/2:100;   
			mytop=(screen.height)?(screen.height-windowHeight)/2:100;     
			properties = "width="+windowWidth+",height="+windowHeight;  
			properties +=",scrollbars=yes, top="+mytop+",left="+myleft;     
			window.open(url,name,properties);  
		} 
		//jquery menu
		$(document).ready(function() {
				$('.myMenu > li').bind('mouseover', openSubMenu);
				$('.myMenu > li').bind('mouseout', closeSubMenu);
				
				function openSubMenu() {
					$(this).find('ul').css('visibility', 'visible');	
				};
				
				function closeSubMenu() {
					$(this).find('ul').css('visibility', 'hidden');	
				};
						   
		});
	</script>
	<!-- End Table-->
 </head>
 <body>
	<?php echo $this->load->view('template/header'); ?>
	<?php echo $this->load->view('template/menu',array('id'=>'1')); ?>
	<div id="con">
		<div id="my_content">
		<?php
			if(isset($content_text)) echo $content_text;
			if(isset($content_view)){
				if(isset($content_data)){
					foreach($content_data as $key=>$value){$data[$key]=$value;}
					$this->load->view($content_view,$data);	
				}else{
					$this->load->view($content_view);
				}
			}
        ?>
		</div>
		<!-- <?php echo $this->load->view('template/other_link'); ?> comment by SUT-->
	</div>
	<?php echo $this->load->view('template/footer'); ?>
	
 </body>
</html>

