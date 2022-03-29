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
                'Admin',
                'admin',
                'admin123',
                null,
                'admin'
            ],
            '2' => [
                'Ketua',
                'ketua',
                'ketua123',
                null,
                'ketua'
            ],
            '3' => [
                'Anggota',
                'anggota',
                'anggota123',
                2,
                'anggota'
            ],
            '4' => [
                'Pembeli',
                'pembeli',
                'pembeli123',
                null,
                'pembeli'
            ]
        ];

        foreach ($users as $key => $value) {
            $user = User::updateOrCreate([
                'id'           => $key
            ],[
                'name'         => $value[0],
                'username'     => $value[1],
                'password'     => bcrypt($value[2]),
                'old_password' => $value[2],
                'ketua_id'     => $value[3]
            ]);

            $user->roles()->detach();
            $user->assignRole($value[4]);
        }
    }
}
