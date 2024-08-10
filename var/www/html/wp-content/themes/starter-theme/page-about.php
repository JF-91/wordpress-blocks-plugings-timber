<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

use Timber\Timber;

$templates = array('views/page-about.twig');

// Obtener el contexto global
$context = Timber::context();

// Agregar datos personalizados al contexto
$context['about'] = 'this is about page';

// Renderizar la plantilla con el contexto
Timber::render($templates, $context);