<?php

namespace Scngnr\Mdent\Eticaret\Woocommerce\Console\Commands;

use Illuminate\Console\Command;

class Product extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Product:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $controller = new \Scngnr\Mdent\Eticaret\Woocommerce\Http\Controllers\ProductController; $controller->ProductCreate();
    }
}
