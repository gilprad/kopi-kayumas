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
                'admin'
            ],
            '2' => [
                'Ketua',
                'ketua',
                'ketua123',
                'ketua'
            ],
            '3' => [
                'Anggota',
                'anggota',
                'anggota123',
                'anggota'
            ],
            '4' => [
                'Pembeli',
                'pembeli',
                'pembeli123',
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
                'old_password' => $value[2]
            ]);

            $user->roles()->detach();
            $user->assignRole($value[3]);
        }
    }
}
