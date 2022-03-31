<?php

namespace Scngnr\Mdent\Eticaret\Woocommerce\Http\Controllers;

use App\Models\Urunler;
use Automattic\WooCommerce\Client;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{

  public function create(){

    $urunler = Urunler::all();

    try {

          for ($i=0; $i < count($urunler); $i++) {

            $woocommerce = new Client(
              'http://localhost/projeler/wordpress/',
              'ck_b6056d6ae364654d91953bd3a22cd24db8455948',
              'cs_c801c41f27f65c788b9cad7dddbe5bd8bcb1d16b',
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
    } catch (\Exception $e) {

    }

  }
}
