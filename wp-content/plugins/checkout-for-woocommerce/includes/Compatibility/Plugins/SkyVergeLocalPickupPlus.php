<?php

namespace Objectiv\Plugins\Checkout\Compatibility\Plugins;

use Objectiv\Plugins\Checkout\Compatibility\Base;

class SkyVergeLocalPickupPlus extends Base {
	public function is_available(): bool {
		return class_exists( '\\WC_Local_Pickup_Plus_Loader' );
	}

	function typescript_class_and_params( $compatibility ): array {
		$compatibility[] = array(
			'class'  => 'SkyVergeLocalPickupPlus',
			'params' => array(),
		);

		return $compatibility;
	}
}
