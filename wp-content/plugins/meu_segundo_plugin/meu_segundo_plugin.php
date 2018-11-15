<?php

/*
Plugin Name: Personalizar Painel 
Plugin URI: https://github.com/joseWilton
Description: plugin desenvolvido para personalizar painel
Version: 1.0
Author: José Wilton
Text Domain: meu_segundo_plugin
Licence:GPL2
*/

class Segundo_Plugin{
    
    private static $instance;
    const TEXT_DOMAIN = "meu_segundo_plugin";

    public static function getInstance(){

        if(self::$instance == null){
            self::$instance = new self();
        }
    }
    private function __construct(){
        // Desativando a action welcome_panel
        remove_action('welcome_panel','wp_welcome_panel');
        add_action('welcome_panel',array($this,'my_welcome_panel')); // adicionando a função que vai trocar o painel de bem vindo
        add_action('admin_enqueue_scripts',array($this,'add_css')); //adicionando a função que carrega o css
        add_action('init',array($this,'load_textdomain'));
    }

    function load_textdomain(){
        load_plugin_textdomain(self::TEXT_DOMAIN,false,dirname(plugin_basename(__FILE__))); // carregando o plugin de tradução
    }
    function my_welcome_panel(){
        ?>
        <div class="welcome-panel-content">
            <h3><?= __('Seja Bem vindo ao painel administrativo','meu_segundo_plugin'); ?></h3>
            <p><?= __('Siga-nos nas redes sociais','meu_segundo_plugin'); ?></p>
        </div>
        <div id="icons">
            <a href="#" target="_blank">
                <img src="http://localhost/curso_wordpress/wordpress/wp-content/uploads/2018
                /11/1474968161-youtube-circle-color.png" alt="Youtube">
            </a>
            <a href="#" target="_blank">
                <img src="http://localhost/curso_wordpress/wordpress/wp-content/uploads/2018
                /11/1474968150-facebook-circle-color.png" alt="Facebook">
            </a>
        </div>
        <?php
    }

    function add_css(){

        wp_register_style('meu-segundo-plugin',plugin_dir_url(__FILE__).'css/meu-segundo-plugin.css');
        wp_enqueue_style('meu-segundo-plugin');
    }
}
Segundo_Plugin::getInstance();

