<?php

namespace Scngnr\Mdent\Binance\Helper;

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

}
