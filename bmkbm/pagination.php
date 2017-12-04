<div class="row pagination">
	<div class="col-12 text-center">
		<?php
		global $wp_query;

		$big = 99999999; // need an unlikely integer
		$pagination_array = array(
			'base' => str_replace(
		    $big, '%#%', esc_url(
		      get_pagenum_link( $big )
		    )
		  ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		);
		echo paginate_links($pagination_array);
		?>
  </div>
</div>
