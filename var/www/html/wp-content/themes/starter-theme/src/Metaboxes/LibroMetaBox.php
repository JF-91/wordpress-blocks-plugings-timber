<?php

namespace App\Metaboxes;

class LibroMetaBox
{
    public static function add_meta_box()
    {
        add_meta_box(
            'libro_details',
            __('Detalles del Libro', 'textdomain'),
            [self::class, 'render_meta_box_content'],
            'libro',
            'advanced',
            'high'
        );
    }

    public static function render_meta_box_content($post)
    {
        wp_nonce_field('libro_details_nonce', 'libro_details_nonce');

        $autor = get_post_meta($post->ID, '_libro_autor', true);

        echo '<label for="libro_autor">';
        _e('Autor del Libro', 'textdomain');
        echo '</label> ';
        echo '<input type="text" id="libro_autor" name="libro_autor" value="' . esc_attr($autor) . '" size="25" />';
    }

    public static function save_meta_box_data($post_id)
    {
        if (!isset($_POST['libro_details_nonce'])) {
            return $post_id;
        }

        $nonce = $_POST['libro_details_nonce'];

        if (!wp_verify_nonce($nonce, 'libro_details_nonce')) {
            return $post_id;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }

        if (isset($_POST['post_type']) && 'libro' === $_POST['post_type']) {
            if (!current_user_can('edit_post', $post_id)) {
                return $post_id;
            }
        }

        if (isset($_POST['libro_autor'])) {
            $autor = sanitize_text_field($_POST['libro_autor']);
            update_post_meta($post_id, '_libro_autor', $autor);
        }
    }
}
