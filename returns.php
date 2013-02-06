<?php
/*
Plugin Name: Double return fixer
Plugin URI: http://github.com/gboone
Description: There is a problem with posting wordprocessing-generated documents in WordPress. Often times writers don't know the difference between a paragraph break and a line break; they shouldn't, they're not web developers. What happens, though, is when writers add a double return after paragraphs it interferes with the bottom and top margins for <pre><p></p></pre> blocks. Consequently, when you copy and paste a document into the text editor, every paragraph has too much space after it. It's ugly and a pain to fix. What this plugin does is cuts out that extra space through a shortcode. Anything inside the [paper]tags[/paper] will be be styled without the spacing. <strong>TL;DR:</strong> It cuts automatic spacing out linebreaks.
Version: 1.0
Author: Greg Boone
Author URI: http://harmsboone.org/author/greg-boone
License: GPL2: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/
add_filter('the_content', 'do_shortcode', 11);

function poetry_shortcode($atts, $content = null) {
    return '<style>.paper > p {margin-bottom: 0px;}</style><div class="paper">' . $content . '</div>';
}
add_shortcode('paper', 'poetry_shortcode');
