<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            '1' => [
                'Kelompok Tani Sejahtera',
                'Desa Kayumas',
                '08123456789',
                2
            ]
        ];

        foreach ($groups as $key => $value) {
            $group = Group::updateOrCreate([
                'id'      => $key
            ],[
                'name'    => $value[0],
                'address' => $value[1],
                'phone'   => $value[2],
                'user_id' => $value[3]
            ]);
        }
    }
}
