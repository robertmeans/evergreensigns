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

<div class="product-galleries cf">
<h3>Panel Signs</h3>
<p>Three quarter, half quarter, round corner... we've got what you need.</p>
<div class="photos">
<ul>
  <li><a href="_images/panel_01_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_01_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_02_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_02_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_03_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_03_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_04_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_04_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_05_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_05_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_06_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_06_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_07_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_07_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_08_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_08_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_09_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_09_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_10_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_10_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_11_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_11_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_12_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_12_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_13_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_13_sm.jpg" width="100%"></a></li>
  <li><a href="_images/panel_14_lg.jpg" data-lightbox="image-1" data-title=""><img src="_images/panel_14_sm.jpg" width="100%"></a></li>
</ul>
</div>

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