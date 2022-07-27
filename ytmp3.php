<?php

/**
 * YT MP3
 *
 * @package     YTMP3
 * @author      Henri Susanto
 * @copyright   2022 Henri Susanto
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: YT MP3
 * Plugin URI:  https://github.com/susantohenri
 * Description: This plugin convert youtube to mp3
 * Version:     1.0.0
 * Author:      Henri Susanto
 * Author URI:  https://github.com/susantohenri
 * Text Domain: yt-mp3
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_shortcode('ytmp3', function () {
    return "
        <input type='text' id='ytmp3_url' >
        <button onclick='ytmp3_convert()'>convert</button>
        <div id='ytmp3_download'></div>
        <script type='text/javascript'>
            function ytmp3_convert () {
                var yturl = document.getElementById('ytmp3_url').value
                document.getElementById('ytmp3_download').innerHTML = `
                    <iframe style='height: 50px; border:none; overflow:hidden' src='https://loader.to/api/button/?url=`+ yturl +`&f=mp3'></iframe>
                `;
            }
        </script>
    ";
});