<div class="w3-col m7">
    <div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'Posts')" id="defaultOpen">Post</button>
		  <button class="tablinks" onclick="openCity(event, 'Debate')">Debate</button>
		  <button class="tablinks" onclick="openCity(event, 'Q and A')">Q and A</button>
		  <button class="tablinks" onclick="openCity(event, 'Events')">Events</button>
		  <button class="tablinks" onclick="openCity(event, 'PostForm')" style="background: black;color:white">Compose</button>
    </div>
    <!-- Display content of each tab -->
	<div id="Posts" class="tabcontent">
	  <?php include ("events.php"); ?>
	</div>

	<div id="Debate" class="tabcontent">
	  <?php include ("debates.php"); ?>

	</div>

	<div id="Q and A" class="tabcontent">
	  <?php include ("events.php"); ?>
	</div>

	<div id="Events" class="tabcontent">
	  <?php include ("events.php"); ?>
	</div>

	<div id="PostForm" class="tabcontent">
	  <?php include ("form_compose.php"); ?>
	</div>
</div>