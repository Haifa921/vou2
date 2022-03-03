<?php

namespace Database\Seeders;

use App\Models\DonationType;
use Illuminate\Database\Seeder;

class DonationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonationType::factory()->create([
            'id' => '1',
            'name' => 'ذكاة المال',
            'min_amount' => '0.00'
        ]);
        DonationType::factory()->create([
            'id' => '2',
            'name' => 'سلة غذائية',
            'min_amount' => '0.00'
        ]);
        DonationType::factory()->create([
            'id' => '3',
            'name' => 'تدفئة',
            'min_amount' => '16000.00'
        ]);
        DonationType::factory()->create([
            'id' => '4',
            'name' => 'ملابس',
            'min_amount' => '10000.00'
        ]);
        DonationType::factory()->create([
            'id' => '5',
            'name' => 'جراجة',
            'min_amount' => '0.00'
        ]);
    }
}
