<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 19/07/2020
	 */
	
	namespace AppsBay\Controllers\Gateways;
	
	
	use AppsBay\Controllers\Gateways\SDK\AfrikasTalkingAPI;
	use AppsBay\Controllers\Gateways\SDK\NexmoAPI;
	use AppsBay\Controllers\Gateways\SDK\TelnyxAPI;
	use AppsBay\Controllers\Gateways\SDK\TwilioAPI;
	
	class Gateways {
		public static $gateways = [
			'afrikastalking' => AfrikasTalkingAPI::class,
			'telynx' => TelnyxAPI::class,
			'nexmo' => NexmoAPI::class,
			'twilio' => TwilioAPI::class
		];
		
		public static function Run(  ) {
		
		}
	}
