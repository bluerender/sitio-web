## Widget Carrusel en content en todo el sitio: 
_Para crear la zona del widget: en function.php del tema hijo_ [Ver enlace](https://github.com/bluerender/sitio-web/blob/main/function.php)
Dependiendo de la zona donde queramos visualizar el widget dentro del sitio web tendremos que editar un archivo u otro. En este ejemplo se ha utilizado el archibo header.php ya que el widget va en la zona de cabecera.

***
Para comprobar que archivo debemos de editar se utilizará un plugin (Show Current Template) que nos mostrara la archivo que se está visualizando en cada momento.
Tambien nos ayudará bastante utilizar el inspector (devtools). CTRL+SHIFT+I 
________
**Utilizar zona (header.php) de widget creada a proposito en function.php:** Bloque utilizado: _AR: Carrusel de entradas de 3 columnas_
`

			<?php if ( is_active_sidebar( 'carrusel' ) ) : ?>
				<div id="carrusel" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'carrusel' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

`