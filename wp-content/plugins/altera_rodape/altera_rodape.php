<?php
/*
Plugin Name: Altera Rodapé
Plugin URI: http://exemplo.com
Description: Este plugin altera o rodapé do blog
Version: 1.0
Author: José Wilton
Author URI: https://github.com/joseWilton
Text Domain: altera_rodape
License: GPLv2
*/

function plugin_altera_rodape(){

	echo "Meu primeiro plugin";
}

add_action('wp_footer','plugin_altera_rodape');