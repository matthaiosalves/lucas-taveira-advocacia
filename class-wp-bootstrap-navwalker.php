<?php

class Custom_Menu_Walker extends Walker_Nav_Menu
{
	// Adiciona classe CSS personalizada e estrutura HTML para cada item do menu
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$output .= '<li class="nav-item';

		if (in_array('current-menu-item', $item->classes)) {
			$output .= ' active';
		}

		if (in_array('menu-item-has-children', $item->classes)) {
			$output .= ' dropdown dropdown-hover'; // Adiciona a classe dropdown-hover
		}

		$output .= '">';

		$output .= '<a class="nav-link';

		if ($args->walker->has_children) {
			$output .= ' dropdown-toggle';
		}

		$output .= '" href="' . esc_attr($item->url) . '"';

		if ($args->walker->has_children) {
			$output .= ' role="button" data-bs-toggle="dropdown" aria-expanded="false"';
		}

		$output .= '>';

		$output .= esc_html($item->title);

		if ($args->walker->has_children) {
			$output .= ' <i class="bi bi-caret-down"></i>';
		}

		$output .= '</a>';
	}

	// Adiciona classe CSS personalizada e estrutura HTML para o início de cada submenu
	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$output .= '<ul class="dropdown-menu">';
	}

	// Adiciona classe CSS personalizada e estrutura HTML para o final de cada submenu
	function end_lvl(&$output, $depth = 0, $args = array())
	{
		$output .= '</ul>';
	}

	// Adiciona estrutura HTML para o final de cada item do menu
	function end_el(&$output, $item, $depth = 0, $args = array())
	{
		$output .= '</li>';
	}
}
