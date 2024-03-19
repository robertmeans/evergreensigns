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
		<span><a href="tel:(303)%20674-2715"><img src="_images/phone-icon.jpg" border="0" width="30px"></a><p><a href="tel:(303)%20674-2715">(303) 674-2715</a></p></span>

		<span><img src="_images/email-icon.jpg" border="0" width="30px"><p><a href="mailto:evergreensigns@yahoo.com?subject=Email from Website">evergreensigns@yahoo.com</a></p></span>

		<span><a href="https://maps.apple.com/?q=39.654674280929655,-105.29521309195557" target="_blank"><img src="_images/mailbox-icon.jpg" border="0" width="30px"></a><p class="line1"><a href="https://maps.apple.com/?q=39.654674280929655,-105.29521309195557" target="_blank">26055 Columbine Tr., #201<br>
        Kittridge, CO 80457</a></p></span>

		<span><a href="https://www.facebook.com/evergreensigns" target="_blank"><img src="_images/facebook-icon.jpg" border="0" width="30px"></a><p><a href="https://www.facebook.com/evergreensigns" target="_blank">facebook.com/evergreensigns</a></p></span>

	</div>
	<div class="copyright">
		<?= ewd_copyright(2014); ?> | <div class="put-here"><a class="ewd-tag" href="https://evergreenwebdesign.com" target="_blank" rel="noopener"><i class="fas fa-heart" aria-hidden="true"></i> <span class="ewd-txt">EWD</span></a></div>
	</div>

</div>

<script src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<?php local_testing(); ?>
