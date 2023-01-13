<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('id', '>', 0)->delete();
        $userData = [
            [
                'name' => 'Admin',
                'account' => 'admin',
                'password' => Hash::make('123456'),
                'role' => UserRole::ADMIN,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 0,
            ],
            [
                'name' => 'NV1',
                'account' => 'nv1',
                'password' => Hash::make('123456'),
                'role' => UserRole::EMPLOYEE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 10000000,
            ],
            [
                'name' => 'NV2',
                'account' => 'nv2',
                'password' => Hash::make('123456'),
                'role' => UserRole::EMPLOYEE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 6000000,
            ],
        ];
        User::insert($userData);
    }
}
