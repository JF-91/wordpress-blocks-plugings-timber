<?php

namespace App;

use App\Metaboxes\LibroMetaBox;
use App\PosTypes\CustomPosTypeLibro;
use Timber\Site;
use Timber\Timber;

/**
 * Class StarterSite
 */
class StarterSite extends Site
{
	public function __construct()
	{
		add_action('after_setup_theme', array($this, 'theme_supports'));
		add_action('init', array($this, 'register_post_types'));
		add_action('init', array($this, 'register_taxonomies'));

		add_action('wp_enqueue_scripts', array($this, 'enqueue_custom_styles'));
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));




		add_action('add_meta_boxes', array($this, 'add_custom_meta_boxes'));
		add_action('save_post', array($this, 'save_custom_meta_box_data'));

		add_action('init', array($this, 'custom_gutenberg_block'));

		add_filter('timber/context', array($this, 'add_to_context'));
		add_filter('timber/twig', array($this, 'add_to_twig'));
		add_filter('timber/twig/environment/options', [$this, 'update_twig_environment_options']);

		parent::__construct();
	}

	public function enqueue_custom_styles()
	{
		wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
	}


	//scripts
	public function enqueue_scripts()
	{

		// Registra el script
		wp_register_script('site', get_template_directory_uri() . '/assets/scripts/site.js', array('jquery'), '1.0', true);
	}

	/**
	 * This is where you can register custom post types.
	 */
	public function register_post_types()
	{
		CustomPosTypeLibro::register();
	}

	public function add_custom_meta_boxes()
	{
		LibroMetaBox::add_meta_box();
	}

	public function save_custom_meta_box_data($post_id)
	{
		LibroMetaBox::save_meta_box_data($post_id);
	}


	//gutemberg-blocks
	public function custom_gutenberg_block()
	{
		$block_js_path = get_template_directory() . '/blocks/custom-block.js';
		$block_js_uri = get_template_directory_uri() . '/blocks/custom-block.js';

		if (file_exists($block_js_path)) {
			wp_register_script(
				'custom-block',
				$block_js_uri,
				array('wp-blocks', 'wp-element', 'wp-editor'),
				filemtime($block_js_path)
			);

			register_block_type('custom/my-custom-block', array(
				'editor_script' => 'custom-block',
			));

			error_log('Custom block registered successfully');  // Añade esta línea para verificar
		} else {
			error_log('The custom-block.js file was not found at: ' . $block_js_path);
		}
	}



	/**
	 * This is where you can register custom taxonomies.
	 */
	public function register_taxonomies() {}

	/**
	 * This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context($context)
	{
		$context['foo']   = 'bar';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::context();';
		$context['menu']  = Timber::get_menu();
		$context['site']  = $this;

		return $context;
	}

	public function theme_supports()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support('menus');

		add_theme_support('editor-styles');
		add_editor_style('assets/css/main.css');
		add_theme_support('responsive-embeds');
		add_theme_support('align-wide');
	}

	/**
	 * This would return 'foo bar!'.
	 *
	 * @param string $text being 'foo', then returned 'foo bar!'.
	 */
	public function myfoo($text)
	{
		$text .= ' bar!';
		return $text;
	}

	/**
	 * This is where you can add your own functions to twig.
	 *
	 * @param Twig\Environment $twig get extension.
	 */
	public function add_to_twig($twig)
	{
		/**
		 * Required when you want to use Twig’s template_from_string.
		 * @link https://twig.symfony.com/doc/3.x/functions/template_from_string.html
		 */
		// $twig->addExtension( new Twig\Extension\StringLoaderExtension() );

		$twig->addFilter(new \Twig\TwigFilter('myfoo', [$this, 'myfoo']));

		return $twig;
	}

	/**
	 * Updates Twig environment options.
	 *
	 * @link https://twig.symfony.com/doc/2.x/api.html#environment-options
	 *
	 * @param array $options An array of environment options.
	 *
	 * @return array
	 */
	function update_twig_environment_options($options)
	{
		// $options['autoescape'] = true;

		return $options;
	}
}
