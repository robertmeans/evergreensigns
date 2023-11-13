<!doctype html>
<!--  
      Author: Robert Means
      Date: 11.16.14
      Website: www.robertmeans.com
-->
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
<link rel="stylesheet" href="_css/styles.css?<?php echo time(); ?>">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
<!--
function validateEmail(emailStr) {
var emailPat=/^(.+)@(.+)$/
var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
var validChars="\[^\\s" + specialChars + "\]"
var quotedUser="(\"[^\"]*\")"
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
var atom=validChars + '+'
var word="(" + atom + "|" + quotedUser + ")"
var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
var matchArray=emailStr.match(emailPat)
if (document.forms[0].email.value == "")
      {
      alert("\nThe e-mail field is blank.\n\nPlease enter your e-mail address.")
      document.forms[0].email.focus()
      return false
}
if (matchArray==null) {
  /* Too many/few @'s or something; basically, this address doesn't
     even fit the general mould of a valid e-mail address. */
  alert("_____________________________\n\nYour e-mail address seems incorrect. Please check the following\n\n1. Did you include the \"@\" and the \" . \" (dot)?\n2. Did you include anything other than a \"@\" & \" . \"?\n\nPlease re-enter your e-mail address.\n_____________________________")
  document.forms[0].email.select();
    document.forms[0].email.focus();
  return false
}
var user=matchArray[1]
var domain=matchArray[2]
if (user.match(userPat)==null) {
    // user is not valid
    alert("_____________________________\n\nThe username does not seem to be valid.\n\nPlease check the following:\n\n1. That you entered your e-mail address correctly.\n\nThank you.\n_____________________________")
    document.forms[0].email.select();
    document.forms[0].email.focus();
    return false
}
var IPArray=domain.match(ipDomainPat)
if (IPArray!=null) {
    // this is an IP address
    for (var i=1;i<=4;i++) {
      if (IPArray[i]>255) {
          alert("_____________________________\n\nThe destination IP address you entered is invalid.\n\nPlease check your e-mail address and make the necessary corrections.\n\nThank you.\n_____________________________")
          document.forms[0].email.select();
      document.forms[0].email.focus();
    return false
      }
    }
    return true
}
var domainArray=domain.match(domainPat)
if (domainArray==null) {
  alert("_____________________________\n\nAre you making stuff up now?\n\nThe e-mail address portion of this form is not something to scoff at.\n\nI've been placed here in  your computer to make sure your information is valid. You\nneed to enter your real e-mail address or successfully fake me out to proceed.\n\nThank you.\n_____________________________")
  document.forms[0].email.select();
  document.forms[0].email.focus();
    return false
}
var atomPat=new RegExp(atom,"g")
var domArr=domain.match(atomPat)
var len=domArr.length
if (domArr[domArr.length-1].length<2 ||
    domArr[domArr.length-1].length>3) {
   // the address must end in a two letter or three letter word.
   alert("_____________________________\n\nYour e-mail address must end in a three-letter domain, or two letter country.\n\n_____________________________")
   document.forms[0].email.select();
   document.forms[0].email.focus();
   return false
}
if (len<2) {
   var errStr="_____________________________\n\nYour e-mail address is missing either a username, a hostname or a domain.\nAn e-mail address should include these three basic components:\n\n1. A username - (e.g., YOURNAME@yahoo.com, YOURNAME@mho.net)\n2. A host - (e.g., yourname@YAHOO.com, yourname@MHO.net)\n3. A domain - (e.g., yourname@yahoo.COM, yourname@mho.NET)\n\nPlease make the necessary corrections and press \"Send\".\n-- Thank you, The unforgiving script validating this e-mail field.\n\n_____________________________"
   alert(errStr)
   document.forms[0].email.select();
   document.forms[0].email.focus();
   return false
}
return true;
}

//-->
</script>

<!-- begin Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57717412-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end Google Analytics -->

</head>