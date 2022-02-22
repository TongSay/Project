<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genders = [
            [
                'id'    => 1,
                'title_en'  => 'Male',
                'title_kh'  => 'ប្រុស',

            ],
            [
                'id'    => 2,
               
                'title_en'  => 'Female',
                'title_kh'  => 'ស្រី',
                
            ],
        ];

        Gender::insert($genders);
       
    }
}
