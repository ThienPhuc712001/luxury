<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentsTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Apartment::create([
                'name' => 'Chung cư cao cấp ' . $i,
                'address' => 'Địa chỉ ' . $i,
                'price' => rand(20, 50) * 1000000,
                'general_info' => 'Thông tin chung về chung cư ' . $i,
                'detailed_info' => 'Thông tin chi tiết về chung cư ' . $i,
                'image_url' => 'https://example.com/image' . $i . '.jpg',
                'status' => rand(1, 3),
            ]);
        }

    }
}
