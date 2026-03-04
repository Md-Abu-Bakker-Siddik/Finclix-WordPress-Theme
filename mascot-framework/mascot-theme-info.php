<?php
class FinclixThemeInfo {
	private static $instance;
	private $theme_info;

	private function __construct() {
		$this->theme_info = wp_get_theme();
	}

	public static function get_instance() {
		if (!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function get_name() {
		return $this->theme_info->get('Name');
	}

	public function get_version() {
		return $this->theme_info->get( 'Version' );
	}
}