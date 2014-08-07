<?php
/*
	Template Name: GALERIES
*/
?>
<?php
	$uri = $_SERVER['REQUEST_URI'];
	$pos = strpos($uri,'/galeries/nggallery/all/');
?>
<script language="Javascript"> 
	document.oncontextmenu = function(){return false}
</script>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<?php
		// get first all galleries & albums
		$album_id = get_post_meta(get_the_ID(),"album_id",true);
		$album = C_Album_Mapper::get_instance()->find($album_id);//El id 2 hace referencia al album de galeries
		$gid = "";
		$or = " gid = ";
		foreach ($album->sortorder as $gallery_id) {
			$gid .= $or.$gallery_id;
			$or = " OR gid = ";
		}
?>
<div id='top-share' class='hidden'|>
	<a href='#' id='see-link'>Link</a>
	<div class='facebook'>
		<div class="fb-share-button" data-type='button'  data-href="#" ></div>
	</div>
</div>
<div id='sharelink' class='hidden'>
	<p class='share-text'>Compartir via Link</p>
	<div id='link-share'></div>
	<p class='ins'>Preciona CTRL + C  para copiar</p>
	<a class='close' href='#'></a>
</div>
<div id='gallery'>
<div class='container-galleries'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title() ?></h1>
	<div class='dot-points'></div>
	<div> <!-- en action para produccion se pone /galeria/ o el nombre de la pagina que usa este template -->
	<?php $lang = qtrans_getLanguage();?>
	<?php 
		if($lang == 'es'){
			$action = "/es/galeria/nggallery/page/1";
		}else{
			$action = "/gallery/nggallery/page/1";
		}
	?>
	<form  method="get" action="<?= $action ?>">
		<?php /*aqui hacemos la consulta de las galerias y las visualizamos en un combobox*/
		global $wpdb;
		$customers = $wpdb->get_results("SELECT gid,name,title FROM wp_ngg_gallery WHERE {$gid};");
		/*la variable selección guardará el valor de seleccion del dropdown menu y asi mostrará el seleccionado*/
		$seleccion = $_GET['gallery'];
		
		echo "<select name='gallery'>";
		//echo "<option value='"Seleccionar Galeria"'>"Seleccionar Galeria"</option> ";
		echo "<option value=''>Seleccionar Álbum</option>";
			
		foreach ($customers as $customer){ /*se hace una comparación entre el valor seleccionado y el de la tabla y se le asigna el selected="selected"
		para que muestre la galería seleccionada por default y en caso contrario imprime el menu del dropdown normal*/
			if ($seleccion == $customer->name){
				echo "<option value = '".$customer->name."' selected='selected'>".$customer->title."</option>"; 
				}else {
						echo "<option value = '".$customer->name."'>".$customer->title."</option>"; 
					}
		}
		echo "</select>";
		?>
		<!-- inicio filtro por tags -->
	      <input type="text" name='tag' value='<?php echo isset($_GET['tag']) && trim($_GET['tag'])?$_GET['tag']:'' ?>'>
		<input type='submit' value='Buscar'/>
		<!-- fin filtro por tags -->
	</form>
	
	</div>
	<?php 
	$picture = isset($_GET['picture'])?$_GET['picture']:'';
	if($picture != ''){
		$gallery = $_GET['gallery'];
		?> <img src="http://injoy-weddings.com/wp-content/gallery/<?= $gallery ?>/<?= base64_decode($picture) ?>" class='image-direction'/> <?php
	}else{ ?>
		<div class='gallery-aux'><?php include_once('galleries-images.php'); ?><div class='clear'></div></div><div class='clear'></div>
	<?php } ?>
<?php endwhile; endif;?></div>
<div class='clear'></div>
</div>
<?php get_footer(); ?>
