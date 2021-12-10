<?php
/**
 * OceanWP theme strings
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'oceanwp_theme_strings' ) ) {

	/**
	 * OceanWP Theme Strings
	 *
	 *  @author Amit Singh (apprimit@gmail.com)
	 *  @since 1.8.5
	 *
	 * @param  string  $value  String key.
	 * @param  boolean $echo   Print string.
	 * @return mixed           Return string or nothing.
	 */
	function oceanwp_theme_strings( $value, $echo = true ) {

		$oceanwp_strings = apply_filters(
			'oceanwp_theme_strings',
			array(

				'owp-string-header-skip-link'            => apply_filters( 'ocean_header_skip_link', __( 'Skip to content', 'oceanwp' ) ),
				'owp-string-search-text'                 => apply_filters( 'ocean_search_text', __( 'Tìm kiếm', 'oceanwp' ) ),
				'owp-string-mobile-search-text'          => apply_filters( 'ocean_mobile_search_text', __( 'Search', 'oceanwp' ) ),
				'owp-string-mobile-fs-search-text'       => apply_filters( 'ocean_mobile_fs_search_text', __( 'Type your search', 'oceanwp' ) ),
				'owp-string-header-replace-search-text'  => apply_filters( 'ocean_header_replace_search_text', __( 'Type then hit enter to search...', 'oceanwp' ) ),
				'owp-string-search-overlay-search-text'  => apply_filters( 'ocean_search_overlay_search_text', __( 'Type then hit enter to search', 'oceanwp' ) ),
				'owp-string-vertical-header-search-text' => apply_filters( 'ocean_vertical_header_search_text', __( 'Search...', 'oceanwp' ) ),
				'owp-string-medium-header-search-text'   => apply_filters( 'ocean_medium_header_search_text', __( 'Search...', 'oceanwp' ) ),
				'owp-string-comment-logout-text'         => apply_filters( 'ocean_comment_logout_text', __( 'Log out of this account', 'oceanwp' ) ),
				'owp-string-comment-placeholder'         => apply_filters( 'ocean_comment_placeholder', __( 'Your comment here...', 'oceanwp' ) ),
				'owp-string-comment-profile-edit'        => apply_filters( 'ocean_comment_profile_edit', __( 'Click to edit your profile', 'oceanwp' ) ),
				'owp-string-comment-post-button'         => apply_filters( 'ocean_comment_post_button', __( 'Post Comment', 'oceanwp' ) ),
				'owp-string-comment-name-req'            => apply_filters( 'ocean_comment_name_req', __( 'Name (required)', 'oceanwp' ) ),
				'owp-string-comment-email-req'           => apply_filters( 'ocean_comment_email_req', __( 'Email (required)', 'oceanwp' ) ),
				'owp-string-comment-name'                => apply_filters( 'ocean_comment_name', __( 'Name', 'oceanwp' ) ),
				'owp-string-comment-email'               => apply_filters( 'ocean_comment_email', __( 'Email', 'oceanwp' ) ),
				'owp-string-comment-website'             => apply_filters( 'ocean_comment_website', __( 'Website', 'oceanwp' ) ),
				'owp-string-search-continue-reading'     => apply_filters( 'ocean_search_continue_reading', __( 'Continue Reading', 'oceanwp' ) ),
				'owp-string-post-continue-reading'       => apply_filters( 'ocean_post_continue_reading', __( 'Đọc tiếp', 'oceanwp' ) ),
				'owp-string-single-related-posts'        => apply_filters( 'ocean_single_related_posts', __( 'You Might Also Like', 'oceanwp' ) ),
				'owp-string-single-next-post'            => apply_filters( 'ocean_single_next_post', __( 'Bài Viết Sau', 'oceanwp' ) ),
				'owp-string-single-prev-post'            => apply_filters( 'ocean_single_prev_post', __( 'Bài Viết Trước', 'oceanwp' ) ),
				'owp-string-single-screen-reader-rm'     => apply_filters( 'ocean_single_screen_reader_rm', __( 'Read more articles', 'oceanwp' ) ),
				'owp-string-author-page'                 => apply_filters( 'ocean_author_page', __( 'Visit author page', 'oceanwp' ) ),

				// Woocommerce.
				'owp-string-woo-quick-view-text'         => apply_filters( 'ocean_woo_quick_view_text', __( 'Quick View', 'oceanwp' ) ),
				'owp-string-woo-quick-view-close'        => apply_filters( 'ocean_woo_quick_view_close', __( 'Close quick preview', 'oceanwp' ) ),
				'owp-string-woo-floating-bar-select-btn' => apply_filters( 'ocean_woo_floating_bar_select_btn', __( 'Select Options', 'oceanwp' ) ),
				'owp-string-woo-floating-bar-selected'   => apply_filters( 'ocean_woo_floating_bar_selected', __( 'Selected:', 'oceanwp' ) ),
				'owp-string-woo-floating-bar-out-stock'  => apply_filters( 'ocean_woo_floating_bar_out_stock', __( 'Out of stock', 'oceanwp' ) ),
				'owp-string-woo-nav-next-product'        => apply_filters( 'ocean_woo_nav_next_text', __( 'Next Product', 'oceanwp' ) ),
				'owp-string-woo-nav-prev-product'        => apply_filters( 'ocean_woo_nav_prev_text', __( 'Previous Product', 'oceanwp' ) ),

				// Aria.
				'owp-string-close-mobile-menu'           => apply_filters( 'ocean_wai_close_mobile_menu', __( 'Close mobile menu', 'oceanwp' ) ),
				'owp-string-mobile-search'               => apply_filters( 'ocean_wai_mobile_search', __( 'Search for:', 'oceanwp' ) ),
				'owp-string-mobile-submit-search'        => apply_filters( 'ocean_wai_mobile_search_submit', __( 'Submit search', 'oceanwp' ) ),
				'owp-string-search-field'                => apply_filters( 'ocean_wai_search_field', __( 'Insert search query', 'oceanwp' ) ),
				'owp-string-search-form-label'           => apply_filters( 'ocean_wai_search_form_label', __( 'Search this website', 'oceanwp' ) ),
				'owp-string-close-search-form'           => apply_filters( 'ocean_wai_close_search_form', __( 'Close this search form', 'oceanwp' ) ),
				'owp-string-scroll-top'                  => apply_filters( 'ocean_wai_scroll_top', __( 'Scroll to the top of the page', 'oceanwp' ) ),
				'owp-string-link-post-format'            => apply_filters( 'ocean_wai_link_post_format', __( 'Visit this link', 'oceanwp' ) ),
				'owp-string-new-tab-alert'               => apply_filters( 'ocean_wai_new_tab_alert', __( 'Opens in a new tab', 'oceanwp' ) ),
				'owp-string-read-more'                   => apply_filters( 'ocean_wai_read_more', __( 'Read more about', 'oceanwp' ) ),
				'owp-string-read-more-article'           => apply_filters( 'ocean_wai_read_more_article', __( 'Read more about the article', 'oceanwp' ) ),
				'owp-string-current-read'                => apply_filters( 'ocean_wai_current_read', __( 'You are currently viewing', 'oceanwp' ) ),
				'owp-string-author-img'                  => apply_filters( 'ocean_wai_author_img', __( 'Post author avatar', 'oceanwp' ) ),

			)
		);

		if ( is_rtl() ) {
			// do your stuff.
		}

		$owp_string = isset( $oceanwp_strings[ $value ] ) ? $oceanwp_strings[ $value ] : '';

		/**
		 * Print or return strings
		 */
		if ( $echo ) {
			echo $owp_string; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			return $owp_string;
		}
	}
}
