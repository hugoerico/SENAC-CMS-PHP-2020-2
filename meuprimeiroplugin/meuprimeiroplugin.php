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