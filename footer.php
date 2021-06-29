<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gannett
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="footer-text">
		<?php
				the_custom_logo();
		?>
		<p><span class="bold">HEADQUARTERS</span>: 7950 Jones Branch Drive McLean, VA 22107-0150   |   <a href="tel:7038546000">703-854-6000</a>   |   <a href="mailto:investors@gannett.com">investors@gannett.com</a></p>
		<p>&copy; Gannett Co., Inc. <?php echo date("Y"); ?>. All Rights Reserved.</p>
		<p><a href="<?php echo get_home_url() . '/terms-of-use'?>">Terms of use</a> | <a href="<?php echo get_home_url() . '/cookie-policy'?>">Cookie policy</a> | <a href="<?php echo get_privacy_policy_url();?>">Privacy policy</a> | <a href="<?php echo get_home_url() . '/ccpa' ?>">Your California privacy rights/privacy policy</a></p>
		<!-- <p><a href="<?php echo get_home_url().'/cookie-policy'?>">Do Not Sell My Personal Information/Cookie Settings</a></p>-->
<p class="bold"><a href="<?php echo get_home_url() . '/contact'?>">CONTACT US</a></p>
		<p><a class="fab fa-facebook" href="https://www.facebook.com/GannettCompany"></a><a class="fab fa-twitter" href="https://www.twitter.com/gannett"></a><a class="fab fa-linkedin" href="https://www.linkedin.com/company/gannett"></a></p>

		<!-- OneTrust Cookies Settings button start -->
		<button id="ot-sdk-btn" class="ot-sdk-show-settings">Cookie Settings</button>
		<!-- OneTrust Cookies Settings button end -->

		<!-- OneTrust Cookies Consent Notice start for gannett.com -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="623faaab-060d-4c8e-b1c5-1479d671de86" ></script>
		<script type="text/javascript">
		function OptanonWrapper() { }
		</script>
		<!-- OneTrust Cookies Consent Notice end for gannett.com -->

	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
