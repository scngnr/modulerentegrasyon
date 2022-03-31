<?php


use Illuminate\Support\Facades\Route;
use Automattic\WooCommerce\Client;

Route::get('/wwws', function () {

  $woocommerce = new Client(
    'http://localhost/projeler/wordpress/',
    'ck_b6056d6ae364654d91953bd3a22cd24db8455948',
    'cs_c801c41f27f65c788b9cad7dddbe5bd8bcb1d16b',
    [
      'version' => 'wc/v3',
    ]
      );



print_r($woocommerce->post('orders', $data));
});

Route::get('test', [Scngnr\Mdent\Eticaret\Woocommerce\Http\Controllers\ProductController::class, 'create'] );
