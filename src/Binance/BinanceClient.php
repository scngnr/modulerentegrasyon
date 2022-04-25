<?php

namespace Scngnr\Mdent\Binance;
use Scngnr\Mdent\Binance\Helper\Gateway;

Class BinanceClient extends Gateway {

  /**
	 *
	 * @description N11 Api Key
	 * @param string $apiKey
	 *
	 */
	public function setApiKey($apiKey)
	{

		$this->apiKey = $apiKey;

	}

	/**
	 *
	 * @description N11 Api Şifre
	 * @param string $apiPassword
	 *
	 */
	public function setApiPassword($apiPassword)
	{

		$this->apiPassword = $apiPassword;

	}
}
