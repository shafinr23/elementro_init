<?php
namespace Elementor;

class FirstWidget extends Widget_Base {

	public function get_name() {
		return "about";
	}
	public function get_title() {
		return " About Us";
	}
	public function get_icon() {
		return "fa fa-facebook";
	}

}

Plugin::instance()->widgets_manager->register_widget_type(new FirstWidget);
