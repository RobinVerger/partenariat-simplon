<?php
/*
Plugin Name: simplon_plugin
Plugin URI: https://github.com/RobinVerger/partenariat-simplon
Description: Un plugin qui fait de la pub pour simplon
Version: 1.0
Author: Robin
Author URI : https://github.com/RobinVerger
License : lps2
*/

function ShortcodeSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co">simplon.co</a> - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'ShortcodeSimplon');
