<?php

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "name" => 'admin',
                "description" => 'This is role description for admin',
            ],
            [
                "name" => 'mayor',
                "description" => 'This is role description for mayor',
            ],
            [
                "name" => 'secretary',
                "description" => 'This is role description for secretary',
            ],
            [
                "name" => 'accountant',
                "description" => 'This is role description for accountant',
            ],
            [
                "name" => 'engineer',
                "description" => 'This is role description for engineer',
            ],
            [
                "name" => 'commissioner',
                "description" => 'This is role description for commissioner',
            ],
            [
                "name" => 'receptionist',
                "description" => 'This is role description for receptionist',
            ],
            [
                "name" => 'general',
                "description" => 'This is role description for general',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
