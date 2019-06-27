<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'user_id' => 1,
                'code_product' => 1,
                'name_product' => 'Kopi Arabika',
                'image' => 'http://www.healthyom.com/wp-content/uploads/2015/10/coffee-powder-1.jpg',
                'price' => 75600,
                'qty_available' => 134,
                'status' => 1,
                'sold_count' => 26,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],

            [
                'user_id' => 1,
                'code_product' => 2,
                'name_product' => 'Kopi Robusta',
                'image' => 'https://cdn.shopify.com/s/files/1/0897/2714/products/Coffee_Powder_Nadan_Kappi_Podi_Coffee_powder_without_chicory_-_Natureloc_grande.jpg?v=1460786375',
                'price' => 64000,
                'qty_available' => 104,
                'status' => 1,
                'sold_count' => 260,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],

            [
                'user_id' => 1,
                'code_product' => 3,
                'name_product' => 'Kopi Liberika',
                'image' => 'https://www.weshopie.com/wp-content/uploads/2017/11/02-66-600x600.jpg',
                'price' => 65900,
                'qty_available' => 14,
                'status' => 1,
                'sold_count' => 90,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],

            [
                'user_id' => 1,
                'code_product' => 4,
                'name_product' => 'Kopi Sumatera',
                'image' => 'https://wayanad.net/wp-content/uploads/2017/09/coffee_powder_wayanad.jpeg',
                'price' => 30900,
                'qty_available' => 320,
                'status' => 1,
                'sold_count' => 90,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],

            [
                'user_id' => 1,
                'code_product' => 5,
                'name_product' => 'Kopi Sulawesi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgftz1fGz7KLzJ01WqrFLszUHjH_EP8w-1NBinNBMWiDUTFSq3tw',
                'price' => 47900,
                'qty_available' => 120,
                'status' => 1,
                'sold_count' => 90,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],

            [
                'user_id' => 1,
                'code_product' => 6,
                'name_product' => 'Kopi Aceh Gayo',
                'image' => 'https://cdn.shopify.com/s/files/1/0897/2714/products/Arabica_Coffee_Powder_Arabica_Kappi_Podi_Natureloc_-_Buy_Online_grande.jpg?v=1465542703',
                'price' => 97000,
                'qty_available' => 40,
                'status' => 1,
                'sold_count' => 90,
                'link_gsheet' => 'https://goo.gl/forms/40TOjunQOdzz3sqL2',
            ],
        ]);
    }
}
