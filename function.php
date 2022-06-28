/*IMPORTANTE: Este código no sustituye enteramente al contenido del archivo function.php 
tanto del tema padre como del tema hijo
Este código es para añadir al final del contenido del archivo function.php del tema hijo.*/


//CÉSAR nuevo widget 
function nuevo_widgets_init() {
    register_sidebar( array(
        'name'          => 'Zona antes del menú',
        'id'            => 'criptomonedas',
        'before_widget' => '<div class="classe-widget">',
        'after_widget'  => '</div>',
    ) );
}

add_action( 'widgets_init', 'nuevo_widgets_init' );
