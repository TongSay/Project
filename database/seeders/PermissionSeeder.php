<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           
            [
                'id' => 1,
                'role_id' => 1,
                'name' => '{"department":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"role":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"permission":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"user":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"loantype":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"loan":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"applyloan":{"can-view":"1","can-list":"1"},"news":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"report":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"jobtype":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"job":{"can-add":"1","can-edit":"1","can-view":"1","can-delete":"1","can-list":"1"},"applyjob":{"can-view":"1","can-list":"1"},"compliant":{"can-view":"1","can-list":"1"},"leave":{"can-list":"1"}}',
            ],
            [
                'id' => 2,
                'role_id' => 2,
                'name' => '{"user":{"can-view":"1","can-list":"1"}}',
            ],
        ];
        Permission::insert($permissions);
    }
}
