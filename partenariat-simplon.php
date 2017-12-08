<?php
/*
Plugin Name: simplon_plugin
Plugin URI: https://github.com/RobinVerger/partenariat-simplon
Description: Un plugin qui fait de la pub pour simplon
Version: 1.0
Author: Robin
*/

function ShortcodeSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire simplon.co - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'ShortcodeSimplon');
