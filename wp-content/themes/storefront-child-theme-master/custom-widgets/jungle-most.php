<?php
namespace Elementor;

use WP_Query;

//require_once WP_PLUGIN_DIR . '/woocommerce/includes/abstracts/abstract-wc-widget.php';

class Jungle_Best_Sellers extends Widget_Base {

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_script( 'script-handle', 'path/to/file.js', [ 'elementor-frontend' ], '1.0.0', true );
		wp_register_style( 'style-handle', 'path/to/file.CSS');
	}

	public function get_name() {
		return 'best-sellers';
	}

	public function get_title() {
		return 'הנמכרים ביותר';
	}

	public function get_icon() {
		return 'fa fa-font';
	}

	public function get_categories() {
		return [ 'woocommerce-elements' ];
	}

	public function get_products() {
        $query_args = array(
	            'posts_per_page' => -1,
                'post_status'    => 'publish',
                'post_type'      => 'product',
                'no_found_rows'  => 1,
                'meta_query'     => array(),
                'tax_query'      => array(
	                'relation' => 'AND',
                ),
                'orderby'        => 'post__in',
        );
        return new WP_Query( apply_filters( 'woocommerce_products_widget_query_args', $query_args ) );
    }

	protected function _register_controls() {
		$products = $this->get_products();
		$products_arr = [];
		foreach ($products->get_posts() as $cpost){
			$products_arr[$cpost->ID]=__( $cpost->post_title,'elementor');
		}
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		if ( $products && $products->have_posts() ) {
			$this->add_control(
				'first_product',
				[
					'label' => __( 'מוצר 1', 'elementor' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => $products_arr,
					'class' => 'elementor-select2',
					'default' => 'default',
				]
			);
		}
		$this->add_control(
			'subtitle',
			[
				'label' => __( 'Sub-title', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub-title', 'elementor' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$url = $settings['link']['url'];
		echo  "<a href='$url'><div class='title'>$settings[title]</div> <div class='subtitle'>$settings[subtitle]</div></a>";


	}

	protected function _content_template() {

	}


}