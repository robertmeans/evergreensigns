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
  <a href="index.php"><img src="_images/small-logo.png" width="100%"></a>
</div>
</div>

<?php include "_includes/nav.php" ?>

<div class="content cf">

<div class="services-container cf">

<ul class="services-ul">
  <li><h3>Design Services</h3>Consultation <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Logo Design <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Concept Renderings <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Permit Procurement</li>
  
  <li><h3>3-Dimensional Signage</h3>Carved/Routed Wood &amp; Urethane SignFoam <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Sandblasted Wood <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Urethane SignFoam <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> CNC Milled Aluminum <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Architectural Raised Letters <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Sculptural/3D Elements <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Specialty Finishes <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Channel Lettering <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Back-Lit Framed Signs</li>
  
  <li><h3>Hand Finishing</h3>Painted Wood <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Urethane SignFoam &amp; Metal <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Sign Restorations <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Airbrush <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Pictorals <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Faux Finishing</li>
  
  <li><h3>Fine Gilding</h3>Specializing in 23kt Gold Leaf <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Glass &amp; Surface Gilding <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Copper Leaf <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Palladium Leaf <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Variegated Leaf</li>
  
  <li><h3>Custom Brackets &amp; Fabrication</h3>Metal Scroll Brackets <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Wood &amp; Steel Support Frames <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Custom Carpentry <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Custom Welding &amp; Fabrication <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> PowderCoat &amp; Sprayed Finishes</li>
  
  <li><h3>Vinyl &amp; Digital Printing</h3>Banners <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Vehicle Graphics <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Window/Door Graphics <img class="middot" src="_images/middot.gif" border="0" width="6" height="16">Site Signs <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Custom Decals <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> A-Frame Signs <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Large Format Digital Printing</li>
  
  <li><h3>Custom Glass Print Encapsulation &amp; Etching</h3>Waterproof Fine Art and Photographic Print Encapsultation on Glass <img class="middot" src="_images/middot.gif" border="0" width="6" height="16"> Custom Glass Etching</li>
</ul>

</div><!-- .product-galleries cf -->

</div><!-- .content cf -->




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