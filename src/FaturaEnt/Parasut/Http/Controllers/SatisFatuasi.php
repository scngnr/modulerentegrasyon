<?php

namespace Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers;

use App\Models\Urunler;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class SatisFatuasi extends Controller
{


  public function __construct(){
    $this->parasutCompanyId = "348340";
    $this->baseEndPoint = "https://api.parasut.com/v4/{$this->parasutCompanyId}/sales_invoices";

    //Auth Kontroller sınıfını kullanarak access_token al
    $controller = new \Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\Auth();
    $response = $controller->oAuthToken();
    //$this->access_token = "w00U9BpQFcdCjfzSMAEdXkrdGrYvlObryFx17QaX2Vs";
    $this->access_token = $response['access_token'];
  }

  // Parasut sisteminde kayıtlı tüm kategorileri döndürür.
  public function index(){

   $endpoind = $this->baseEndPoint;

   $response = Http::withHeaders(
     [
       'Accept' => 'application/json',
       'Authorization' => 'Bearer '.$this->access_token,
     ])->get($endpoind);

     $response->json();
  }


  public function create($array){

    $endpoind = $this->baseEndPoint;


    $response = Http::withHeaders(
      [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.$this->access_token,
      ])->post($endpoind, $array);

    return  $response->json();
  }


  public function show(){

  }


  public function edit(){

  }


  public function delete(){

  }

  public function pay(){

  }

  public function cancel(){

  }

  public function recover(){

  }

  public function archive(){

  }

  public function unArchive(){

  }

  public function convertEstimateInvoice(){

  }
}
