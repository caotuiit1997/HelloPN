<!DOCTYPE html>
<html>
<title>Home</title>
<?php include ("../Elements/static_header.php");?>
<body class="w3-theme-l5">

<!-- Inherit from index -->
<?php include ("../Elements/header.php"); ?>

<!-- Page Container -->
<?php include ("Elements/user_header.php"); ?>

<div class="w3-container w3-content" style="max-width:1400px;margin-top:5px">
    <!-- The Grid -->
    <div class="w3-row">
        <?php include ("Elements/left_nav.php"); ?>
        <?php include ("Elements/content.php");?>
        <?php include ("Elements/right_nav.php");?>
        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html> 
