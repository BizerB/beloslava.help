<?php
/**
 * Astra Theme Strings
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Default Strings
 */
if ( ! function_exists( 'astra_default_strings' ) ) {

	/**
	 * Default Strings
	 *
	 * @since 1.0.0
	 * @param  string  $key  String key.
	 * @param  boolean $echo Print string.
	 * @return mixed        Return string or nothing.
	 */
	function astra_default_strings( $key, $echo = true ) {

		$defaults = apply_filters(
			'astra_default_strings',
			array(

				// Header.
				'string-header-skip-link'                => __( 'Прескочете до съдържанието', 'astra' ),

				// 404 Page Strings.
				'string-404-sub-title'                   => __( 'It looks like the link pointing here was faulty. Maybe try searching?', 'astra' ),

				// Search Page Strings.
				'string-search-nothing-found'            => __( 'Нищо не е намерено', 'astra' ),
				'string-search-nothing-found-message'    => __( 'Съжаляваме, но нищщо не беше отркрито с тези термини. Моля, опитайте с други.', 'astra' ),
				'string-full-width-search-message'       => __( 'Start typing and press enter to search', 'astra' ),
				'string-full-width-search-placeholder'   => __( 'Search &hellip;', 'astra' ),
				'string-header-cover-search-placeholder' => __( 'Search &hellip;', 'astra' ),
				'string-search-input-placeholder'        => __( 'Search &hellip;', 'astra' ),

				// Comment Template Strings.
				'string-comment-reply-link'              => __( 'Отговорете', 'astra' ),
				'string-comment-edit-link'               => __( 'Редактирайте', 'astra' ),
				'string-comment-awaiting-moderation'     => __( 'Вашият коментар очаква модерация.', 'astra' ),
				'string-comment-title-reply'             => __( 'Добави Коментар', 'astra' ),
				'string-comment-cancel-reply-link'       => __( 'Cancel Reply', 'astra' ),
				'string-comment-label-submit'            => __( 'Публикувай &raquo;', 'astra' ),
				'string-comment-label-message'           => __( 'Пишиете тук...', 'astra' ),
				'string-comment-label-name'              => __( 'Име*', 'astra' ),
				'string-comment-label-email'             => __( 'Ел. Поща*', 'astra' ),
				'string-comment-label-website'           => __( 'Уебсайт', 'astra' ),
				'string-comment-closed'                  => __( 'Comments are closed.', 'astra' ),
				'string-comment-navigation-title'        => __( 'Навигация Коментари', 'astra' ),
				'string-comment-navigation-next'         => __( 'По-нови Коментари', 'astra' ),
				'string-comment-navigation-Предишна'     => __( 'По-срари Коментари', 'astra' ),

				// Blog Default Strings.
				'string-blog-page-links-before'          => __( 'Страници:', 'astra' ),
				'string-blog-meta-author-by'             => __( 'Публикувано От ', 'astra' ),
				'string-blog-meta-leave-a-comment'       => __( 'Добавете Коментар', 'astra' ),
				'string-blog-meta-one-comment'           => __( '1 Коментар', 'astra' ),
				'string-blog-meta-multiple-comment'      => __( '% Коментари', 'astra' ),
				'string-blog-navigation-next'            => __( 'Следваща Страница', 'astra' ) . ' <span class="ast-right-arrow">&rarr;</span>',
				'string-blog-navigation-Предишна'        => '<span class="ast-left-arrow">&larr;</span> ' . __( 'Предишна Страница', 'astra' ),

				// Single Post Default Strings.
				'string-single-page-links-before'        => __( 'Страници:', 'astra' ),
				/* translators: 1: Post type label */
				'string-single-navigation-next'          => __( 'Следваща %s', 'astra' ) . ' <span class="ast-right-arrow">&rarr;</span>',
				/* translators: 1: Post type label */
				'string-single-navigation-Предишна'      => '<span class="ast-left-arrow">&larr;</span> ' . __( 'Предишна %s', 'astra' ),

				// Content None.
				'string-content-nothing-found-message'   => __( 'За съжаление не можем да открием това, което търсите...', 'astra' ),

			)
		);

		if ( is_rtl() ) {
			$defaults['string-blog-navigation-next']     = __( 'Следваща Страница', 'astra' ) . ' <span class="ast-left-arrow">&larr;</span>';
			$defaults['string-blog-navigation-Предишна'] = '<span class="ast-right-arrow">&rarr;</span> ' . __( 'Предишна Страница', 'astra' );

			/* translators: 1: Post type label */
			$defaults['string-single-navigation-next'] = __( 'Следваща %s', 'astra' ) . ' <span class="ast-left-arrow">&larr;</span>';
			/* translators: 1: Post type label */
			$defaults['string-single-navigation-Предишна'] = '<span class="ast-right-arrow">&rarr;</span> ' . __( 'Предишна %s', 'astra' );
		}

		$output = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';

		/**
		 * Print or return
		 */
		if ( $echo ) {
			echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			return $output;
		}
	}
}
