<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<fieldset>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search: Type + Hit Return" />
		
	</fieldset>
</form>