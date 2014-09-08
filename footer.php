<div class="footer">
	<div class="container">
		<div class="gutter">
			<?php
			$defaults = array(
				'theme_location'  => 'social-nav',
				'menu'            => 'social-nav',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => 'social',
				'menu_class'      => 'menu',
				'menu_id'         => 'social-nav',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			wp_nav_menu( $defaults ); ?>


			<?php
				$defaults = array(
					'theme_location'  => 'utility-nav',
					'menu'            => 'utility-nav',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'fNav',
					'menu_class'      => 'menu',
					'menu_id'         => 'footer-nav',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults ); ?>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48042620-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
