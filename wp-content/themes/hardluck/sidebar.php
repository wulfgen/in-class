<aside id="sidebar"> 
		<section id="categories" class="widget">
			<h3 class="widget-title"> Categories </h3>
			<ul>
				<?php wp_list_categories(array (
					'title_li'	=> '',
					'number'	=> 10,
					'orderby'	=> 'count',
					'order'     => 'desc',
					'show_count'     => 1,

				)); ?>               
			</ul>
		</section>
		<section id="archives" class="widget">
			<h3 class="widget-title"> Archives </h3>
			<ul>
				<?php wp_get_archives( array(
				'type'	=> 'yearly',
				 ) ); ?>
			</ul>
			<!-- <php  wp_tag_cloud( array (
				 'smallest' => '12',
				 'largest' =>'12',
				 )); ?> -->

		</section>
		<section id="tags" class="widget">
			<h3 class="widget-title"> Tags </h3>
			<?php wp_list_categories(array(
					'taxonomy' => 'post_tag',
					'title_li'	=> '',
					'number'	=> 10,
					'orderby'	=> 'count',
					'order'     => 'desc',
					'show_count'     => 1,
				) ) ?>
		</section>
		<section id="meta" class="widget">
			<h3 class="widget-title"> Meta </h3>
			<ul>
				<!-- <li><a href="/wp-admin/">Site Admin</a></li> shows all the time -->
				<!-- <li><a href="/wp-login.php?action=logout">Log out</a> </li> -->
				<?php wp_register();  // show admin link if logged in ?>
				<li><?php wp_loginout(); ?></li>
			</ul>
		</section>
	</aside><!-- end #sidebar -->