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
  public $apiKey;
  public $apiSecret;

  protected $allServices = array(
    'Margin' => 'Acctrade'

  );

  /**
 *
 * @description REST Api servislerinin ilk çağırma için hazırlanması
 * @param string
 * @return service
 *
 */
  public function __get($names)
  {
    $service = $this->allServices[$names];

    if (!isset($this->allServices[$names])) {
      dd($service);
      throw new Bnexception("Geçersiz Servis!");
    }

    if (isset($this->$names)) {
      return $this->$names;
    }

    $this->$names = $this->createServiceInstance($this->allServices[$names]);
    return $this->$names;
  }

  /**
   *
   * Servis sınıfının ilk örneğini oluşturma
   *
   * @author Ismail Satilmis <ismaiil_0234@hotmail.com>
   * @param string $serviceName
   * @return string
   *
   */
  protected function createServiceInstance($serviceName)
  {
    //dd($serviceName);
    $serviceName = "Scngnr\Mdent\Binance\Services\\" .  $serviceName;
    if (!class_exists($serviceName)) {
      throw new Bnexception("Geçersiz Dosya Yolu!");
    }
    return new $serviceName($this->apiKey, $this->apiSecret);
  }
}
