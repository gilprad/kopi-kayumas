<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
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
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'ketua',
                'guard_name' => 'web'
            ],
            [
                'name' => 'anggota',
                'guard_name' => 'web'
            ],
            [
                'name' => 'pembeli',
                'guard_name' => 'web'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::updateOrCreate($value);
        }
    }
}
