<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Dashboard</a>
		</li>

		<li>
			<a href="#">Forms</a>
		</li>
		<li class="active">
		<?php
			if (isset($_GET['page'])) {
                $page = $_GET['page'];
                echo "<a href='#'>".$page."</a>";
			}
		?>
		</li>
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
