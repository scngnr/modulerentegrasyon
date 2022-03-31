<?php

namespace Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers;

use App\Models\Urunler;
use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Illuminate\Routing\Controller;
use Scngnr\Mdent\PriceService\Models\priceService;
use Illuminate\Support\Facades\Http;

class Auth extends Controller
{

  // Parasut sisteminde kayıtlı tüm kategorileri döndürür.
  public function oAuthToken(){

    $response = Http::asForm()->post('https://api.parasut.com/oauth/token', [
        'grant_type' => 'password',
        'access_token_url' => 'https://api.parasut.com/oauth/token',
        'client_id' => 'uDKy9IMfoNWxHbxgNbsOif4sjZTOcedT5B9FVb-5l5I',
        'client_secret' => 'ejWHWzlhm2aJbXv37SkRkeUm-TaAlcj2yXUS-Qy13sM',
        'username' => 'scngnr@gmail.com',
        'password' => 'scngnr546',
        'scope' => '',
    ]);
    //dd($response->json());
    return $response->json();

  }
}
