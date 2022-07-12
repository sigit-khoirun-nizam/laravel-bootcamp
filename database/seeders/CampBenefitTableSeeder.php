<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Mahir dalam penjualan'
            ],
            [
                'camp_id' => 1,
                'name' => 'Belajar dari 0 menuju expert'
            ],
            [
                'camp_id' => 1,
                'name' => 'Trainer berpengalaman'
            ],
            [
                'camp_id' => 1,
                'name' => 'Face to face dengan trainer'
            ],
            [
                'camp_id' => 1,
                'name' => 'Harga pas dengan kantong kita'
            ],
            [
                'camp_id' => 2,
                'name' => 'Mahir dalam penjualan'
            ],
            [
                'camp_id' => 2,
                'name' => 'Harga pas dengan kantong kita'
            ]
            ];

            CampBenefit::insert($campBenefits);
    }
}
