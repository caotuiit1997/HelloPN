<!DOCTYPE html>
<html>
<title>Dashboard</title>
<?php include_once("static_header.php");?>
<body class="no-skin">
<?php include("../../../Controllers/PagesController.php"); ?>
<?php include ("header.php"); ?>

<!-- Container -->
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>
		
			<?php include_once("left_nav.php");?>

			<!-- Get pages content -->
			<!-- Adding users form -->
			<div class="main-content">
				<div class="main-content-inner">
					<?php include_once("page_header.php") ?>

					<!-- Get pages content -->
					<?php
                        $content = new Pages();
                        if (isset($_GET['page'])) {
                        	$page = $_GET['page'];
                            if (isset($_GET['action'])) {
                            	$action = $_GET['action'];
                            	$content->fetch_content($page,$action);
                            }
                        }
                    ?>
					<!-- End get pages content -->
				</div><!-- main-content-inner -->
			</div><!-- main-content -->
			<!-- End of get pages content -->
	</div>
</body>
</html>
