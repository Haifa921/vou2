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
            'name' => 'ذكاة المال',
            'min_amount'=>'0.00'
        ]);
        DonationType::factory()->create([
            'name' => 'سلة غذائية',
            'min_amount'=>'0.00'
        ]);
        DonationType::factory()->create([
            'name' => 'تدفئة',
            'min_amount'=>'16000.00'
        ]);
        DonationType::factory()->create([
            'name' => 'ملابس',
            'min_amount'=>'10000.00'
        ]);
        DonationType::factory()->create([
            'name' => 'جراجة',
            'min_amount'=>'0.00'
        ]);
    }
}
