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
  <img src="_images/small-logo.png" width="100%">
</div>
</div>

<?php include "_includes/nav.php" ?>

<div class="content cf">

<div id="gallery">
<div class="flexslider">
  <ul class="slides">
    <li>
      <a href="_images/homepage-slide-001-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-001-sm.jpg" /><!-- <p class="flex-caption">Built from repourposed wood.</p> --></a>
    </li>
    <li>
      <a href="_images/homepage-slide-002-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-002-sm.jpg" /></a>
    </li>
    <li>
      <a href="_images/homepage-slide-003-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-003-sm.jpg" /><!-- <p class="flex-caption">This sign ROCKS!</p> --></a>
    </li>
    <li>
      <a href="_images/homepage-slide-004-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-004-sm.jpg" /></a>
    </li>
    <li>
      <a href="_images/homepage-slide-005-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-005-sm.jpg" /></a>
    </li> 
    <li>
      <a href="_images/homepage-slide-006-lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/homepage-slide-006-sm.jpg" /></a>
    </li>        
  </ul>
</div>
</div>


<div class="text-container">

<h2>Your Vision | Our Passion</h1>

<p>At Evergreen Signs, we supply a wide variety of services; tailor made to help our clients make their vision come alive.  With a family owned atmosphere, we bring passion and a professional approach to all your design and custom signage needs.</p>
</div>


</div><!-- #content -->
</div><!-- #wrapper -->
<?php local_testing(); ?>
<?php include "_includes/footer.php" ?>

</body>
</html>