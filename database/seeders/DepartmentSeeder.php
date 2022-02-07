<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'id' => 1,
                'name' => 'IT Department',
            ],
        ];
        Department::insert($departments);
    }
}
