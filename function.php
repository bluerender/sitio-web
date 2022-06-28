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

/* CÉSAR nuevo widget 
content-page.php o header.php */
function widgets_carrusel() {
    register_sidebar( array(
        'name'          => 'Widget carrusel',
        'id'            => 'carrusel',
        'before_widget' => '<div class="classe-widget">',
        'after_widget'  => '</div>',
    ) );
}
