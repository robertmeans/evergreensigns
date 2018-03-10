	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>
	 <div class="footer cf">

	<div class="footer-content-right">
		<img src="_images/footer-bkg.png" width="100%">
	</div>

	<div class="footer-content-left">
		<img src="_images/phone-icon.jpg" border="0" width="30px"><p>303.674.2715</p>
		<img src="_images/email-icon.jpg" border="0" width="30px"><p><a href="mailto:sales@evergreensigns.com?subject=Email from Website">sales@evergreensigns.com</a></p>
		<img src="_images/mailbox-icon.jpg" border="0" width="30px"><p class="line1">27972 Meadow Dr, Suite 220<br>
		Evergreen, CO 80439</p>
		<img src="_images/website-icon.jpg" border="0" width="30px"><p>evergreensigns.com</p>
		<img src="_images/facebook-icon.jpg" border="0" width="30px"><p><a href="http://www.facebook.com/evergreensigns">facebook.com/evergreensigns</a></p>
	</div>
	<div class="copyright">
		<?= ewd_copyright(2015); ?> | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a>
	</div>

</div>