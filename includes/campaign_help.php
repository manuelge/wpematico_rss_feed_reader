<?php
// don't load directly 
if (!defined('ABSPATH')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit();
}

add_filter('wpematico_help_campaign', 'helpcampaign_rss_feed_reader');

function helpcampaign_rss_feed_reader($helpcampaign) {
	$helpcampaignRss = array(
		'RSS Feed Reader' => array(
			'max_to_show' => array(
				'title' => __('Max items to show.', 'rss_feed_reader'),
				'tip' => __('Maximum items to be shown in each displayed feed: allows to set a limit on how many feed items will be shown in the selected post type, regardless of the method you have chosen. Also, make sure that this value is not less than the "Max items to create on each fetch" field which controls the items to be processed during the campaign execution.', 'rss_feed_reader')
			),
			'get_the_content' => array(
				'title' => __('Use <code>get_the_content</code> WordPress Filter.', 'rss_feed_reader'),
				'tip' => __('Allows to choose the Post Type where the feed content will be displayed. For example, if you select "Page", "Post" or another CPT, you will need to select the specific post where the content will be displayed using the WordPress <code>get_the_content()</code> function.', 'rss_feed_reader')
			),

			'rss_page_template' => array(
				'title' => __('RSS Page Template.', 'rss_feed_reader'),
				'tip' => __('Exclusive for Pages, allows to select a previously created page and also its page template to display the feed content, you will be able to choose the default template of the plugin or theme templates.', 'rss_feed_reader')
			),
			
			'shortcode' => array(
				'title' => __('Use Shortcode.', 'rss_feed_reader'),
				'tip' => __('Generate a shortcode using the campaign slug. This shortcode can be inserted on your website to display the content of the feed configured in the campaign, you can modify the shortcode by editing the campaign slug.', 'rss_feed_reader')
			),

			'rss_page_template_html' => array(
				'title' => __('Template feed.', 'rss_feed_reader'),
				'tip' => __('Allows to customize the HTML structure where the feed items will be displayed, adjust the layout, styles and visual components to perfectly fit your site, but be careful not to delete the variables that store each content.', 'rss_feed_reader')
			),
		)
	);

	return array_merge($helpcampaign, $helpcampaignRss);
}