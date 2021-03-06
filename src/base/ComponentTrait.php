<?php
/**
 * Created by PhpStorm.
 * User: tracnguyen
 * Date: 9/11/18
 * Time: 3:42 PM
 */

namespace Enpii\Wp\EnpiiBase\Base;


trait ComponentTrait {
	/**
	 * Component constructor.
	 * Initialize values for object based on configuration array
	 *
	 * @param null|array $config
	 */
	public function __construct( $config = null ) {
		if ( ! empty( $config ) ) {
			foreach ( (array) $config as $key => $value ) {
				if ( property_exists( get_class( $this ), $key ) ) {
					$this->$key = $value;
				}
			}
		}
	}
}