		</div>
		<footer id="footer" role="contentinfo">
			<div class="footer-con" id="copyright">
				<?php 
					echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'customtheme' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
				?>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>