<div>
<?php	/*aqui recibimos la opcion del combobox y hacemos la busqueda para sacar el id*/
	global $wpdb;
	/*se hace una verificación si se presionó el boton IR entra al if sino se va al else*/	
	if(!empty($_GET['gallery']) AND $_GET['tag']==FALSE){
    		/*.. aqui se hace la vista segun la selección de la galería... */
    		$select = $_GET['gallery'];
    		$galeria = $wpdb->get_results("SELECT gid,name FROM wp_ngg_gallery WHERE name='$select';");
    		foreach ($galeria as $gal){
			/*aqui asignamos el ID de la galería a una variable que se usará para crear las vistas con el shortcode de nextgen*/
			$mostrar = $gal->gid;	
		}
		$v = 1;
		/*se crea la vista segun la galeria seleccionada por el usuario*/
     		echo do_shortcode('[nggallery template="autospazio" ngg_force_update='.$v.' id='.$mostrar.' override_thumbnail_settings="1" thumbnail_width="174" thumbnail_height="174" thumbnail_crop="1" show_slideshow_link="0"]');

	}else{/*en caso contrario se genera la galeria de todas las imagenes*/
		$etiquetita = $_GET['tag']; /*aqui recibimos la etiqueta a buscar del form etiqueta y se la pasamos a nggtags para que genere la galeria*/
		if (!empty($_GET['tag'])){
			echo do_shortcode('[nggtags template="autospazio" ngg_force_update='.$v.' gallery="'.$etiquetita.'" override_thumbnail_settings="1" thumbnail_width="174" thumbnail_height="174" thumbnail_crop="1" show_slideshow_link="0"]');
		}else {
			echo do_shortcode("[album id={$album_id} template='autospazio' ngg_force_update={$v}]﻿");	
		}
	}	
?>
</div> 