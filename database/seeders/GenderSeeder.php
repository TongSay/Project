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
                'name'  => 'Male',

            ],
            [
                'id'    => 2,
                'name'  => 'Female',
                
            ],
        ];

        Gender::insert($genders);
       
    }
}
