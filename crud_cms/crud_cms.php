<?php

/*
* Plugin Name: Meu Plug-in com menu
* Plugin URI: https://sp.senac.br
* Description: Este é um plug-in que mostra como trabalhar com o menu do admin do WP
* Version: 0.0.1
* Author: Hugo Erico
* Author URI: https://github.com/hugoerico
* License: CC BY
*/

if (!defined('WPINC')) exit; // para proteger o codigo de ser digitado na url direto

register_activation_hook(__FILE__, 'criar_tabela');

function criar_tabela()
{
    global $wpdb;
    $wpdb->query(" CREATE TABLE {$wpdb->prefix}agenda (id BIGINT UNSIGNED NOT NULL
         AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, 
         whatsapp BIGINT UNSIGNED NOT NULL) ");
}