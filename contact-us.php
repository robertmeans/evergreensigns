<?php include "_includes/header.php" ?>

<body onload="document.forms[0].name.focus();">

<div id="wrapper">

<div class="sidebar cf">
	<div class="contact-mobile cf">
		<p class="contact-title-mobile">You can't get to the mobile contact form through a window this wide!</p>
    <p></p>

	</div>
</div>

<div class="small-logo-container">
<div class="small-logo-bkg">
  <img src="_images/small-logo-bkg.jpg" width="100%">
</div>  
<div class="small-logo">
  <a href="index.php"><img src="_images/small-logo.png" width="100%"></a>
</div>
</div>

<?php include "_includes/nav.php" ?>

<div class="content cf">

<div class="contact-us-container cf">

    <?php require 'contact-form.php'; ?>

</div>

</div><!-- #content -->
</div><!-- #wrapper -->
<?php local_testing(); ?>
<?php include "_includes/footer.php" ?>

</body>
</html>