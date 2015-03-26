<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="Evergreen Signs has been serving the Front Range and surrounding mountain communities since 1990.">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
	
<title>Evergreen Signs</title>
<link rel="stylesheet" href="_css/styles.css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>

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


<div class="thank-you-container">

<p>Your message was sent successfully!</p>

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