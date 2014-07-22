</div></div></div>
<?php wp_footer(); ?>
	<?php $lang = qtrans_getLanguage();?>
	<script type="text/javascript">
		var template_directory = "<?php bloginfo('template_directory') ?>";
		var href_general = "<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']   ?>"
		<?php $picture = isset($_GET['picture'])?$_GET['picture']:false ?>
		<?php if($picture == false){ ?>

		jQuery.fn.selectText = function(){
   			var doc = document;
   			var element = this[0];
   			console.log(this, element);
   			if (doc.body.createTextRange) {
       			var range = document.body.createTextRange();
       			range.moveToElementText(element);
       			range.select();
   			} else if (window.getSelection) {
       			var selection = window.getSelection();        
       			var range = document.createRange();
       			range.selectNodeContents(element);
       			selection.removeAllRanges();
       			selection.addRange(range);
   			}
		};
		jQuery(function($) {
    			var nextgen_fancybox_init = function() {
    			var selector = nextgen_lightbox_filter_selector($, $(".ngg-fancybox"));
        		selector.fancybox({
            		titlePosition: 'inside',
            		overlayColor :'black',
            		// Needed for twenty eleven
            		onComplete: function() {
            			var href = $(this).attr('href');
            			var s = href.split('#')
            			var href_general2 = '';
            			href_general2 = href_general + '&picture=' + s[1];
            			//link = "<p><a href='#' id='see-link'><b>Link</b/></a></p>";
            			$('#link-share').html("http://" + href_general2);
            			//$('#fancybox-title').prepend(link);
					$('#link-share').selectText();
					$('#see-link').attr('href',"http://" + href_general2);
            			//$('#fancybox-title').prepend("<a href='http://www.facebook.com/sharer.php?u=http://" + href_general2 + "' target='_blank' onClick='jsOnclick(this); return false' >Compartir en Facebook</a>");
                			$('#fancybox-wrap').css('z-index', 10000);
                			$('#top-share').removeClass('hidden');
                			var url  = "http://" + href_general2;
                			$('.fb-share-button').attr('href', url) 
            		},
            		onClosed:function(){
    					$('#sharelink').fadeOut('fast').addClass('hidden');
    					$('#top-share').addClass('hidden');
            		}
        		});
   		 	};
   			$(this).bind('refreshed', nextgen_fancybox_init);
    			nextgen_fancybox_init();

    			$('body').on('click',"#fancybox-close",function(e){
    				$('#sharelink').fadeOut('fast').addClass('hidden');
    				$('#top-share').addClass('hidden');
    			});
		});	
	<?php } ?>
	</script>  
<footer><div class='container'>
	<div class='colum'>
		<p class='title'><?= $lang =='es'?'Politicas':'Policies' ?></p>

		<div class='popup_text'><p><?= $lang =='es'?'Política de Huracanes':'Hurricane Policy' ?></p>
			<div class='answer'></div>
		</div>
		<div class='popup_text'><p><?= $lang =='es'?'Política de Privacidad':'Privacy Policy' ?></p>
			<div class='answer'></div>
		</div>
		<div class='popup_text'><p><?= $lang =='es'?'Términos y condiciones':'Terms and Conditions' ?></p>
			<div class='answer'></div>	
		</div>
		<div class='popup_text'><p><?= $lang =='es'?'Política de pagos':'Payment Policy' ?></p>
			<div class='answer'></div>
		</div>
	</div>
	<div class='colum'>
		<p class='title'><?= $lang =='es'?'Formas de Pago':'Payment Methods' ?></p>
		<p>
			<span class='paypal'></span>
			<span class='visa'></span>
			<span class='masterdcard'></span>
			<span class='american'></span>
		</p>
	</div>
	<div class='colum'>
		<p class='title'><?= $lang =='es'?'Dirección':'Address' ?></p>
		<p>Cancún Quintana Roo <br />
			México</p>
	</div>		
	<div class='colum'>
		<p class='title'><?= $lang =='es'?'Contacto':'Contact' ?></p>
		<p><a href="tel:529988818753">Tel: +52 998 880 81 53</a></p>
		<p><a href='mailto:info@injoy-weddings.com'>info@injoy-weddings.com</a></p>	
	</div>	
	<div class='colum last'>
		<p class='title'><?= $lang =='es'?'Redes Sociales':'Social Networks' ?></p>
		<a href="https://www.facebook.com/injoyevents" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/face.png'></a>
		<a href="https://twitter.com/InJoyweddings" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/twitter.png'></a>
       	<a href="http://www.pinterest.com/danyplanny/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/pinterest.png'></a>
        	<a href="https://plus.google.com/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/google+.png'></a>
  	</div>
  	<div class='clear'></div>	
</div></footer>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.js' ></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.ui.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.validate.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jQuery.migrate.min.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/interactions.js'></script>
</body>
</html>
