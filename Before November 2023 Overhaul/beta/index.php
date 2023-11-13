<?php include "_includes/header.php" ?>

<body onload="document.forms[0].name.focus();">

<div id="wrapper">


<div class="sidebar cf">
	<div class="contact cf">
		<p class="contact-title">Contact Evergreen Signs</p>
    <form action="thank_you.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
    <ul class="contact-form">

        <li class="contact_pg">
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li class="contact_pg">
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li class="contact_pg">
          <label class="text" for="tel">Phone</label>
          <input name="tel" type="tel" id="tel" tabindex="20" />
        </li>
        <li class="contact_pg">
          <label class="text" for="comments">Message</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li class="contact_pg">
            <input id="send" type="submit" value="Send your message" tabindex="40" />
        </li>
    </ul> 
    </form>
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

<h2>Your Vision ~ Our Passion</h1>

<p>At Evergreen Signs, we supply a wide variety of services; tailor made to help our clients make their vision come alive.  With a family owned atmosphere, we bring passion and a professional approach to all your design and custom signage needs.</p>
</div>




</div><!-- #content -->
</div><!-- #wrapper -->
<?php include "_includes/footer.php" ?>

<script src="_scripts/respond.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script src="_scripts/nav.js"></script>
<script src="_scripts/scripts.js"></script>

<!-- put the following scripts, in order, into components/js/scripts.js to minimize before production -->
<script src="_scripts/jquery.flexslider.js"></script>
<script src="_scripts/lightbox.js"></script>

<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>