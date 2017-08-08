<div class="w3-col m7">
    <div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'Posts')" id="defaultOpen">My Post</button>
		  <button class="tablinks" onclick="openCity(event, 'Debate')">My Debate Topics</button>
		  <button class="tablinks" onclick="openCity(event, 'Q and A')">My Q and A</button>
		  <button class="tablinks" onclick="openCity(event, 'PostForm')" style="background: black;color:white">Compose</button>
    </div>
    <!-- Display content of each tab -->
	<div id="Posts" class="tabcontent">
	  <?php include ("Elements/events.php"); ?>
	</div>

	<div id="Debate" class="tabcontent">
	  <?php include ("Elements/events.php"); ?>

	</div>

	<div id="Q and A" class="tabcontent">
	  <?php include ("Elements/events.php"); ?>
	</div>

	<div id="PostForm" class="tabcontent">
	  <?php include ("Elements/post_form.php"); ?>
	</div>
</div>