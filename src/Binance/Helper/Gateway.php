<?php

namespace Scngnr\Mdent\Binance\Helper;
use Scngnr\Mdent\Binance\Helper\Bnexception;

Class Gateway {

  /**
  *@description
  *
  *Binance apiKey and apiSecret
  *
  *
  */
  public $apiKey, $apiSecret;

  protected $allServices = array(
    'spot' => 'SpotTradeService',
    'usdm' => 'UsdMService'
  );

  /**
	 *
	 * @description SOAP Api servislerinin ilk çağırma için hazırlanması
	 * @param string
	 * @return service
	 *
	 */
    public function __get($name)
    {

		if (!isset($this->allowedServices[$name])) {
			throw new Bnexception("Geçersiz Yordam!");
		}

		if (isset($this->$name)) {
			return $this->$name;
		}

		$this->$name = new BaseCall($this->allowedServices[$name], $this->apiKey, $this->apiPassword);
		return $this->$name;

    }
}
