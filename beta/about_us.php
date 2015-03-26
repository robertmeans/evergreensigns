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

<div class="thank-you-container">

<h3>About Us</h3>
<p>Evergreen Signs………………….Altitude inspired</p>

<p>Since 1986, Evergreen Signs has been serving the needs of our clients by providing the highest quality and innovative solutions to meet signage and visual communication needs.  We have personally watched the sign industry evolve throughout the years from precision hand lettering to full color digital printing and beyond.  As the industry has evolved so has Evergreen Signs.  We combine the latest technological advances with traditional handcrafted techniques of sign design and fabrication to better serve our customers.</p>

<p>One thing that has not changed over the years is the diverse needs of our customers.  We go the extra mile to meet the needs of a customer base that ranges from individuals, to commercial businesses, and non-profit accounts.  Focusing on the fact that each customer is unique, we provide a wide range of services and innovative solutions to best meet our customer’s needs.  From custom logo design, to 3-dimensional signage and 23kt gold leaf, Evergreen Signs can produce a unique one-of-a-kind visual communication statement.</p>

<p>Nestled in the breathtaking Foothills west of Denver Colorado, we are proud to call Evergreen, Colorado home.  This quaint mountain community provides the ideal inspirational setting for Evergreen Signs.  So for your next signage or graphics project, why not contact us for some fresh and new “Altitude Inspiration”…It’ll take your business to new heights!</p>


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