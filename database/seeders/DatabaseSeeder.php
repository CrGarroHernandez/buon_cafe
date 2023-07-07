<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $products = [[
            'title'             => 'Lucaffe Mr Exclusive',
            'short_description' => 'Café Molido 250 Gr',
            'description'       => 'Café en grano molido Lucaffe 250gr. Tarro Mr. Exlusive Mezcla de café Arábica de América del Sur, Asia y un porcentaje muy pequeño de África central. Es probable que ninguna Arábica por sí solo puede dar los mismos resultados.Cuerpo medio, sabor dulce, muy agradable aroma que a veces puede recordar pan recién horneado. Cuando se acaba de conectar a tierra el olor es embriagador. El café molido se suministra en las latas clásicos a presión en una atmósfera modificada. Estos son especialmente recomendados para uso doméstico. La molienda es una fase delicada, y de gran importancia para el resultado final. Moler el café con las mejores máquinarias disponibles en el mundo. Se muele el café en ausencia de oxígeno y en la baja temperatura, con suavidad y delicadeza. Mezcla: 100% Arabica',
            'price'             => '17990',
            'offer_price'       => '14990',
            'created_at'        => Carbon::now()
        ],
        [
            'title'             => 'Lucaffe Descafeinado',
            'short_description' => 'Café en Grano 700 Gr',
            'description'       => 'Descafeinado Arábica, proveniente de las calidades más dulces y cremosas para dar la satisfacción de beber un óptimo expreso sin percibir los efectos no deseados de la cafeína. Sabor muy dulce, cuerpo pleno, óptima crema, aroma muy agradable. Mezcla 100% Arábica',
            'price'             => '36990',
            'offer_price'       => '33990',
            'created_at'        => Carbon::now()
        ],
        [
            'title'             => 'Lucaffe Classic',
            'short_description' => 'Café Molido 250 Gr',
            'description'       => 'Café en grano molido Lucaffe 250gr. Tarro. Café Lucaffe Molido 80% Arabica 20% Robusta. Mezcla clásica para quien ama el expresso con sus mejores características. Sabor dulce, cuerpo generoso y suave, crema de una densidad media, aroma excelente. Después de tomarlo, además de sentirse mejor, tendrás la satisfacción de haber bebido un café de alta calidad. Ideal para uso domestico y en cafeterías gourmet.',
            'price'             => '13.900',
            'offer_price'       => '10900',
            'created_at'        => Carbon::now()
        ],
        [
            'title'             => 'Lucaffe Exquisit',
            'short_description' => 'Café en Grano 1 Kilo',
            'description'       => 'Café Lucaffe en Grano, 90% Arabica 10% Robusta. Café Exquisit, Mezcla extraordinaria con perfecto sabor y aroma. Es realmente un café exquisito para tomar, es un café Arábico que contiene un poco de café Robusta, para darle un sabor espectacular. Cuerpo medio, sabor dulce, aroma muy agradable. Recién molido el perfume es embriagador. Sin duda para paladares exigentes',
            'price'             => '35500',
            'offer_price'       => '32990',
            'created_at'        => Carbon::now()
        ]];

        DB::table('products')->insert($products);
    }
}