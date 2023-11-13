<?php include "_includes/header.php" ?>

<body onload="document.forms[0].name.focus();">

<div id="wrapper">

<div class="sidebar cf">
	<div class="contact cf">
		<p class="contact-title">Contact Evergreen Signs</p>
    <?php require 'contact-form.php'; ?>
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

<div class="thank-you-container">

<h3>Clients</h3>
<p>Our clients range from corporate giants to start up merchants. Come see how we can help you create the perfect display.</p>

<img class="clients-logos-img" src="_images/clients-logos.jpg" border="0" width="100%">
</div>




</div><!-- #content -->
</div><!-- #wrapper -->
<?php local_testing(); ?>
<?php include "_includes/footer.php" ?>

</body>
</html>