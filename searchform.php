<form class='blog-search' action="/movimiento-sustentable/" method="get">
	<div class="dot-input"></div>
	<input type="text" name="s" id="search" class="label check-field" value="<?php echo get_search_query() == "" ? "Escribe tu busqueda" : get_search_query(); ?>" title='type your search here' />
	<input type="submit" alt="Search" value='' class='submit' />
</form>