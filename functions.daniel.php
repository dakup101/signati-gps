<?php
// General
require_once __DIR__ . '/src/php/general/general.php';
// ACF options page
require_once __DIR__ . '/src/php/acf/options.php';
// Menu array
require_once __DIR__ . '/src/php/menu/wp-menu-array.php';

// Custom post types
require_once __DIR__ . '/src/php/custom-posts/vehicles-functionalities.php';
require_once __DIR__ . '/src/php/custom-posts/functionalities.php';


add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');



/*************** ALLOW SVG ***************/
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Custom excerpt length
function wpdocs_custom_excerpt_length($length)
{
    return 60;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


ini_set('upload_max_size', '64M');
ini_set('post_max_size', '64M');


add_action('add_meta_boxes', array('T5_Richtext_Excerpt', 'switch_boxes'));

/**
 * Replaces the default excerpt editor with TinyMCE.
 */
class T5_Richtext_Excerpt
{
    /**
     * Replaces the meta boxes.
     *
     * @return void
     */
    public static function switch_boxes()
    {
        if (!post_type_supports($GLOBALS['post']->post_type, 'excerpt')) {
            return;
        }

        remove_meta_box(
            'postexcerpt' // ID
            ,
            ''            // Screen, empty to support all post types
            ,
            'normal'      // Context
        );

        add_meta_box(
            'postexcerpt2'     // Reusing just 'postexcerpt' doesn't work.
            ,
            __('Excerpt')    // Title
            ,
            array(__CLASS__, 'show') // Display function
            ,
            null              // Screen, we use all screens with meta boxes.
            ,
            'normal'          // Context
            ,
            'core'            // Priority
        );
    }

    /**
     * Output for the meta box.
     *
     * @param  object $post
     * @return void
     */
    public static function show($post)
    {
?>
        <label class="screen-reader-text" for="excerpt"><?php
                                                        _e('Excerpt')
                                                        ?></label>
<?php
        // We use the default name, 'excerpt', so we don’t have to care about
        // saving, other filters etc.
        wp_editor(
            self::unescape($post->post_excerpt),
            'excerpt',
            array(
                'textarea_rows' => 15,   'media_buttons' => FALSE,   'teeny'         => TRUE,   'tinymce'       => TRUE
            )
        );
    }

    /**
     * The excerpt is escaped usually. This breaks the HTML editor.
     *
     * @param  string $str
     * @return string
     */
    public static function unescape($str)
    {
        return str_replace(
            array('&lt;', '&gt;', '&quot;', '&amp;', '&nbsp;', '&amp;nbsp;'),
            array('<',    '>',    '"',      '&',     ' ', ' '),
            $str
        );
    }
}
