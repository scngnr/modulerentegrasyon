<?php

namespace Scngnr\Mdent;
use Scngnr\Mdent\Binance\Helper\Gateway;

Class BinanceClient extends Gateway {

  /**
  *
  *Set apiKey and apiSecret
  *
  * @param string $apiKey
  * @param string $apiSecret
  */

  public function setCredential ($apiKey, $apiSecret){

    $this->apiKey     = $apiKey;
    $this->apiSecret  = $apiSecret;

  }
}
