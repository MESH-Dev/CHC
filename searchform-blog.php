<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="Blog Search" value="" name="s" title="Search for:" />
		<input type="hidden" name="search_type" value="blog" />
		<input type="hidden" name="post_type" value="post" />
	</label>
	<input type="submit" class="search-submit" value="Search" hidden="true" />
</form>
