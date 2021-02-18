<php?
/**
 * Plugin Name: Shortcode
 * Plugin URI:  https://jgduartem.github.io
 * Description: Shortcodes
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://jgduartem.github.io
 * Text Domain: Shortcode
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
function createShortCode() {
     return '<h1>Hola Mundo</h1>';
}
add_shortcode('holamundo', 'createShortCode');
