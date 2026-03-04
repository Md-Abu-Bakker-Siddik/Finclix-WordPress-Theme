<?php
add_filter( 'rwmb_meta_boxes', 'finclix_blog_metaboxes' );

function finclix_blog_metaboxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'id'		=> 'metabox_post_format_settings_audio',
		'title'		=> esc_html__( 'Audio Settings', 'finclix' ),
		'post_types' => array( 'post' ),
		'context'	=> 'normal',
		'priority'   => 'high',
		'show'   => array(
		// List of post formats. Array. Case insensitive. Optional.
		'post_format' => array( 'Audio' ),
		),
		'fields'	 => array(
			array(
				'id'     => 'finclix_' . 'blog_mb_pf_audio_settings',
				// Group field
				'type'   => 'group',
				// Clone whole group?
				'clone'  => false,
				// Drag and drop clones to reorder them?
				'sort_clone' => false,
				// Sub-fields
				'fields' => array(
					array(
						'id'   => 'soundcloud_link',
						'name' => esc_html__( 'SoundCloud URL', 'finclix' ),
						'desc' => esc_html__( 'Example: https://soundcloud.com/wmnashville/hero-skillet', 'finclix' ),
						'type' => 'textarea',
					),
					array(
						'id'   => 'mp3_link',
						'name' => esc_html__( 'MP3 Audio File URL', 'finclix' ),
						'type' => 'file_input',
					),
					array(
						'id'   => 'ogg_link',
						'name' => esc_html__( 'OGA/OGG Audio File URL', 'finclix' ),
						'type' => 'file_input',
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'id'		=> 'metabox_post_format_settings_gallery',
		'title'		=> esc_html__( 'Gallery Settings', 'finclix' ),
		'post_types' => array( 'post' ),
		'context'	=> 'normal',
		'priority'   => 'high',
		'show'   => array(
		// List of post formats. Array. Case insensitive. Optional.
		'post_format' => array( 'Gallery' ),
		),
		'fields' => array(
			array(
				'id'     => 'finclix_' . 'blog_mb_pf_gallery_settings',
				// Group field
				'type'   => 'group',
				// Clone whole group?
				'clone'  => false,
				// Drag and drop clones to reorder them?
				'sort_clone' => false,
				// Sub-fields
				'fields' => array(
					array(
						'id'			=> 'gallery_images',
						'name'			=> esc_html__( 'Gallery Images', 'finclix' ),
						'type'			=> 'image_advanced',
						'desc'			=> esc_html__( 'Uploaded images for the gallery will be grouped into a slider', 'finclix' ),
						// Delete image from Media Library when remove it from post meta?
						// Note: it might affect other posts if you use same image for multiple posts
						'force_delete'	 	=> false,
						// Maximum image uploads
						'max_file_uploads'	=> 100,
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'id'		=> 'metabox_post_format_settings_link',
		'title'		=> esc_html__( 'Link Settings', 'finclix' ),
		'post_types' => array( 'post' ),
		'context'	=> 'normal',
		'priority'   => 'high',
		'show'   => array(
		// List of post formats. Array. Case insensitive. Optional.
		'post_format' => array( 'Link' ),
		),
		'fields' => array(
			array(
				'id'     => 'finclix_' . 'blog_mb_pf_link_settings',
				// Group field
				'type'   => 'group',
				// Clone whole group?
				'clone'  => false,
				// Drag and drop clones to reorder them?
				'sort_clone' => false,
				// Sub-fields
				'fields' => array(
					array(
						'id'   => 'link_url',
						'name' => esc_html__( 'Link URL', 'finclix' ),
						'type' => 'text',
					),
					array(
						'name' => esc_html__( 'Link Target', 'finclix' ),
						'id'   => 'link_target',
						'type'	=> 'select',
						'options' => array(
							'_blank'	=> esc_html__( 'Open New Window', 'finclix' ),
							'_self'		=> esc_html__( 'Open Same Window', 'finclix' ),
						),
						'std'		=> '_blank',
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'id'		=> 'metabox_post_format_settings_quote',
		'title'		=> esc_html__( 'Quote Settings', 'finclix' ),
		'post_types' => array( 'post' ),
		'context'	=> 'normal',
		'priority'   => 'high',
		'show'   => array(
		// List of post formats. Array. Case insensitive. Optional.
		'post_format' => array( 'Quote' ),
		),
		'fields' => array(
			array(
				'id'     => 'finclix_' . 'blog_mb_pf_quote_settings',
				// Group field
				'type'   => 'group',
				// Clone whole group?
				'clone'  => false,
				// Drag and drop clones to reorder them?
				'sort_clone' => false,
				// Sub-fields
				'fields' => array(
					array(
						'id'		=> 'quote',
						'name'		=> esc_html__( 'Quote', 'finclix' ),
						'desc'		=> esc_html__( 'Place your text for the quote', 'finclix' ),
						'type'		=> 'textarea',
						// Number of rows
						'rows'		=> 5,
						// Number of columns
						'cols'		=> 5,
					),
					array(
						'id'   => 'quote_author',
						'name' => esc_html__( 'Quote Author', 'finclix' ),
						'desc' => esc_html__( 'The person who place the quote', 'finclix' ),
						'type' => 'text',
					),
					array(
						'id'   => 'quote_position',
						'name' => esc_html__( 'Author Position', 'finclix' ),
						'desc' => esc_html__( 'The designation of the author', 'finclix' ),
						'type' => 'text',
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'id'		=> 'metabox_post_format_settings_video',
		'title'		=> esc_html__( 'Video Settings', 'finclix' ),
		'post_types' => array( 'post' ),
		'context'	=> 'normal',
		'priority'   => 'high',
		'show'   => array(
		// List of post formats. Array. Case insensitive. Optional.
		'post_format' => array( 'Video' ),
		),
		'fields'	 => array(
			array(
				'id'     => 'finclix_' . 'blog_mb_pf_video_settings',
				// Group field
				'type'   => 'group',
				// Clone whole group?
				'clone'  => false,
				// Drag and drop clones to reorder them?
				'sort_clone' => false,
				// Sub-fields
				'fields' => array(
					array(
						'name'		=> esc_html__( 'Video Type', 'finclix' ),
						'id'		=> 'video_type',
						'type'		=> 'radio',
						'options'	=> array(
							'youtube'	=> esc_html__( 'Youtube', 'finclix' ),
							'vimeo'		=> esc_html__( 'Vimeo', 'finclix' ),
							'self_hosted' => esc_html__( 'Self Hosted Video', 'finclix' ),
						),
						'std'		=> 'youtube',
					),
					array(
						'id'		=> 'video_youtube_url',
						'name'		=> esc_html__( 'Youtube Video URL', 'finclix' ),
						'type'		=> 'textarea',
						'desc'		=> esc_html__( 'Example: https://www.youtube.com/watch?v=DEME-d6foS8', 'finclix' ),
						'visible'	=> array( 'video_type', 'youtube' )
					),
					array(
						'id'		=> 'video_vimeo_url',
						'name'		=> esc_html__( 'Vimeo Video URL', 'finclix' ),
						'type'		=> 'textarea',
						'desc'		=> esc_html__( 'Example: https://vimeo.com/217247717', 'finclix' ),
						'visible'	=> array( 'video_type', 'vimeo' )
					),
					array(
						'id'			=> 'video_self_hosted_video_image',
						'name'			=> esc_html__( 'Video Image', 'finclix' ),
						'type'			=> 'image_advanced',
						// Delete image from Media Library when remove it from post meta?
						// Note: it might affect other posts if you use same image for multiple posts
						'force_delete'	 => false,
						// Maximum image uploads
						'max_file_uploads' => 1,
						'max_status'	=> false,
						'visible'		=> array( 'video_type', 'self_hosted' )
					),
					array(
						'id'		=> 'video_self_hosted_mp4_url',
						'name'		=> esc_html__( 'MP4 Video URL', 'finclix' ),
						'type'		=> 'file_input',
						'visible'	=> array( 'video_type', 'self_hosted' )
					),
					array(
						'id'		=> 'video_self_hosted_webm_url',
						'name'		=> esc_html__( 'WEBM Video URL', 'finclix' ),
						'type'		=> 'file_input',
						'visible'	=> array( 'video_type', 'self_hosted' )
					),
					array(
						'id'		=> 'video_self_hosted_ogv_url',
						'name'		=> esc_html__( 'OGV Video URL', 'finclix' ),
						'type'		=> 'file_input',
						'visible'	=> array( 'video_type', 'self_hosted' )
					),
				),
			),
		)
	);
	return $meta_boxes;
}