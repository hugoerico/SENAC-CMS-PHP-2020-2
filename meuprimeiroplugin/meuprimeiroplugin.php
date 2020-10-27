<?php
/*
* Plugin Name: Meu Primeiro Plug-in
* Plugin URI: https://sp.senac.br
* Description: Esta é o meu plugin
* Version: 0.0.1
* Author: Hugo Erico
* Author URI: 
* License: CC BY
*/

add_filter('login_errors','altera_msg_login');

function altera_msg_login(){

    return 'credenciais inválidas!!!';
}

add_action('wp_head', 'colocar_og_tags');

function colocar_og_tags(){

    if(is_single()){
        $dados= get_post(get_the_ID());
        $nomedosite= get_bloginfo();
        $resumo = $dados->post_excerpt;
        $titulo = $dados->post_title;

        echo " <meta property='og:title' content='" . $titulo . "'>\n
        
        
        <meta property='og:site_name' content='" . $nomedosite . "'>\n
        
        <meta property='og:url' content='" . get_permalink() . "'>\n
        
        <meta property='og:description' content='" . $resumo . "'>\n";
    }

}