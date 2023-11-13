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

<div class="product-galleries cf">
<h3>Wall Mural Graphics</h3>
<p>Just like Michaleangelo except different.</p>
<div class="photos">
<ul>
  <li><a href="_images/wall_01_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/wall_01_sm.jpg" width="100%"></a></li>
  <li><a href="_images/wall_02_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/wall_02_sm.jpg" width="100%"></a></li>
  <!-- <li><a href="_images/wall_03_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/wall_03_sm.jpg" width="100%"></a></li> -->
</ul>
</div>

</div>

</div><!-- #content -->
</div><!-- #wrapper -->
<?php local_testing(); ?>
<?php include "_includes/footer.php" ?>

</body>
</html>