<?php

namespace Scngnr\Mdent\Eticaret\Woocommerce\Http\Controllers;

use App\Models\Urunler;
use Automattic\WooCommerce\Client;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{

  public function create(){

    $urunler = Urunler::all();

    for ($i=0; $i < count($urunler); $i++) {
      $woocommerce = new Client(
        'http://scngnrtest.infinityfreeapp.com/',
        'ck_3890365a7b810a9e26a02b4ffd7757da53cb49e9',
        'cs_bcc21877f10b1f25b59fce1446674b02f75b020a',
        [
          'version' => 'wc/v3',
        ]
          );

      $data = [
          'name' => $urunler[$i]->adi,
          'type' => 'simple',
          'regular_price' => $urunler[$i]->fiyati,
          'description' => $urunler[$i]->aciklama,
          'short_description' => $urunler[$i]->aciklma,
          'stock_quantity' => $urunler[$i]->stok,
          'manage_stock' => true,
          'categories' => [
              [
                  'id' => 9
              ],
              [
                  'id' => 14
              ]
          ],
          'images' => [
              [
                  'src' => $urunler[$i]->resim
              ]
          ]
      ];

      print_r($woocommerce->post('products', $data));
    }

  }
}
