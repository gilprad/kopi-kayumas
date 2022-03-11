<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            '1' => [
                'admin',
                bcrypt('admin123'),
                'admin'
            ],
            '2' => [
                'ketua',
                bcrypt('ketua123'),
                'ketua'
            ],
            '3' => [
                'anggota',
                bcrypt('anggota123'),
                'anggota'
            ],
            '4' => [
                'pembeli',
                bcrypt('pembeli123'),
                'pembeli'
            ]
        ];

        foreach ($users as $key => $value) {
            $user = User::updateOrCreate([
                'id' => $key
            ],[
                'username' => $value[0],
                'password' => $value[1]
            ]);

            $user->roles()->detach();
            $user->assignRole($value[2]);
        }
    }
}
